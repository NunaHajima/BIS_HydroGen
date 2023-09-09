<?= $this->extend('layouts/admin/layouts/base') ?>

<?= $this->section('content') ?>
 <!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pemesanan
        </div>
        <br/>
        <div class="container">
        <div class="card-body">
        <div class="table-responsive " >
                <table class="table table-bordered table-striped text-center" id="dataTable" width="100" cellspacing="0" >
                    <thead class="thead-dark " >
                        <tr>
                            <th class="align-middle">No</th>
                            <th class="align-middle">Tanggal Pemesanan</th>
                            <th class="align-middle">Kode Barang</th>
                            <th class="align-middle">Qty</th>
                            <th class="align-middle">Berat Satuan</th>
                            <th class="align-middle">Berat Total</th>
                            <th class="align-middle">Lokasi PLTU</th>
                            <th class="align-middle">Harga Satuan</th>
                            <th class="align-middle">Jumlah Harga</th>
                            <th class="align-middle">Pemesanan Ke Pusat</th>
                            <th class="align-middle">Pengiriman Dari Pusat</th>
                            <th class="align-middle">UPS</th>
                            <th class="align-middle">Sampai Kantor</th>
                            <th class="align-middle">Tanggal Pengiriman</th>
                            <th class="align-middle">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($products as $item): ?>
                        <tr><h5><small>
                            <td class="align-middle"><?= $no += 1; ?></td>
                            <td class="align-middle"><?= $item['tanggal'] ?></td>
                            <td class="align-middle"><?= $item['kodebarang'] ?></td>
                            <td class="align-middle"><?= $item['qty'] ?></td>
                            <td class="align-middle"><?= $item['beratsatuan'] ?></td>
                            <td class="align-middle"><?= $item['berattotal'] ?></td>
                            <td class="align-middle"><?= $item['lokasipltu'] ?></td>
                            <td class="align-middle"><?= $item['hargasatuan'] ?></td>
                            <td class="align-middle"><?= $item['jumlahharga'] ?></td>
                            <td class="align-middle"><?= $item['keagen'] ?></td>
                            <td class="align-middle"><?= $item['dariagen'] ?></td>
                            <td class="align-middle"><?= $item['ups'] ?></td>
                            <td class="align-middle"><?= $item['sampaikantor'] ?></td>
                            <td class="align-middle"><?= $item['tanggalpengiriman'] ?></td>
                            <td class="align-middle">
                                <div class="btn btn-group text-center" role="group" aria-label="Basic example ">
                                        <form action="/admin/<?= $item['id'] ?>"  method="post" onsubmit="return confirm(`Are you sure?`)">
                                            <a href="/admin/<?= $item['id'] ?>/edit" class="btn btn-info btn-sm text-white "><i class="fas fa-pencil-alt"></i></a>
                                        </form>
                                        <form action="/admin/<?= $item['id'] ?>"  method="post" onsubmit="return confirm(`Are you sure?`)">
                                            <input  type="hidden" name="_method" value="delete" />
                                            <button class="btn btn-danger btn-sm text-white "  type="submit"><i class="fas fa-trash"></i></button>
                                        </form>
                                        
                                </div>
                            </td>
                        </tr>
                        </h5>
                        </small>
                    <?php endforeach ?>    
                </tbody>
                </table>
            </div>
        </div>
        <div class="col-12">
            <?= $pager->links('products', 'custom_pagination') ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>