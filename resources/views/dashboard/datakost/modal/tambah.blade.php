<div class="modal fade" id="tambahKost">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kost Baru</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form action="{{ route('datakost.insert') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Kost</label>
                        <input type="text" class="form-control" name="namakost">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Harga</label>
                        <input type="text" class="form-control" id="rupiah" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Fasilitas</label>
                        <input type="text" class="form-control" name="fasilitas">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Tipe Kost</label>
                        <select class="form-control" name="tipekost" aria-label="Default select example">
                            <option value="Menengah" selected>Menengah</option>
                            <option value="Eksklusif">Eksklusif</option>
                            <option value="Standard">Standard</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Sistem Kontrak</label>
                        <select class="form-control" name="sistemkontrak" aria-label="Default select example">
                            <option value="Bulanan" selected>Bulanan</option>
                            <option value="Tahunan">Tahunan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">

    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
    }
</script>
