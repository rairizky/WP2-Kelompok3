<?= $this->extend('layouts/admin/index') ?>

<?= $this->section('content') ?>
    <?php echo uri_string() ?>
    <?php echo route_to('admin_transaction') ?>
<?= $this->endSection() ?>