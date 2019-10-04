@extends('template')
@section('content')
<section class="mais-section">
    <div class="content">
        <h1>Ubah Penjualan</h1>
        <hr>

        @foreach($data as $datas)
        <form action="{{ route('penjualan.update', $datas->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" value=" {{ $datas->id}} ">
        </div>
        <div class="form-group">
            <label for="kode_barang">Kode Barang : </label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value=" {{ $datas->kode_barang}} ">
        </div>
        <div class="form-group">
            <label for="jml">Jumlah : </label>
            <input type="text" class="form-control" id="jml" name="jml" value=" {{ $datas->jml}} ">
        </div>
        <div class="form-group">
            <label for="total_harga">Total Harga : </label>
            <input type="text" class="form-control" id="total_harga" name="total_harga" value=" {{ $datas->total_harga}} ">
        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
        @endforeach
    </div>
</section>
@endsection