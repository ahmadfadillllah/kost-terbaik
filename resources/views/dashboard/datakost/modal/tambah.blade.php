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
                        <label for="formGroupExampleInput">Kode Kost</label>
                        <input type="text" class="form-control" value="A1" readonly>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Kost</label>
                        <input type="text" class="form-control" name="nama_kost">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Fasilitas</label>
                        <select class="form-control" name="fasilitas" aria-label="Default select example">
                            <option value="Tidak Lengkap" selected>Tidak Lengkap</option>
                            <option value="Kurang Lengkap">Kurang Lengkap</option>
                            <option value="Lengkap">Lengkap</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Harga Sewa</label>
                        <select class="form-control" name="harga_sewa" aria-label="Default select example">
                            <option value="Murah" selected>Murah</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Mahal">Mahal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Fasilitas</label>
                        <select class="form-control" name="fasilitas" aria-label="Default select example">
                            <option value="Lengkap" selected>Lengkap</option>
                            <option value="Kurang Lengkap">Kurang Lengkap</option>
                            <option value="Tidak Lengkap">Tidak Lengkap</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Sistem Kontrak</label>
                        <select class="form-control" name="sistem_kontrak" aria-label="Default select example">
                            <option value="Sangat Baik" selected>Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Sistem Kontrak</label>
                        <select class="form-control" name="sistem_kontrak" aria-label="Default select example">
                            <option value="Sangat Baik" selected>Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Lokasi</label>
                        <select class="form-control" name="lokasi" aria-label="Default select example">
                            <option value="Sangat Baik" selected>Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Kenyamanan</label>
                        <select class="form-control" name="kenyamanan" aria-label="Default select example">
                            <option value="Sangat Baik" selected>Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Keamanan</label>
                        <select class="form-control" name="keamanan" aria-label="Default select example">
                            <option value="Sangat Baik" selected>Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Luas Kamar</label>
                        <select class="form-control" name="luas_kamar" aria-label="Default select example">
                            <option value="Sangat Baik" selected>Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Jarak Dari Kampus</label>
                        <select class="form-control" name="jarak_dari_kampus" aria-label="Default select example">
                            <option value="Sangat Baik" selected>Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Desain Rumah</label>
                        <select class="form-control" name="desain_rumah" aria-label="Default select example">
                            <option value="Sangat Baik" selected>Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
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
{{-- <script type="text/javascript">

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
</script> --}}
