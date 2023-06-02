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
                            <h1 class="m-0">Create Player</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Create Player</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">


                    <div class="card-body">
                        <form action=" {{ route('simpan-player') }} " method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <input type="text" id="umur" name="umur" class="form-control" placeholder="Umur">
                            </div>
                            <div class="form-group">
                                <input type="text" id="posisi" name="posisi" class="form-control" placeholder="Posisi">
                            </div>
                            <div class="form-group">
                                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <input type="text" id="asalsekolah" name="asalsekolah" class="form-control"
                                    placeholder="Asal Sekolah">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save Data</button>
                            </div>
                        </form>
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