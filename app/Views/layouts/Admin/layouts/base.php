<!DOCTYPE html>
<html lang="en">

<head>
<?= $this->include('layouts/admin/layouts/head') ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('layouts/admin/layouts/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            

            <!-- Main Content -->
            <div id="content">
                <!-- Navbar -->
                <?= $this->include('layouts/admin/layouts/navbar') ?>
                
                <!-- End of Navbar -->
                
                <!-- Begin Page Content -->
                <?= $this->renderSection('content') ?>            
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?= $this->include('layouts/admin/layouts/footer') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <?= $this->include('layouts/admin/layouts/scripts') ?>
</body>

</html>