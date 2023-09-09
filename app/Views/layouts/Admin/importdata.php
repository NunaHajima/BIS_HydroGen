<?= $this->extend('layouts/admin/layouts/base') ?>

<?= $this->section('content') ?>
 <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Import Pesanan
        </div>
<div class="container mt-3">
    <div class="row mb-4">
        <div class="col-12">
        
        <br>
            <div class="row">
                <div class="col-4">
                    <?php echo form_open_multipart('admin/import');?>
                    <div class="form-group">
                        <input name="file_excel" type="file" class="form-control" accept=".xls, .xlsx">
                    </div>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-success col-auto">submit</button>
                </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>