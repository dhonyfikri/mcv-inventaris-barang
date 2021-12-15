<div class="container mt-3">

    <div class="row">
        
        <div class="col-sm">
        
            <img src="<?= BASEURL ?>/img/logo.png" alt="INV-MVC Logo" width="250" class="rounded mx-auto d-block mt-5">

            <div class="row mb-5 mt-5">
                <div class="col-lg-4">
                <form action="<?= BASEURL; ?>/inventory/search" method="post">
                    <label for="category">Cari berdasarkan</label>
                    <select class="form-control" id="filter" name="filter">
                        <option <?php if(isset($data['current_filter']) && $data['current_filter'] == 'nama') echo 'selected' ?> value="nama">Nama</option>
                        <option <?php if(isset($data['current_filter']) && $data['current_filter'] == 'kategori') echo 'selected' ?> value="kategori">Kategori</option>
                        <option <?php if(isset($data['current_filter']) && $data['current_filter'] == 'sku') echo 'selected' ?> value="sku">SKU</option>
                    </select>
                </div>
                <div class="col-lg-8 align-self-end">
                    <div class="input-group">
                        <input type="text" class="form-control" value="<?php if(isset($data['current_keyword'])) echo $data['current_keyword'] ?>" placeholder="Cari barang..." autocomplete="off" name="keyword" id="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>

            <button type="button" class="btn btn-primary rounded mx-auto d-block tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah data
            </button>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <?= Flasher::flash(); ?>
                </div>
            </div>

        </div>

        <div class="col-sm">

            <div class="row">
                <div class="col-lg-12 mt-4">

                    <h3 class="text-center mb-4">Daftar Barang</h3>

                    <ul class="list-group">
                        <?php foreach ($data['item'] as $item): ?>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-8 p-2">
                                        <?= $item['nama'] ?>
                                    </div>
                                    <div class="col-lg-4 p-2">
                                        <a href="<?= BASEURL; ?>/inventory/delete/<?= $item['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ingin hapus?');">Hapus</a>
                                        <a href="<?= BASEURL; ?>/inventory/update/<?= $item['id'] ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $item['id']; ?>">Ubah</a>
                                        <a href="<?= BASEURL; ?>/inventory/detail/<?= $item['id'] ?>" class="badge badge-primary float-right ml-1">Detail</a>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/inventory/add" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Barang" required>
            </div>

            <div class="form-group">
                <label for="no">Unit Penyimpanan Stok</label>
                <input type="text" class="form-control" id="sku" name="sku" required>
            </div>

            <div class="form-group">
                <label for="email">Harga satuan</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <div class="form-group">
                <label for="email">Jumlah Stok</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>

            <div class="form-group">
                <label for="category">Kategori</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Laptop">Laptop</option>
                    <option value="Komputer">Komputer</option>
                    <option value="Hardisk">Hardisk</option>
                    <option value="Monitor">Monitor</option>
                    <option value="Mouse">Mouse</option>
                    <option value="Keyboard">Keyboard</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>