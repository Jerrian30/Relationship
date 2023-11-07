@extends('layouts.main')
@section('content')
<h1>Edit Data Prodi</h1>

<a href="{{ route('prodis.index') }}">Kembali</a>
</div>

<form action="{{ route('prodis.update', $prodi->id) }}" method="POST">
    @csrf
    @method('PUT')
    <h4>Data Pordi</h4>
    <div>
        <label for="prodi_name">Nama Prodi</label>
        <input type="text" name="prodi_name" value="{{ old('prodi_name', $prodi->prodi_name) }}" id="prodi_name">

        @error('prodi_name')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="prodi_code" class="mb-2">Kode Prodi</label>
        <input type="prodi_code" name="prodi_code" value="{{ old('prodi_code', $prodi->prodi_code) }}" id="prodi_code" required="required">

        @error('prodi_code')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="faculty">Fakultas</label>
        <select name="faculty_id" id="">
            @foreach ($faculties as $faculty)
            <option value="{{ $faculty->id }}" @if (old('faculty_id', $prodi->faculty_id)) selected @endif>
                {{ $faculty->faculty_name }}
            </option>
            @endforeach
        </select>

        @error('faculty')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <input type="submit" value="Simpan">
    </div>
</form>
@endsection
