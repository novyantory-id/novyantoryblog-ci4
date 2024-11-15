<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Dashboard</h5>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card bg-success p-1">
                    <div class="card-body text-center">
                        <h5 class="fw-semibold mb-4">Jumlah Artikel</h5>
                        <p><strong><?= $totalArtikel ?> Artikel</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card bg-warning p-1">
                    <div class="card-body text-center">
                        <h5 class="fw-semibold mb-4">Jumlah Artikel Saya</h5>
                        <p><strong><?= $totalArtikelByUser ?> Artikel</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card bg-secondary p-1">
                    <div class="card-body text-center">
                        <h5 class="fw-semibold mb-4">Jumlah User</h5>
                        <p><strong><?= $totalUser ?> User</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card bg-danger p-1">
                    <div class="card-body text-center">
                        <h5 class="fw-semibold mb-4">Jumlah Kategori</h5>
                        <p><strong><?= $totalKategori ?> Kategori</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card bg-warning p-1">
                    <div class="card-body text-center">
                        <h5 class="fw-semibold mb-4">Jumlah Slide</h5>
                        <p><strong><?= $totalSlide ?> Slide</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card bg-dark p-1">
                    <div class="card-body text-center text-light">
                        <h5 class="fw-semibold mb-4 text-light">Jumlah Tag</h5>
                        <p><strong><?= $totalTag ?> Tag</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>