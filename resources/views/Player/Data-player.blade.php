<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Player</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Player</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href=" {{ route('create-player') }} " class="btn btn-success">Tambah Data <i
                                    class="fas fa-plus-square"></i></a>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.content -->
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Posisi</th>
                                <th>Alamat</th>
                                <th>Asal Sekolah</th>
                                @if (auth()->user()->level == "admin")
                                <th>Aksi</th>
                                @endif
                            </tr>
                            @foreach ($dtPlayer as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->posisi }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->asalsekolah }}</td>

                                @if (auth()->user()->level == "admin")
                                <td>
                                    <a href=" {{ url('edit-player',$item->id) }} ">Edit</a> |
                                    <a href=" {{ url('delete-player',$item->id) }} " style="color: red">Delete</a>
                                </td>
                                @endif

                            </tr>
                            @endforeach
                        </table>
                        <!-- /.content-wrapper -->

                        <!-- Control Sidebar -->
                        <aside class="control-sidebar control-sidebar-dark">
                            <!-- Control sidebar content goes here -->
                            <div class="p-3">
                                <h5>Title</h5>
                                <p>Sidebar content</p>
                            </div>
                        </aside>
                        <!-- /.control-sidebar -->

                        <!-- Main Footer -->
                        <footer class="main-footer">
                            @include('Template.footer')
                        </footer>
                    </div>
                    <!-- ./wrapper -->

                    <!-- REQUIRED SCRIPTS -->
                    @include('Template.script')
</body>

</html>