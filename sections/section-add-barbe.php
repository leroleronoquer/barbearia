<?php
include '../config-php/config.php';

$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');

    if (empty($nome) || empty($descricao)) {
        $erro = "Por favor, preencha nome e descrição.";
    } elseif (!isset($_FILES['logo']) || $_FILES['logo']['error'] !== UPLOAD_ERR_OK) {
        $erro = "Por favor, envie a logo da barbearia.";
    } else {
        // Caminho físico da pasta uploads (uma pasta acima de sections)
        $uploadDir = __DIR__ . '/../uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $tmpName = $_FILES['logo']['tmp_name'];
        $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
        $nomeArquivo = uniqid('logo_') . '.' . $ext;
        $destino = $uploadDir . $nomeArquivo;

        if (move_uploaded_file($tmpName, $destino)) {
            // Caminho relativo para salvar no banco e usar no HTML (a partir da raiz do projeto)
            $logoPath = 'uploads/' . $nomeArquivo;

            $stmt = $conn->prepare("INSERT INTO barbearias (nome, descricao, logo) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nome, $descricao, $logoPath);

            if ($stmt->execute()) {
                $sucesso = "Barbearia adicionada com sucesso!";
                // Redirecionar para o catálogo após 2 segundos
                header("refresh:2;url=../sections/section-services.php");
            } else {
                $erro = "Erro ao salvar no banco: " . $conn->error;
            }
            $stmt->close();
        } else {
            $erro = "Falha ao enviar o arquivo da logo.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Adicionar Barbearia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container my-5" style="max-width: 600px;">
        <h1 class="mb-4">Adicionar Barbearia</h1>

        <?php if ($erro): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($erro); ?></div>
        <?php endif; ?>

        <?php if ($sucesso): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($sucesso); ?></div>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data" novalidate>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome da Barbearia</label>
                <input type="text" class="form-control" id="nome" name="nome" required
                    value="<?php echo htmlspecialchars($_POST['nome'] ?? '') ?>">
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3"
                    required><?php echo htmlspecialchars($_POST['descricao'] ?? '') ?></textarea>
            </div>

            <div class="mb-3">
                <label for="logo" class="form-label">Logo da Barbearia (imagem)</label>
                <input type="file" class="form-control" id="logo" name="logo" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Adicionar</button>
            <a href="../index.php" class="btn btn-secondary ms-2">Voltar</a>
        </form>
    </div>
</body>

</html>