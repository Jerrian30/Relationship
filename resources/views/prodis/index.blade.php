@extends('layouts.main')
@section('content')
<center>

<h1>Daftar Prodi</h1>
<a href="{{ route('faculties.index') }}">Data Fakultas</a><br><br>
<a href="{{ route('prodis.create') }}" style="text-decoration: none; color:green;">+Tambah</a>
@if (session()->has('pesan'))
    <div style="color: green;">
        {{ session()->get('pesan') }}
    </div>
    <br>
@endif
                <table >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Prodi</th>
                            <th>Kode Prodi</th>
                            <th>Fakultas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Prodi</th>
                                            <th>Kode Prodi</th>
                                            <th>Fakultas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Prodi</th>
                                            <th>Kode Prodi</th>
                                            <th>Fakultas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i=1; ?>
                                        @foreach ($prodis as $prodi)
                                            <tr>
                                                <th >{{ $i }}</th>
                                                <td><a href="{{ route('prodis.show', $prodi->id) }}" style="text-decoration: none; color:rgb(216, 0, 0);">{{ $prodi->prodi_name }}</a></td>
                                                <td>{{ $prodi->prodi_code }}</td>
                                                <td>{{ $prodi->faculty->faculty_name }}</td>
                                                <td>
                                                    <a href="{{ route('prodis.edit', $prodi->id) }}"><button>Edit</button></a>
                                                    <form action="{{ route('prodis.destroy', $prodi->id) }}" method="post" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                            
                                                        <input type="submit" value="Hapus" onclick="return confirm('hapus data prodi {{ $prodi->prodi_name }}?')">
                                                    </form>
                                                </td>
                    
                                            </tr>
                                            <?php $i++ ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </table>
            </center>
@endsection