@extends('master')

@section('content')

<div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">

                <h4 class="card-title">Tambah Supplier</h4>

                <form action="{{ route('supplier.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Nama Supplier</label>
                        <input type="text" name="nama" class="form-control"
                               placeholder="Masukkan nama supplier" required>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control"
                                  rows="4"
                                  placeholder="Masukkan alamat supplier"
                                  required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('supplier.index') }}" class="btn btn-light">
                        Kembali
                    </a>

                </form>

            </div>

        </div>
    </div>
</div>

@endsection