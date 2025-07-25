@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Form Pengajuan Pinjaman</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('anggota.pinjaman.proses_ajukan') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="jumlah_pinjaman" class="form-label">Jumlah Pinjaman (Rp)</label>
                            <input type="number" class="form-control @error('jumlah_pinjaman') is-invalid @enderror" id="jumlah_pinjaman" name="jumlah_pinjaman" value="{{ old('jumlah_pinjaman') }}" placeholder="Contoh: 500000" required>
                            @error('jumlah_pinjaman') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tenor" class="form-label">Tenor (Bulan)</label>
                            <input type="number" class="form-control @error('tenor') is-invalid @enderror" id="tenor" name="tenor" value="{{ old('tenor') }}" placeholder="Contoh: 12" required>
                             @error('tenor') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="keperluan" class="form-label">Keperluan Pinjaman</label>
                            <textarea class="form-control @error('keperluan') is-invalid @enderror" id="keperluan" name="keperluan" rows="3" required>{{ old('keperluan') }}</textarea>
                             @error('keperluan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('anggota.pinjaman.riwayat') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Kirim Pengajuan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection