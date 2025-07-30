<?php
 if(!isset($_SESSION)){
  session_start();
}


?>
<!DOCTYPE php>

<php>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>section-homepage</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../global.css">
        <link rel="stylesheet" href="../styles/nav.css">
        <link rel="stylesheet" href="../styles/section-profile.css">
    </head>

    <body>
        <button onclick="location.href='../config-php/logout.php'">Sair</button>
        <div class="profile " onclick="window.location.href='section-profile.php'">

            <div class="mini-picture">

            </div>
            <div class="name" id="nameProfile">
                <?php echo $_SESSION['name']; ?>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="../scripts/section-homepage.js"></script>
    </body>
</php>