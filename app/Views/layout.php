<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WarmadZ - Admin Dashboard</title>

  <link href="<?= base_url('NiceAdmin/assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('NiceAdmin/assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <link href="<?= base_url('NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin/assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin/assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin/assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('NiceAdmin/assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">

  <link href="<?= base_url('NiceAdmin/assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
  <?= $this->include('components/header') ?>
  <?= $this->include('components/sidebar') ?>

  <main id="main" class="main">
    <section class="section">
      <?= $this->renderSection('content') ?>
    </section>
  </main>

  <?= $this->include('components/footer') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="<?= base_url('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?= base_url('NiceAdmin/assets/vendor/chart.js/chart.umd.js') ?>"></script>
  <script src="<?= base_url('NiceAdmin/assets/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?= base_url('NiceAdmin/assets/vendor/quill/quill.min.js') ?>"></script>
  <script src="<?= base_url('NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js') ?>"></script>
  <script src="<?= base_url('NiceAdmin/assets/vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?= base_url('NiceAdmin/assets/vendor/php-email-form/validate.js') ?>"></script>

  <script src="<?= base_url('NiceAdmin/assets/js/main.js') ?>"></script>
</body>
</html>