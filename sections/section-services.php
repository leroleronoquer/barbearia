<?php
include '../config-php/config.php'; // Se esse arquivo já inicializa $conn com mysqli

// Busca todas as barbearias
$result = $conn->query("SELECT * FROM barbearias ORDER BY nome");

$barbearias = [];
while ($row = $result->fetch_assoc()) {
    $barbearias[] = $row;
}
?>

<!DOCTYPE php>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Catálogo de Barbearias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
    body {
        background: #f8f9fa;
    }

    .card-custom {
        cursor: pointer;
        max-width: 600px;
        width: 50vw;
        margin-bottom: 1rem;
    }

    .card-custom:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        transform: scale(1.02);
        transition: 0.2s ease-in-out;
    }

    .logo-barbearia {
        max-width: 100px;
        max-height: 100px;
        object-fit: contain;
    }
    </style>
</head>

<body>
    <div class="container my-5 d-flex flex-column align-items-center">

        <h1 class="mb-4">Catálogo de Barbearias</h1>

        <!-- Input de pesquisa -->
        <input id="filtro" type="text" class="form-control mb-4" style="max-width:600px;"
            placeholder="Pesquise por nome da barbearia..." />

        <!-- Container dos cards -->
        <div id="catalogo" class="d-flex flex-column align-items-center"></div>

        <!-- Navegação de páginas -->
        <nav aria-label="Paginação do catálogo">
            <ul class="pagination justify-content-center mt-3">
                <li class="page-item"><button id="btnPrev" class="page-link">← Anterior</button></li>
                <li class="page-item"><button id="btnNext" class="page-link">Próximo →</button></li>
            </ul>
        </nav>
    </div>

    <script>
    // Dados das barbearias do PHP (JSON)
    const barbearias = <?php echo json_encode($barbearias); ?>;
    const catalogo = document.getElementById('catalogo');
    const filtroInput = document.getElementById('filtro');
    const btnPrev = document.getElementById('btnPrev');
    const btnNext = document.getElementById('btnNext');
    const maxPorPagina = 7;
    let paginaAtual = 0;
    let barbeariasFiltradas = [...barbearias]; // copia inicial

    function renderizarCatalogo() {
        catalogo.innerHTML = '';
        const inicio = paginaAtual * maxPorPagina;
        const fim = inicio + maxPorPagina;
        const pagina = barbeariasFiltradas.slice(inicio, fim);

        if (pagina.length === 0) {
            catalogo.innerHTML = '<p>Nenhuma barbearia encontrada.</p>';
            return;
        }

        pagina.forEach(barbearia => {
            const card = document.createElement('div');
            card.className = 'card card-custom shadow-sm';
            card.onclick = () => {
                window.location.href = `pagina_barbearia.php?id=${barbearia.id}`;
            };

            card.innerHTML = `
        <div class="row g-0 align-items-center">
          <div class="col-auto p-3">
            <img src="${barbearia.logo}" alt="${barbearia.nome}" class="logo-barbearia img-fluid rounded" />
          </div>
          <div class="col p-3">
            <h5>${barbearia.nome}</h5>
            <p class="mb-0">${barbearia.descricao}</p>
          </div>
        </div>
      `;
            catalogo.appendChild(card);
        });

        // Controla desabilitação dos botões
        btnPrev.disabled = paginaAtual === 0;
        btnNext.disabled = fim >= barbeariasFiltradas.length;
    }

    // Evento pesquisa filtra e reseta página
    filtroInput.addEventListener('input', () => {
        const termo = filtroInput.value.toLowerCase();
        paginaAtual = 0;
        barbeariasFiltradas = barbearias.filter(b =>
            b.nome.toLowerCase().includes(termo) || b.descricao.toLowerCase().includes(termo)
        );
        renderizarCatalogo();
    });

    btnPrev.addEventListener('click', () => {
        if (paginaAtual > 0) {
            paginaAtual--;
            renderizarCatalogo();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    });

    btnNext.addEventListener('click', () => {
        if ((paginaAtual + 1) * maxPorPagina < barbeariasFiltradas.length) {
            paginaAtual++;
            renderizarCatalogo();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    });

    // Render inicial
    renderizarCatalogo();
    </script>

</body>

</html>