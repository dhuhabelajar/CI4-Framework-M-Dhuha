<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-master">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                <h1>Halaman Tambah Data Film</h1>
            </div>

            <form action="">
                <div class="row">
                    <div class="col-md-6">
                            <label for="nama_filem" class="form-label">Nama Film</label>
                            <input type="text" class="form-control" id="nama_filem" name="nama_filem">
                    </div>
                    <div class="col-md-6">
                            <label for="genre" class="form-label">Genre</label>
                            <select name="id_genre" id="genre" class="form-control" name="id_genre">
                                <option value=""></option>
                            </select>
                    </div>
                    <div class="col-md-6">
                        <label for="duration" class="form-label">Durasi</label>
                            <input type="text" class="form-control" id="duration" name="duration">
                    </div>
                    <div class="col-md-6">
                        <label for="cover" class="form-label">Cover</label>
                            <input type="file" class="form-control" id="cover" name="cover">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                </div>
            </form>
            <div class="col-md-12">
                <a href="/filem" class="btn btn-dark">Kembali</a>
            </div>
            
            <div class="card-body">
        </div>
</div>
</div>
</div>
</div>

<?= $this->endSection() ?> 