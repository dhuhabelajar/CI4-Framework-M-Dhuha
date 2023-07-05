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
        <div class="col-mod-12">
            <div class="col-md-6">
                <h1>Semua Film</h1>
            </div>
            <div class="col-md- text-end">
                <a href="/filem/add/" class="btn btn-primary">Tambah Data</a>

            </div>
            <table class="table table-hover">
                <tr>
                    <th>No.</th>
                    <th>Cover</th>
                    <th>Nama Film</th>
                    <th>Genre</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($data_filem as $filem) : ?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td>
                        <img src="/assets/cover/<?= $filem["cover"] ?> " alt="Image" width="70px" height="100px">
                        </td>
                        <td><?= $filem['nama_filem']?></td>
                        <td><?= $filem['nama_genre']?></td>
                        <td><?= $filem['duration']?></td>
                        <td>
                            <a href="/filem/edit<?= $filem["id"]; ?>" class="btn btn-success">Update</a>
                            <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </table>
        </div>
    </div>
</div>
<!-- tambahkan dari sini  -->
<script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/filem/destroy/<?= $filem['id'] ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
  <!-- sampai sini -->
<?= $this->endSection() ?>     
</body>

</html>