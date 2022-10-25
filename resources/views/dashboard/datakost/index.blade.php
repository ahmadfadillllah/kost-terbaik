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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKost" style="float: right;">
                <i class="anticon anticon-plus m-r-5"></i>Tambahkan Kost
            </button>
            @include('dashboard.datakost.modal.tambah')
            <h4>Data Kost</h4>
            <p>Ini adalah daftar kost yang telah ditambahkan.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="card" style="max-width: 370px">
                <img class="card-img-top" src="https://yuklegal.com/wp-content/uploads/2021/11/tips-Manajemen-Rumah-Kost-yang-Baik-dan-Benar-.jpg" alt="">
                <div class="card-body">
                    <h4 class="m-t-10">Card Title</h4>
                    ...
                    <div class="m-t-20">
                        <a href="" class="btn btn-primary">Action 1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">

    <!-- Content Wrapper END -->

</div>
<!-- Content Wrapper END -->
@include('dashboard.layout.footer')
