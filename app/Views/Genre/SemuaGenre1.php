<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Genre</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <h1>Data Genre Film</h1>
    <table border="1", cellspacing="5", callpadding="5">
        <tr>
            <th>No</th>
            <th>Nama Genre</th>
            <th>Created</th>
            <th>Update</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($semua_genre as $genre) : ?>
        <tr>
            <td><?= $i++;?></td>
            <td><?php echo $genre ['nama_genre']?></td>
            <td><?= $genre ['created_at']?></td>
            <td><?= $genre ['updated_at']?></td>
        </tr>
        <?php endforeach; ?>
        </table>

        <?= $this->endSection() ?>
</body>
</html>