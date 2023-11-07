<center>
<h1>Daftar Fakultas</h1>
<a href="{{ route('prodis.index') }}">Data Prodi</a><br><br>
<a href="{{ route('faculties.create') }} " style="text-decoration: none;color:green;">+Tambah</a>
@if (session()->has('pesan'))
    <div style="color: green;">
        {{ session()->get('pesan') }}
    </div>
    <br>
@endif
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama faculty</th>
            <th>Kode faculty</th>
            <th>Aksi</th>
        </tr>
    </thead>
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
</center>
