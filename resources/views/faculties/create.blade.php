
<h1>Tambah Fakultas</h1>

<a href="{{ route('faculties.index') }}" class="btn btn-primary btn-rounded btn-sm btn-30">Kembali</a>

<form action="{{ route('faculties.store') }}" method="POST">
@csrf

<div>

        <div>
            <label for="faculty_name">Nama faculty</label>
            <input type="text" name="faculty_name" value="{{ old('faculty_name') }}" id="faculty_name">

            @error('faculty_name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="faculty_code">Kode faculty</label>
            <input type="faculty_code" name="faculty_code" value="{{ old('faculty_code') }}" id="faculty_code">

            @error('faculty_code')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="faculty">Fakultas</label>
           <select name="faculty_id" id="">
            @foreach ($faculties as $faculty)
                <option value="{{ $faculty->id }}">
                    {{ $faculty->faculty_name }}
                </option>
            @endforeach
           </select>

            @error('faculty')
                <div>{{ $message }}</div>
            @enderror
        </div>

     
    
    <div>
        <input type="submit" value="Tambah">
    </div>

</form>


