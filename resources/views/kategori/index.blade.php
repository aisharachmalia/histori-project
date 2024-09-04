<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Artikel Admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('admin/css/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset('admin/css/timeline.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('admin/css/startmin.css') }}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('admin/css/morris.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
               
                <!-- NAVBAR -->
                @include('layouts.navbar')
                {{-- /NAVBAR --}}

                {{-- SIDEBAR --}}
                @include('layouts.sidebar')
                {{-- /SIDEBAR --}}

              
            </nav>

            {{-- CONTENT --}}

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Kategori</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- <a href="{{ route('kategori.create') }}" class="btn btn-primary">Add Data</a> --}}
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama Kategori</th>
                                                        <th scope="col">Aksi</th>
                                                        <th scope="col">  <a href="{{ route('kategori.create') }}" class="btn btn-primary">Add Data</a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($kategori as $data)
                                                        <tr>
                                                            <th scope="row">{{ $no++ }}</th>
                                                            <td>{{ $data->nama_kategori }}</td>
                    
                                                            <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <td>
                                                                    <a href="{{ route('kategori.edit', $data->id) }}"
                                                                        class="btn btn-success">Edit</a>
                                                                    <a href="{{ route('kategori.show', $data->id) }}"
                                                                        class="btn btn-warning ">Show</a>
                                                                    <button type="submit" class="btn btn-danger"
                                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                                        Delete
                                                                    </button>
                                                                </td>
                                                            </form>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
        <!-- jQuery -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('admin/js/raphael.min.js') }}"></script>
        <script src="{{ asset('admin/js/morris.min.js') }}"></script>
        <script src="{{ asset('admin/js/morris-data.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('admin/js/startmin.js')}}"></script>

    </body>
</html>