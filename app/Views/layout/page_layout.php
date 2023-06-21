<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layar Kaca 599</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>
<script src="/assets/js/bootstrap.min.js"></script>
    <!-- <h1>Data Film</h1> -->
    
    <nav class="navbar navbar-dark bg-dark">
    <!-- <nav class="navbar navbar-expand-lg bg-dark"> -->
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Layar Kaca 599</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- class="nav-link active -->
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/filem">Semua Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/genre/all">Kategori Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <div class="container">
        <!-- <footer class="jumbotron jumbotron-fluid mt-5 mb-0"> -->
        <footer class="row row-cols-5 py-5 my-5 border-top">
            <div class="container text-center">Copyright &copy
                <?= Date('Y') ?> Muhammad Dhuha
            </div>
        </footer>
    </div>


</body>

</html>