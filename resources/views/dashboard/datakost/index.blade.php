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
            <div class="m-t-25">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama Kost</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Fasilitas</th>
                                <th scope="col">Tipe Kost</th>
                                <th scope="col">Sistem Kontrak</th>
                                @if (Auth::user()->role == 'admin')
                                    <th scope="col">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datakost as $dk)
                            @include('dashboard.datakost.modal.edit')
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><img src="{{ asset('admin/demo/app/images') }}/{{ $dk->gambar }}" style="align-content: center" height="100"></td>
                                    <td>{{ $dk->namakost }}</td>
                                    <td>{{ $dk->alamat }}</td>
                                    <td>@currency($dk->harga)</td>
                                    <td>{{ $dk->fasilitas }}</td>
                                    <td>{{ $dk->tipekost }}</td>
                                    <td>{{ $dk->sistemkontrak }}</td>
                                    @if (Auth::user()->role == 'admin')
                                        <td>
                                            <button type="button" class="btn btn-warning btn-tone m-r-5 btn-xs" data-toggle="modal" data-target="#editKost{{ $dk->id }}">
                                                Ubah
                                            </button>
                                            <a href="{{ route('datakost.delete', $dk->id) }}" class="btn btn-danger btn-tone m-r-5 btn-xs" onClick="confirm('Yain ingin menghapus Kost tersebut?')">Hapus</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
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
