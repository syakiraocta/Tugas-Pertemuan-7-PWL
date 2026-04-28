<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="pagetitle"><h1>Keranjang WarmadZ</h1></div>

<div class="card border-0 shadow-sm">
  <div class="card-body pt-4">
    <table class="table table-borderless">
      <thead class="table-light">
        <tr>
          <th>Item</th>
          <th>Harga</th>
          <th class="text-center">Qty</th>
          <th>Total</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong><i class="bi bi-laptop me-2"></i> MacBook Pro M3</strong></td>
          <td>Rp 24.500.000</td>
          <td class="text-center">1</td>
          <td>Rp 24.500.000</td>
          <td><button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button></td>
        </tr>
      </tbody>
    </table>
    <hr>
    <div class="d-flex justify-content-between align-items-center mt-4">
      <h3 class="fw-bold mb-0">Total: Rp 24.500.000</h3>
      <button class="btn btn-success btn-lg px-5">Checkout Sekarang</button>
    </div>
  </div>
</div>
<?= $this->endSection() ?>