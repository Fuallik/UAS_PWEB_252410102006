<label for="kategori_id">Kategori</label>
<select id="kategori_id" name="kategori_id" required>
    <option value="">-- Pilih kategori --</option>
    @foreach ($kategoris as $kategori)
        <option value="{{ $kategori->id }}"
            @selected(old('kategori_id', $proyek->kategori_id ?? '') == $kategori->id)>
            {{ $kategori->nama }}
        </option>
    @endforeach
</select>
@error('kategori_id') <p class="error">{{ $message }}</p> @enderror

<label for="judul">Judul</label>
<input type="text" id="judul" name="judul" value="{{ old('judul', $proyek->judul ?? '') }}" required>
@error('judul') <p class="error">{{ $message }}</p> @enderror

<label for="teknologi">Teknologi</label>
<input type="text" id="teknologi" name="teknologi" value="{{ old('teknologi', $proyek->teknologi ?? '') }}" required>
@error('teknologi') <p class="error">{{ $message }}</p> @enderror

<label for="tahun">Tahun</label>
<input type="number" id="tahun" name="tahun" min="2000" max="2100"
       value="{{ old('tahun', $proyek->tahun ?? date('Y')) }}" required>
@error('tahun') <p class="error">{{ $message }}</p> @enderror

<label for="status">Status</label>
<select id="status" name="status" required>
    @foreach ($statusList as $status)
        <option value="{{ $status }}"
            @selected(old('status', $proyek->status ?? 'Selesai') === $status)>
            {{ $status }}
        </option>
    @endforeach
</select>
@error('status') <p class="error">{{ $message }}</p> @enderror
