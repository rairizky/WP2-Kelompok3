<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coworkind - Admin Login</title>

    <!-- page css -->

    <!-- Core css -->
    <link href="<?= base_url() ?>/admin/assets/css/app.min.css" rel="stylesheet">

</head>

<body>

    <?= $this->renderSection('content') ?>

    <!-- Core Vendors JS -->
    <script src="<?= base_url() ?>/admin/assets/js/vendors.min.js"></script>

    <!-- Core JS -->
    <script src="<?= base_url() ?>/admin/assets/js/app.min.js"></script>
    <script src="<?= base_url() ?>/admin/assets/vendors/jquery-validation/jquery.validate.min.js"></script>

    <?= $this->renderSection('script') ?>
</body>

</html>