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
                <a class="breadcrumb-item" href="#">Informasi Kost</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Rekomendasi Kost</h4>
            <p>Daftar Rekomendasi Kost sesuai perhitungan metode AHP dan Borda</p>
        </div>
    </div>
    <div class="row">
        @foreach ($datakost as $dk)
            <div class="col-md-4 col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('admin/demo/app/images') }}/{{ $dk->gambar }}" alt="">
                    <div class="card-body">
                        <h4 class="m-t-10">{{ $dk->nama_kost }}</h4>
                        <span class="badge badge-pill badge-magenta">Fasilitas: {{ implode(', ', json_decode($dk->fasilitas)) }}</span>
                        <span class="badge badge-pill badge-red">Harga Sewa: @currency($dk->harga_sewa)/bulan</span>
                        <span class="badge badge-pill badge-orange">Lokasi: {{ $dk->lokasi }}</span>
                        <span class="badge badge-pill badge-gold">Kenyamanan: {{ $dk->kenyamanan }}</span>
                        <span class="badge badge-pill badge-lime">Keamanan: {{ $dk->keamanan }}</span>
                        <span class="badge badge-pill badge-green">Luas Kamar: {{ $dk->panjangkamar }} x {{ $dk->lebarkamar }} m<sup>2</sup></span>
                        <span class="badge badge-pill badge-cyan">Jarak dari Kampus: {{ $dk->jarak_dari_kampus }} meter</span>
                        <span class="badge badge-pill badge-blue">Desain Rumah: {{ $dk->desain_rumah }}</span>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="card">

    <!-- Content Wrapper END -->

</div>
<!-- Content Wrapper END -->
@include('dashboard.layout.footer')
