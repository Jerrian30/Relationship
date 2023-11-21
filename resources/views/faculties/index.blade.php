@extends('layouts.main')
@section('content')
<center>
<h1>Daftar Fakultas</h1>
<a href="{{ route('prodis.index') }}">Data Prodi</a><br><br>
<a href="{{ route('faculties.create') }} " style="text-decoration: none;"><button style="background-color: rgb(87, 205, 87);border-radius:30px;color:rgb(8, 13, 24);">+Tambah</button></a>
@if (session()->has('pesan'))
    <div style="color: green;text-align:center">
        {{ session()->get('pesan') }}
    </div>
    <br>
@endif
<table border="1" cellpadding="5" cellspacing="0">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama faculty</th>
                            <th>Kode faculty</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama faculty</th>
                            <th>Kode faculty</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($faculties as $faculty)
                            <tr>
                                <th >{{ $i }}</th>
                                <td><a href="{{ route('faculties.show', $faculty->id) }}" style="text-decoration:none; color:black">{{ $faculty->faculty_name }}</a></td>
                                <td>{{ $faculty->faculty_code }}</td>
                                <td>
                                    <a href="{{ route('faculties.edit', $faculty->id) }}"><button>Edit</button></a>
                                    <form action="{{ route('faculties.destroy', $faculty->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                            
                                        <input type="submit" value="Hapus" onclick="return confirm('hapus data fakultas {{ $faculty->faculty_name }}?')">
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
