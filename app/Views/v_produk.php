<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="pagetitle"><h1>Katalog TI WarmadZ</h1></div>

<div class="row">
  <div class="col-lg-4 col-md-6">
    <div class="card h-100 border-0 shadow-sm">
      <div class="card-body text-center py-4">
        <div class="display-4 text-primary mb-3"><i class="bi bi-laptop"></i></div>
        <h5 class="card-title">MacBook Pro M3</h5>
        <p class="small text-muted">Chip M3, 16GB RAM, 512GB SSD</p>
        <h4 class="text-dark fw-bold">Rp 24.500.000</h4>
        <button class="btn btn-outline-primary w-100 mt-3">Tambah</button>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 border-0 shadow-sm">
      <div class="card-body text-center py-4">
        <div class="display-4 text-success mb-3"><i class="bi bi-keyboard"></i></div>
        <h5 class="card-title">Mechanical Keyboard</h5>
        <p class="small text-muted">RGB Backlit, Brown Switch</p>
        <h4 class="text-dark fw-bold">Rp 1.500.000</h4>
        <button class="btn btn-outline-primary w-100 mt-3">Tambah</button>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="card h-100 border-0 shadow-sm">
      <div class="card-body text-center py-4">
        <div class="display-4 text-info mb-3"><i class="bi bi-display"></i></div>
        <h5 class="card-title">Monitor 4K WarmadZ</h5>
        <p class="small text-muted">27-inch IPS, 144Hz Refresh Rate</p>
        <h4 class="text-dark fw-bold">Rp 6.800.000</h4>
        <button class="btn btn-outline-primary w-100 mt-3">Tambah</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>