<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coworkind - Admin</title>

    <!-- page css -->

    <!-- Core css -->
    <link href="<?= base_url() ?>/admin/assets/css/app.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/admin/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/admin/assets/vendors/select2/select2.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <?= $this->include('layouts/admin/partial/header') ?>
            <!-- Header END -->

            <!-- Side Nav START -->
            <?= $this->include('layouts/admin/partial/sidebar') ?>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <?= $this->include('layouts/admin/partial/footer') ?>
                <!-- Footer END -->
            </div>
            <!-- Page Container END -->
        </div>
    </div>
    
    <!-- Core Vendors JS -->
    <script src="<?= base_url() ?>/admin/assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="<?= base_url() ?>/admin/assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/admin/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/admin/assets/vendors/select2/select2.min.js"></script>

    <!-- Core JS -->
    <script src="<?= base_url() ?>/admin/assets/js/app.min.js"></script>

    <script>
        $('#data-table').DataTable({
            "ordering": false
        });
        $('.select2').select2();
    </script>
</body>

</html>
