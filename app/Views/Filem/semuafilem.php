<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
   <div class="container">

    <div class="row">
    <?php foreach ($semuafilem as  $filem): ?>
        <div class="col-md-4">
            <div class="card">
                <img src="/assets/cover/<?= $filem["cover"]?>" class="card-image-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?= $filem["nama_filem"]?></h5>
                    <p class="card-text"><?= $filem["nama_genre"]?> || <?= $filem["duration"]?></p>
                    <a href="#" class="btn btn-info">Detail</a>
                    <a href="#" class="btn btn-success">update</a></a>
                    <a href="#" class="btn btn-warning">Delete</a></p>
                </div>
            </div>
    </div>
    <?php endforeach;?> 
    
</div>
<?= $this->endSection() ?>   
</body>

</html>