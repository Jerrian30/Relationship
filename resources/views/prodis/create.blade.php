
            <h1>Tambah Prodi</h1>

            <a href="{{ route('prodis.index') }}" class="btn btn-primary btn-rounded btn-sm btn-30">Kembali</a>

        <form action="{{ route('prodis.store') }}" method="POST">
            @csrf

            <div>

                    <div>
                        <label for="prodi_name">Nama Prodi</label>
                        <input type="text" name="prodi_name" value="{{ old('prodi_name') }}" id="prodi_name">

                        @error('prodi_name')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="prodi_code">Kode Prodi</label>
                        <input type="prodi_code" name="prodi_code" value="{{ old('prodi_code') }}" id="prodi_code">

                        @error('prodi_code')
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


