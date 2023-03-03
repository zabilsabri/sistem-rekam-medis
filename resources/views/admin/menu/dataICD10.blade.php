@extends('admin.layouts.app' , ['title' => 'Menu Admin'])
@section('content')

<style>
    .search-input{
        float: right;
        width: 25%;
    }
</style>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content p-4">
        <div class="container-fluid">
            <h2 class="text-center display-4 fw-bold">Daftar ICD 10</h2>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                <strong> {{$message}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title p-2 flex-grow-1">Tabel ICD 10</h3>
                <a class="btn bg-gradient-primary p-2 text-light" role="button" data-bs-toggle="modal" data-bs-target="#tambah">+ TAMBAH</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="search-input mb-2">
                    <form class="d-flex" method="GET" action="dataICD10" role="search">
                        <input class="form-control me-2" type="search" name="search" placeholder="Masukkan Nama" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form> 
                </div>
                <?php if(isset($_GET['search'])){ 
                    $searchData = $_GET['search'];    
                ?>
                    <div class="alert alert-success alert-dismissible fade show w-50" role="alert">
                        <strong>Data Yang Dicari ' <?php echo $searchData; ?> '</strong>
                        <a type="button" class="btn-close" aria-label="Close" href="dataICD10?page=1"></a>
                    </div>
                <?php } ?>
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode</th>
                            <th>Sub-Kode</th>
                            <th>Diagnosa</th>
                            <th style="width: 200px">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $index => $item)
                        <tr>
                            <td> {{ $index+ $data->firstItem() }} </td>
                            <td>{{ $item -> nama }}</td>
                            <td>{{ $item -> subnama ?? ""}}</td>
                            <td>{{ $item -> deskripsi }}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit{{ $item -> id }}">Edit</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $item -> id }}">Delete</button>
                            </td>
                            <!-- Modal Edit Data-->
                            <div class="modal fade" id="edit{{ $item -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="editDataICD10/{{ $item -> id }}" method= "POST">
                                        @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kode ICD 10: </label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="kode" value="{{ $item -> nama }}" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Sub Kode ICD 10: </label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="subkode" value="{{ $item -> subnama ?? '-' }}" placeholder="">
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputValue" name="deskripsi" placeholder="{{ $item -> deskripsi }}" value="{{ $item -> deskripsi }}">
                                            <label for="floatingInputValue">Diagnosa: </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Delete Data-->
                            <div class="modal fade" id="delete{{ $item -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a type="button" href="/deleteDataICD10/{{ $item -> id }}" class="btn btn-danger">Delete</a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mt-1">
                    {!! $data->withQueryString()->links() !!}
                </div>
            </div>
            <!-- /.card-body -->      
        </div>
    </section>
</div>


<!-- Modal Tambah Data-->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="tambahDataICD10" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kode ICD 10: </label>
                    <input type="text" class="form-control" name="kode" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Sub Kode ICD 10: </label>
                    <input type="text" class="form-control" name="subkode" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="deskripsi" id="floatingTextarea" style="height: 100px"></textarea>
                    <label for="floatingTextarea">Diagnosa: </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection