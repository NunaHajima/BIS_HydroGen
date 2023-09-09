<?= $this->extend('layouts/admin/layouts/base') ?>
<?= $this->section('content') ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- DataTales Example -->

<div class="card shadow mb-4">
<div class="container mt-3">

    <div class="row mb-4">
        <div class="col-12">
        
            <form action="/admin" method="post" enctype="multipart/form-data">         
                <div class="form-group">
                    <label for="example-product-name"><b>Tanggal</b></label>
                    <input type="date" class="form-control" id="tanggal" aria-describedby="emailHelp" 
                        placeholder="Tanggal hari ini" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Kode Barang</b></label>
                    <input type="text" class="form-control" id="kodebarang" aria-describedby="emailHelp" 
                        placeholder="Kode Barang" name="kodebarang">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Quantity</b></label>
                    <input type="number" min="1" class="form-control" id="qty" aria-describedby="emailHelp" 
                        placeholder="Banyaknya barang pesanan" name="qty">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Berat Satuan</b></label>
                    <input type="number" min="1" class="form-control" id="beratsatuan" aria-describedby="emailHelp" 
                        placeholder="Berat satuan barang (Kg)"  name="beratsatuan">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Berat Total</b></label>
                    <input type="number" min="1" class="form-control" id="berattotal" aria-describedby="emailHelp" 
                        placeholder="Berat total barang (Kg)"  name="berattotal">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Lokasi PLTU</b></label>
                    <input type="text" class="form-control" id="lokasipltu" aria-describedby="emailHelp" 
                        placeholder="Nama Perusahaan"  name="lokasipltu">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Harga Satuan</b></label>
                    <input type="int" class="form-control" id="hargasatuan" aria-describedby="emailHelp" 
                         name="hargasatuan">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Jumlah Harga</b></label>
                    <input type="int" class="form-control" id="jumlahharga" aria-describedby="emailHelp" 
                         name="jumlahharga">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Pengiriman ke Kantor Pusat</b></label>
                    <input type="date" class="form-control" id="keagen" aria-describedby="emailHelp" 
                         name="keagen">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Pengiriman Dari Kantor Pusat</b></label>
                    <input type="date" class="form-control" id="dariagen" aria-describedby="emailHelp" 
                         name="dariagen">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Pengiriman UPS</b></label>
                    <input type="date" class="form-control" id="ups" aria-describedby="emailHelp" 
                         name="ups">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Barang Sampai Kantor</b></label>
                    <input type="date" class="form-control" id="sampaikantor" aria-describedby="emailHelp" 
                         name="sampaikantor">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Tanggal Pengiriman</b></label>
                    <input type="date" class="form-control" id="tanggalpengiriman" aria-describedby="emailHelp" 
                         name="tanggalpengiriman">
                </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?= $this->endSection() ?>