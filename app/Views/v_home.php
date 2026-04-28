<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="pagetitle"><h1>WarmadZ Dashboard</h1></div>

<div class="row">
  <div class="col-md-4">
    <div class="card text-white bg-primary mb-3 shadow-sm border-0">
      <div class="card-body">
        <h5 class="card-title text-white">Total Produk</h5>
        <div class="d-flex justify-content-between align-items-center">
          <h2>150</h2>
          <i class="bi bi-box-seam fs-1 opacity-50"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-white bg-success mb-3 shadow-sm border-0">
      <div class="card-body">
        <h5 class="card-title text-white">Pesanan Baru</h5>
        <div class="d-flex justify-content-between align-items-center">
          <h2>24</h2>
          <i class="bi bi-cart-check fs-1 opacity-50"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-white bg-warning mb-3 shadow-sm border-0">
      <div class="card-body">
        <h5 class="card-title text-white">Pendapatan</h5>
        <div class="d-flex justify-content-between align-items-center">
          <h2>Rp 50M</h2>
          <i class="bi bi-wallet2 fs-1 opacity-50"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>