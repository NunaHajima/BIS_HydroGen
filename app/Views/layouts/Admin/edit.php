<?= $this->extend('layouts/admin/layouts/base') ?>

<?= $this->section('content') ?>
 <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="container mt-3">
    <div class="row mb-4">
        <div class="col-12">
            <form action="/admin/<?= $data['id'] ?>/update" method="post">
            <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-product-name"><b>Tanggal</b></label>
                    <input type="date" class="form-control" id="tanggal" aria-describedby="emailHelp" 
                        placeholder="Tanggal hari ini" required name="tanggal" value="<?= $data['tanggal'] ?>">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Kode Barang</b></label>
                    <input type="text" class="form-control" id="kodebarang" aria-describedby="emailHelp" 
                        placeholder="Kode Barang" required name="kodebarang" value="<?= $data['kodebarang'] ?>">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Quantity</b></label>
                    <input type="number" class="form-control" id="qty" aria-describedby="emailHelp" 
                        placeholder="Banyaknya barang pesanan" required name="qty" value="<?= $data['qty'] ?>">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Berat Satuan</b></label>
                    <input type="number" class="form-control" id="beratsatuan" aria-describedby="emailHelp" 
                        placeholder="Berat satuan barang (Kg)" required name="beratsatuan" value="<?= $data['beratsatuan'] ?>">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Berat Total</b></label>
                    <input type="number" class="form-control" id="berattotal" aria-describedby="emailHelp" 
                        placeholder="Berat total barang (Kg)" required name="berattotal" value="<?= $data['berattotal'] ?>">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Lokasi PLTU</b></label>
                    <input type="text" class="form-control" id="lokasipltu" aria-describedby="emailHelp" 
                        placeholder="Nama Perusahaan" required name="lokasipltu" value="<?= $data['lokasipltu'] ?>">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Harga Satuan</b></label>
                    <input type="int" class="form-control" id="hargasatuan" aria-describedby="emailHelp" 
                        name="hargasatuan" value="<?= $data['hargasatuan'] ?>">
                </div>  
                <div class="form-group">
                    <label for="example-product-name"><b>Jumlah Harga</b></label>
                    <input type="int" class="form-control" id="jumlahharga" aria-describedby="emailHelp" 
                        name="jumlahharga" value="<?= $data['jumlahharga'] ?>">
                </div> 
                <div class="form-group">
                    <label for="example-product-name"><b>Pengiriman ke Kantor Pusat</b></label>
                    <input type="date" class="form-control" id="keagen" aria-describedby="emailHelp" 
                        name="keagen" value="<?= $data['keagen'] ?>">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Pengiriman dari Kantor Pusat</b></label>
                    <input type="date" class="form-control" id="dariagen" aria-describedby="emailHelp" 
                        name="dariagen" value="<?= $data['dariagen'] ?>">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Pengiriman UPS</b></label>
                    <input type="date" class="form-control" id="ups" aria-describedby="emailHelp" 
                        name="ups" value="<?= $data['ups'] ?>">
                </div> 
                <div class="form-group">
                    <label for="example-product-name"><b>Barang Sampai Kantor</b></label>
                    <input type="date" class="form-control" id="sampaikantor" aria-describedby="emailHelp" 
                        name="sampaikantor" value="<?= $data['sampaikantor'] ?>">
                </div>
                <div class="form-group">
                    <label for="example-product-name"><b>Tanggal Pengiriman</b></label>
                    <input type="date" class="form-control" id="tanggalpengiriman" aria-describedby="emailHelp" 
                        name="tanggalpengiriman" value="<?= $data['tanggalpengiriman'] ?>">
                </div>                 
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?= $this->endSection() ?>