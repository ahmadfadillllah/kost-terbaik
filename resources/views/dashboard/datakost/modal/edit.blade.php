@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Informasi Kost</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Tambah Kost</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Edit Kost</h4>
            <hr>
            <form action="{{ route('datakost.update', $kost->id) }}" method="post">
                @csrf
                <div class="m-t-25">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Nama Kost</label>
                            <input type="text" class="form-control m-b-15" placeholder="Nama Kost" value="{{ $kost->nama_kost }}" readonly>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <label for="">Fasilitas</label>
                            <div class="m-b-15">
                                <select class="js-example-basic-multiple" name="fasilitas[]" multiple="multiple" required>
                                    <option value="Kasur">Kasur</option>
                                    <option value="Meja">Meja</option>
                                    <option value="Lemari">Lemari</option>
                                    <option value="Kursi">Kursi</option>
                                    <option value="AC">AC</option>
                                    <option value="Kamar Mandi Dalam">Kamar Mandi Dalam</option>
                                    <option value="Kamar Mandi Luar">Kamar Mandi Luar</option>
                                    <option value="Kipas Angin">Kipas Angin</option>
                                    <option value="TV">TV</option>
                                    <option value="WiFi">WiFi</option>
                                    <option value="Tempat Parkir">Tempat Parkir</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="">Harga Sewa (/bulan)</label>
                            <input type="text" class="form-control m-b-15" id="rupiah" name="harga_sewa" value="@currency($kost->harga_sewa)" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Lokasi</label>
                            <div class="m-b-15">
                                <select class="js-example-basic-multiple" name="lokasi" required>
                                    <option {{ $kost->lokasi == "Jarak dari kost ke kampus cukup terjangkau dengan berjalan kaki" ? "selected" : ""}} value="{{ $kost->lokasi }}">{{ $kost->lokasi }}</option>
                                    <option value="Jarak dari kost ke kampus cukup terjangkau dengan berjalan kaki">Jarak dari kost ke kampus cukup terjangkau dengan berjalan kaki</option>
                                    <option value="Jarak dari kos ke kampus terjangkau dengan kendaraan umum/pribadi">Jarak dari kos ke kampus terjangkau dengan kendaraan umum/pribadi</option>
                                    <option value="Kost dekat dengan akses yang diperlukan (warung makan,warnet, mini market, londry)">Kost dekat dengan akses yang diperlukan (warung makan,warnet, mini market, londry)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="">Kenyamanan</label>
                            <div class="m-b-15">
                                <select class="js-example-basic-multiple" name="kenyamanan" required>
                                    <option {{ $kost->kenyamanan == "Lingkungan kost tidak rawan banjir" ? "selected" : ""}} value="{{ $kost->kenyamanan }}">{{ $kost->kenyamanan }}</option>
                                    <option value="Lingkungan kost tidak rawan banjir">Lingkungan kost tidak rawan banjir</option>
                                    <option value="Lingkungan kost yang bersih">Lingkungan kost yang bersih</option>
                                    <option value="Keramahan pemilik / penjaga kost">Keramahan pemilik / penjaga kost</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="">Keamanan</label>
                            <div class="m-b-15">
                                <select class="js-example-basic-multiple" name="keamanan" required>
                                    <option {{ $kost->keamanan == "Aman dari pencurian" ? "selected" : ""}} value="{{ $kost->keamanan }}">{{ $kost->keamanan }}</option>
                                    <option value="Aman dari pencurian">Aman dari pencurian</option>
                                    <option value="Keberadaan tuan ruan rumah / penjaga kost">Keberadaan tuan ruan rumah / penjaga kost</option>
                                    <option value="Tempat kost ada jam malam">Tempat kost ada jam malam</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <label for="">Luas Kamar (m<sup>2</sup>)</label>
                            <input type="number" class="form-control m-b-15" name="panjangkamar" value="{{ $kost->panjangkamar }}" required>
                        </div>
                        <div class="col">
                            <label for="">.</label>
                            <input type="number" class="form-control m-b-15" name="lebarkamar" value="{{ $kost->lebarkamar }}" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Jarak dari Kampus (meter)</label>
                            <input type="number" class="form-control m-b-15" name="jarak_dari_kampus" value="{{ $kost->jarak_dari_kampus }}" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Desain Rumah</label>
                            <div class="m-b-15">
                                <select class="js-example-basic-multiple" name="desain_rumah" required>
                                    <option {{ $kost->desain_rumah == "Permanen" ? "selected" : ""}} value="{{ $kost->desain_rumah }}">{{ $kost->desain_rumah }}</option>
                                    <option value="Permanen">Permanen</option>
                                    <option value="Sekat gypsum">Sekat gypsum</option>
                                    <option value="Sekat triplek">Sekat triplek</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="">Tipe Kost</label>
                            <div class="m-b-15">
                                <select class="js-example-basic-multiple" name="tipe_kost" required>
                                    <option {{ $kost->tipe_kost == "Exclusive" ? "selected" : ""}} value="{{ $kost->tipe_kost }}">{{ $kost->tipe_kost }}</option>
                                    <option value="Exclusive">Exclusive</option>
                                    <option value="Menengah">Menengah</option>
                                    <option value="Standar">Standar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning btn-tone m-r-12" style="float: right">Update</button>
            </form>
        </div>
    </div>
    <div class="card">

    <!-- Content Wrapper END -->

</div>
<!-- Content Wrapper END -->
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
@include('dashboard.layout.footer')
