@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="card-title">Form Presensi Pegawai</h5>
                </div>
                <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Pegawai</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Presensi</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="mb-3">
                            <label for="jam_masuk" class="form-label">Jam Masuk</label>
                            <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" required>
                        </div>
                        <div class="mb-3">
                            <label for="jam_keluar" class="form-label">Jam Keluar</label>
                            <input type="time" class="form-control" id="jam_keluar" name="jam_keluar" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
