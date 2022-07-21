<?php 
    if(isset($_GET['to'])){
        $undang = $_GET['to'];
        $nama = $undang." & Partner";
    }else{
        $nama = "Saudara/Saudari";
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Wedding of Erick & Putri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <div class="container">
        <div class="row d-flex justify-content-center">
            <img src="img/corner 10.png" alt="" class="w-25">
            <img src="img/corner 11.png" alt="" class="w-25">
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="judul">Putri</h1>
                <h2 class="judul2">&</h2>
                <h1 class="judul">Erick</h1>
                <h3 class="judul2">Sabtu, 23 Juli 2022</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <img src="img/corner 13.png" alt="" class="w-25">
            <img src="img/corner 12.png" alt="" class="w-25">
        </div>
    </div>
    <div class="container pt-2" style="padding-bottom: 100px;">
        <div class="row text-center">
            <div class="col">
            <p class="pt-3"><?= $nama; ?></p>
                <div class="col">
                    <a href="home.php" class="btn text-light" style="background-color: #BD83CE ;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                        <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z"/>
                    </svg> Open Invitation</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>