<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="{{ route('dashboard.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="{{ route('datakost.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-appstore"></i>
                    </span>
                    <span class="title">Informasi Kost</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-search"></i>
                    </span>
                    <span class="title">Cari Kost</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-file"></i>
                    </span>
                    <span class="title">Rekomendasi Kost</span>
                </a>
            </li>
            <hr>
            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik Kost</h6>
            @if (Auth::user()->role == 'admin')
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="{{ route('kriteria.index') }}">
                        <span class="icon-holder">
                            <i class="anticon anticon-appstore"></i>
                        </span>
                        <span class="title">Data Kriteria</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                            <i class="anticon anticon-form"></i>
                        </span>
                        <span class="title">Perhitungan</span>
                    </a>
                </li>
            @endif
            <hr>
            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mahasiswa</h6>
            @if (Auth::user()->role == 'admin')
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="{{ route('kriteria.index') }}">
                        <span class="icon-holder">
                            <i class="anticon anticon-appstore"></i>
                        </span>
                        <span class="title">Data Kriteria</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                            <i class="anticon anticon-form"></i>
                        </span>
                        <span class="title">Perhitungan</span>
                    </a>
                </li>
            @endif
            <hr>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="{{ route('profile.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-user"></i>
                    </span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="{{ route('logout') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-lock"></i>
                    </span>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->

<!-- Page Container START -->
<div class="page-container">
