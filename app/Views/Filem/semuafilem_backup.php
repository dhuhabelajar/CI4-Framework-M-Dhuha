<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Film</h1>
    <table border="1", cellspacing="5", callpadding="5">
        <tr>
            <th>No</th>
            <th>Cover</th>
            <th>Nama</th>
            <th>Nama Genre</th>
            <th>Durasi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($semuafilem as $filem) : ?>
        <tr>
            <td><?= $i++;?></td>
            <td>
                <img style="width: 50px;" src="/assets/cover/<?= $filem ['cover'] ?>" alt="">
            </td>
            <td><?php echo $filem ['nama_filem']?></td>
            <td><?= $filem ['nama_genre']?></td>
            <td><?= $filem ['duration']?></td>
        </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>