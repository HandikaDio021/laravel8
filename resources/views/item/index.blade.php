@extends('master')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">

                <h4 class="card-title">Data Item</h4>

                <a href="{{ route('item.create') }}" class="btn btn-primary mb-3">
                    Tambah Item
                </a>

                {{-- ALERT SUCCESS --}}
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama Item</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Supplier</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($item as $i)
                            <tr>
                                <td>{{ $i->nama_item }}</td>
                                <td>{{ $i->jumlah_item }}</td>
                                <td>Rp {{ number_format($i->harga,0,',','.') }}</td>
                                <td>{{ $i->suplier->nama ?? '-' }}</td>
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