@extends('master')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">

                <h4 class="card-title">Data Supplier</h4>

                <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">
                    Tambah Supplier
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($suplier as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->alamat }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection