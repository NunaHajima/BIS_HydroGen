<?= $this->extend('layouts/admin/layouts/base') ?>

<?= $this->section('content') ?>
 <!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pengguna
        </div>
        <br/>
        <div class="card-body">
        <div class="table-responsive ">
                <table class="table table-bordered table-striped text-center " id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark ">
                        <tr>
                            <th class="align-middle">No</th>
                            <th class="align-middle">Nama Perusahaan</th>
                            <th class="align-middle">Email Pengguna</th>
                            <th class="align-middle">Alamat Perusahaan</th>
                            <th class="align-middle">Kontak</th>                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($user as $item): ?>
                        <tr><h5><small>
                            <td class="align-middle"><?= $no += 1; ?></td>
                            <td class="align-middle"><?= $item['namaperusahaan'] ?></td>
                            <td class="align-middle"><?= $item['email'] ?></td>
                            <td class="align-middle"><?= $item['alamatperusahaan'] ?></td>
                            <td class="align-middle"><?= $item['notelp'] ?></td>
                        </tr>
                        </h5>
                        </small>
                    <?php endforeach ?>    
                </tbody>
                </table>
            </div>
        </div>
        <div class="col-12">
            <?= $pager->links('user', 'custom_pagination') ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection() ?>