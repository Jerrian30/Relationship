<h1>Data Prodi</h1>

<table>
    <tr>
        <td>Nama Prodi</td>
        <td>: {{ $prodi->prodi_name }}</td>
    </tr>
    <tr>
        <td>Kode Prodi</td>
        <td>: {{ $prodi->prodi_code }}</td>
    </tr>
    <tr>
        <td>Fakultas</td>
        <td>: {{ $prodi->faculty->faculty_name }}</td>
    </tr>
</table>