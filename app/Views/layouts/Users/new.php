<?= $this->extend('layouts/users/layouts/base') ?>

<?= $this->section('content') ?>
 <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="container mt-3">
    <div class="row mb-4">
        <div class="col-12">

            <form action="/order" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="example-product-name"><b>Tanggal</b></label>
                    <input type="date" class="form-control" id="tanggal" aria-describedby="emailHelp" 
                        placeholder="Tanggal hari ini" required name="tanggal">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Kode Barang</b></label>
                    <input type="text" class="form-control" id="kodebarang" aria-describedby="emailHelp" 
                        placeholder="Kode Barang" required name="kodebarang">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Quantity</b></label>
                    <input type="number" min="1" class="form-control" id="qty" aria-describedby="emailHelp" 
                        placeholder="Banyaknya barang pesanan" required name="qty">
                </div>

                <div class="form-group">
                    <label for="example-product-name"><b>Lokasi PLTU</b></label>
                    <input type="text" class="form-control" id="lokasipltu" aria-describedby="emailHelp" 
                        placeholder="Nama Perusahaan" required name="lokasipltu">
                </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?= $this->endSection() ?>