@extends('admin.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Menu items</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Menu</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                {{-- <h3 class="card-title">menu items</h3> --}}
                                <button id="previewButton" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#addModal" class="btn btn-success"> Add new menu item</button>
                                <div class="modal fade .modal-xl" id="addModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-dialog modal-dialog-centered " role="document"
                                            style="width:100%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        Add menu item</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div id="modalBody" class="modal-body">
                                                    <div class="form-group">
                                                        <label for="">Text</label>
                                                        <input type="text" name="text" class="form-control"
                                                            id="" required placeholder="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Url</label>
                                                        <input type="text" name="url" class="form-control"
                                                            id="" placeholder="Url">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Text </th>
                                            <th>Url</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menus as $menu)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$menu->text}}</td>
                                                <td>
                                                    {{ $menu->url }}
                                                </td>
                                                <td>
                                                    <button id="previewButton" type="button" class="btn btn-primary"
                                                        data-toggle="modal" data-target="#editModal{{ $menu->id }}"
                                                        class="btn btn-success"><i class="fa fa-edit"></i></button>
                                                    <div class="modal fade .modal-xl" id="editModal{{ $menu->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <form action="menu/{{ $menu->id }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="PUT">
                                                            <div class="modal-dialog modal-dialog-centered "
                                                                role="document" style="width:100%;">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLongTitle">
                                                                            Update menu item</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div id="modalBody" class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="">Text</label>
                                                                            <input type="text" value="{{$menu->text}}" name="text" class="form-control"
                                                                                id="" required placeholder="text">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Url</label>
                                                                            <input type="text" name="url"
                                                                                class="form-control" id=""
                                                                                value="{{$menu->url}}"
                                                                                placeholder="Url">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>
                                                    <form action="menu/{{ $menu->id }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" style="border: none;">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Text</th>
                                            <th>Url</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('js')
    <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

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
@endsection
