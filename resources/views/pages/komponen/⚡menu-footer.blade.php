<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <div class="d-none d-sm-block">
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <strong>Copyright &copy; 2014-{{ date('Y') }} <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All
            rights
            reserved.
        </footer>
    </div>
    <div class="d-sm-none">
        <footer class="main-footer">
            <div class="d-flex justify-content-between text-center">
                <a wire:navigate href="{{ route('Dashboard.Index') }}"
                    class="{{ request()->routeis('Dashboard.Index') ? 'text-danger' : 'text-dark' }}">
                    <i class="fas fa-home"></i><br />
                    <span>Home</span>
                </a>
                <a wire:navigate href="{{ route('Pesanan.Index') }}"
                    class="{{ request()->routeis('Pesanan.Index') ? 'text-danger' : 'text-dark' }}">
                    <i class="fas fa-envelope"></i><br />
                    <span>Pesanan</span>
                </a>
                <a href="/" class="text-dark">
                    <i class="fas fa-edit"></i><br />
                    <span>Estimasi</span>
                </a>
                <a href="/" class="text-dark">
                    <i class="fas fa-book"></i><br />
                    <span>Katalog</span>
                </a>
                <a href="/" class="text-dark">
                    <i class="fas fa-user"></i><br />
                    <span>User</span>
                </a>
            </div>
        </footer>
    </div>
</div>
