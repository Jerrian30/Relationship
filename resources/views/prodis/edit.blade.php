
            <h1 class="subheader">Tambah Prodi</h1>

            <a href="{{ route('prodis.index') }}" class="btn btn-primary btn-rounded btn-sm btn-30">Kembali</a>
        </div>

        <form action="{{ route('prodis.update', $prodi->id) }}" method="POST">
            @csrf
            @method('PUT')
                <h4 class="semibold">Data Pordi</h4>
                    <div>
                        <label for="prodi_name">Nama Prodi</label>
                        <input type="text" name="prodi_name" value="{{ old('prodi_name', $prodi->prodi_name) }}" id="prodi_name">

                        @error('prodi_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="prodi_code" class="mb-2">Kode Prodi</label>
                        <input type="prodi_code" name="prodi_code" value="{{ old('prodi_code', $prodi->prodi_code) }}" id="prodi_code"
                            class="form-control form-control-lg @error('prodi_code') is-invalid @enderror"
                            required="required">

                        @error('prodi_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="faculty" class="mb-2">Fakultas</label>
                       <select name="faculty_id" id="">
                            @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->id }}" @if (old('fuculty_id', $prodi->faculty_id)) selected @endif>
                                {{ $faculty->faculty_name }}
                            </option>
                            @endforeach
                       </select>

                        @error('faculty')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <input type="submit" value="Edit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>

