<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="display-4 text-center">Selamat datang di MVC-INVENTORY</h1>
        <p class="lead text-center">Halo, <?= ucwords($_SESSION['login']); ?></p>
        <hr class="my-4">
        <p class="text-center">Mulailah mengelola inventaris barang dengan bahagia dan penuh semangat.</p>
        <div class="row mt-2">
            <div class="col-lg-12">
                <div class="mx-auto d-block" style="width: 10rem;">
                    <a class="btn btn-primary btn-lg mx-auto d-block" href="<?= BASEURL ?>/inventory" role="button">Mulai Kelola</a>
                </div>
            </div>
        </div>
    </div>
</div>