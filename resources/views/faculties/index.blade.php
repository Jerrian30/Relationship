<h1>Daftar Fakultas</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama faculty</th>
            <th>Kode faculty</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; ?>
        @foreach ($faculties as $faculty)
            <tr>
                <th >{{ $i }}</th>
                <td>{{ $faculty->faculty_name }}</td>
                <td>{{ $faculty->faculty_code }}</td>
            </tr>
            <?php $i++ ?>
        @endforeach
    </tbody>
</table>
