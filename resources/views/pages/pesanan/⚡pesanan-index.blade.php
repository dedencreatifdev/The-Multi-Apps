<?php

use Livewire\Component;
use Livewire\Attributes\Title;

new #[Title('Pesanan')] class extends Component {
    public $title = 'My Post';
};
?>



<div>
    <livewire:pages::pesanan.pesanan-info lazy />
    <livewire:pages::pesanan.pesanan-table lazy />
</div>
@push('css')
    <link rel="stylesheet" href="{{ asset('style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
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
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script src="/"></script>
@endpush
