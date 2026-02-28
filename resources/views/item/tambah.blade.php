@extends('master')

@section('content')

<div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">

                <h4 class="card-title">Tambah Item</h4>

                <form method="POST" action="{{ route('item.store') }}">
                    @csrf

                    <div class="form-group">
                        <label>Nama Item</label>
                        <input type="text" name="nama_item" class="form-control" placeholder="Masukkan nama item" required>
                    </div>

                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah_item" class="form-control" placeholder="Jumlah item" required>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Harga item" required>
                    </div>

                    <div class="form-group">
                        <label>Supplier</label>
                        <select name="suplier_id" class="form-control" required>
                            <option value="">-- Pilih Supplier --</option>
                            @foreach($suplier as $s)
                                <option value="{{ $s->id }}">
                                    {{ $s->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('item.index') }}" class="btn btn-light">
                        Kembali
                    </a>

                </form>

            </div>

        </div>
    </div>
</div>

@endsection