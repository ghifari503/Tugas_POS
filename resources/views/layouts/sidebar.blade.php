<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/" class="brand-link">
    <span class="brand-text font-weight-light ">{{ config ('app.name') }}</span>
    </a>

    <div class="sidebar">

        <div class="user-panel">
            <div class="pull-left info">
                <p style="color: hsl(172, 98%, 53%);">{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


    <nav class="mt-0">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
            </a>
        </li>

        @if (auth()->user()->level == 1)


        <li class="nav-item">MASTER</li>

        <li class="nav-item">
            <a href="{{ route ('kategori.index') }}" class="nav-link ">
                <i class="fa-solid fa-k"></i>
            <p>Kategori</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route ('produk.index') }}" class="nav-link ">
                <i class="fa-solid fa-box"></i>
            <p>Produk</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route ('member.index') }}" class="nav-link ">
                <i class="fa-solid fa-id-card"></i>
            <p>Member</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route ('supplier.index') }}" class="nav-link ">
                <i class="fa-solid fa-truck"></i>
            <p>Supplier</p>
            </a>
        </li>

        <li class="nav-item">TRANSAKSI</li>

        <li class="nav-item">
            <a href="{{ route ('pengeluaran.index') }}" class="nav-link ">
                <i class="fa-solid fa-hand-holding-dollar"></i>
            <p>Pengeluaran</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route ('pembelian.index') }}" class="nav-link ">
                <i class="fa-solid fa-cart-shopping"></i>
            <p>Pembelian</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route ('penjualan.index') }}" class="nav-link ">
                <i class="fa-solid fa-coins"></i>
            <p>Penjualan</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route ('transaksi.index') }}" class="nav-link ">
                <i class="fa-solid fa-money-bill-transfer"></i>
            <p>Transaksi Aktif</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('transaksi.baru') }}" class="nav-link ">
                <i class="fa-solid fa-money-bills"></i>
            <p>Transaksi Baru</p>
            </a>
        </li>

        <li class="nav-item">REPORT</li>

        <li class="nav-item">
            <a href="{{ route ('laporan.index') }}" class="nav-link ">
                <i class="fa-solid fa-square-poll-vertical"></i>
            <p>laporan</p>
            </a>
        </li>

        <li class="nav-item">SYSTEM</li>

        <li class="nav-item">
            <a href="{{ route ('user.index') }}" class="nav-link ">
                <i class="fa-solid fa-users"></i>
            <p>User</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route ('setting.index') }}" class="nav-link ">
                <i class="fa-solid fa-gear"></i>
            <p>Pengaturan</p>
            </a>
        </li>
        
        @else
        <li class="nav-item">
            <a href="{{ route ('transaksi.index') }}" class="nav-link ">
                <i class="fa-solid fa-money-bill-transfer"></i>
            <p>Transaksi Aktif</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('transaksi.baru') }}" class="nav-link ">
                <i class="fa-solid fa-money-bills"></i>
            <p>Transaksi Baru</p>
            </a>
        </li>
        @endif

    </ul>
 </nav>

    </div>

    </aside>
