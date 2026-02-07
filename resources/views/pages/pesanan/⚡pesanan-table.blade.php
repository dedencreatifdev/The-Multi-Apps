<?php

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

new class extends Component {
    use WithPagination;
    #[Computed]
    public function mount(User $user)
    {
        $this->users = $user;
    }

    public function userList()
    {
        return User::cursorPaginate(15);
    }
};
?>

<div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-danger">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-envelope"></i>
                        Buttons
                    </h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-sm table-striped">
                        <thead class="bg-danger">
                            <tr>
                                <th>No</th>
                                <th>No pesanan</th>
                                <th>Nama</th>
                                <!-- <th>Alamat</th> -->
                                <th>No telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($this->userList() as $item)
                                <tr>
                                    <td></td>
                                    <td>{{ $item->name }}</td>
                                    <td>Deden</td>
                                    <!-- <td>bandar lampung Unit 4 tulang Bawang</td> -->
                                    <td>082280065006</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $this->userList()->links('vendor.livewire.simple-bootstrap') }}
                </div>
            </div>

        </div>
    </div>
</div>

@push('css')
    <link rel="stylesheet" href="{{ asset('style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@push('js')
    <script src="{{ asset('style') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('style') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('style') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('style') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('style') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@endpush
