<div class="container mt-4">

    <div class="row">
        <div class="col-lg-12 mt-4">
            <h3 class="text-center mb-4">Detail Barang</h3>
            <div class="card rounded mx-auto d-block" style="width: 40rem;">
                <div class="card-body">

                    <div class="row">
                        <div class="col-4">Nama barang</div>
                        <div class="col-1">:</div>
                        <div class="col-7">
                        <h5 class="card-title"><?= $data['item']['nama'] ?></h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">Kode Penyimpanan</div>
                        <div class="col-1">:</div>
                        <div class="col-7">
                        <h6 class="card-text"><?= $data['item']['sku'] ?></h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">Kategori</div>
                        <div class="col-1">:</div>
                        <div class="col-7">
                        <p class="card-text"><?= $data['item']['kategori'] ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">Harga satuan</div>
                        <div class="col-1">:</div>
                        <div class="col-7">
                        <p class="card-text">Rp. <?= $data['item']['harga_satuan'] ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">Stok terkini</div>
                        <div class="col-1">:</div>
                        <div class="col-7">
                        <p class="card-text"><?= $data['item']['stok'] ?> Unit</p>
                        </div>
                    </div>

                    <hr class="my-3">

                    <form action="<?= BASEURL; ?>/inventory">
                        <button type="submit" class="btn btn-primary mt-2">
                            Kembali
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>