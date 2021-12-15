$(function(){

    $('.tombolTambahData').on('click', function(){

        $('#formModalLabel').html('Tambah data barang');
        $('.modal-footer button[type=submit]').html('Tambah data');
        $('.modal-body form').attr('action', 'http://localhost/mvc-inventaris-barang/public/inventory/add');

        $('#name').val('');
        $('#sku').val('');
        $('#category').val('Laptop');
        $('#price').val('');
        $('#stock').val('');
        $('#id').val('');

    });

    $('.tampilModalUbah').on('click', function(){
        
        $('#formModalLabel').html('Ubah data barang');
        $('.modal-footer button[type=submit]').html('Ubah data');
        $('.modal-body form').attr('action', 'http://localhost/mvc-inventaris-barang/public/inventory/update');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/mvc-inventaris-barang/public/inventory/getUpdate',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#name').val(data.nama);
                $('#sku').val(data.sku);
                $('#category').val(data.kategori);
                $('#price').val(data.harga_satuan);
                $('#stock').val(data.stok);
                $('#id').val(data.id);
            }
        });

    });
});