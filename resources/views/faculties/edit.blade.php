<h1>Edit Data faculty</h1>

<a href="{{ route('faculties.index') }}">Kembali</a>
</div>

<form action="{{ route('faculties.update', $faculty->id) }}" method="POST">
    @csrf
    @method('PUT')
    <h4>Data Pordi</h4>
    <div>
        <label for="faculty_name">Nama faculty</label>
        <input type="text" name="faculty_name" value="{{ old('faculty_name', $faculty->faculty_name) }}" id="faculty_name">

        @error('faculty_name')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="faculty_code" class="mb-2">Kode faculty</label>
        <input type="faculty_code" name="faculty_code" value="{{ old('faculty_code', $faculty->faculty_code) }}" id="faculty_code" required="required">

        @error('faculty_code')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    

    <div>
        <input type="submit" value="Simpan">
    </div>
</form>

