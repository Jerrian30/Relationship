

<h1>Daftar Prodi</h1>

<a href="{{ route('prodis.create') }}">Tambah</a>
@if (session()->has('pesan'))
    <div style="color: green;">
        {{ session()->get('pesan') }}
    </div>
    <br>
@endif
                <table border="1" cellpadding="10" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Prodi</th>
                            <th>Kode Prodi</th>
                            <th>Fakultas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($prodis as $prodi)
                            <tr>
                                <th >{{ $i }}</th>
                                <td><a href="{{ route('prodis.show', $prodi->id) }}">{{ $prodi->prodi_name }}</a></td>
                                <td>{{ $prodi->prodi_code }}</td>
                                <td>{{ $prodi->faculty->faculty_name }}</td>
                                <td>
                                    <a href="{{ route('prodis.edit', $prodi->id) }}"><button>Edit</button></a>
                                    <form action="{{ route('prodis.destroy', $prodi->id) }}" method="post">
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
           