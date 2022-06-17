@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<!-- Content Wrapper START -->
<div class="main-content">
    <div class="page-header">
        <h2 class="header-title">Data Kost</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                <a class="breadcrumb-item" href="#">Data Kost</a>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>Data Kost</h4>
            <p>Ini adalah daftar kost yang telah ditambahkan.</p>
            <div class="m-t-25">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kost</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Fasilitas</th>
                                <th scope="col">Tipe Kost</th>
                                <th scope="col">Sistem Kontrak</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <button class="btn btn-warning btn-tone m-r-5 btn-xs">Edit</button>
                                    <button class="btn btn-danger btn-tone m-r-5 btn-xs">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <button class="btn btn-warning btn-tone m-r-5 btn-xs">Edit</button>
                                    <button class="btn btn-danger btn-tone m-r-5 btn-xs">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <button class="btn btn-warning btn-tone m-r-5 btn-xs">Edit</button>
                                    <button class="btn btn-danger btn-tone m-r-5 btn-xs">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card">

    <!-- Content Wrapper END -->

</div>
<!-- Content Wrapper END -->
@include('dashboard.layout.footer')
