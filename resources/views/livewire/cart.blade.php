<div class="row">
     <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2 class="font-weight-bold">List Produk</h2>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('storage/images/'.$product->image)}}" alt="product" class="img-fluid">
                                </div>
                                <div class="card-footer">
                                    <h6 class="text-center font-weight-light">{{$product->name}}</h6>
                                    <button wire:click="addItem({{$product->id}})" class="btn btn-dark btn-sm btn-block">Tambah Pesanan</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h2 class="font-weight-bold">Keranjang</h2>
                <table class="table table-sm table-bordered table-striped table-hovered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse ($carts as $index=>$cart)
                            <td>{{$index+1}}</td>
                            <td>{{$cart['name']}} || {{$cart['qty']}} </td>
                            <td>{{$cart['price']}}</td>
                        </tr>
                        @empty
                        <td colspan="3"><h6 class="text-center">Keranjang Kosong</h6></td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Pembayaran</h4>
                <h5 class="font-weight-bold">Sub Total : {{$summary['sub_total']}}</h5>
                <h5 class="font-weight-bold">Diskon : {{$summary['pajak']}}</h5>
                <h5 class="font-weight-bold">Total Bayar : {{$summary['total']}}</h5>

                <div>
                    <button wire:click="enableTax" class="btn btn-primary"> Dapat Diskon </button>
                    <button wire:click="disableTax" class="btn btn-danger"> Tanpa Diskon </button>
                    <button class="btn btn-success"> Simpan Transaksi </button>
                </div>
            </div>
        </div>
    </div>
</div>
