<div class="row">
     <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"><h2 class="font-weight-bold">List Produk</h2></div>
                    <div class="col-md-9"><input wire:model="search" type="text" class="form-control" placeholder="Cari Product..."></div>
                </div>
                <br>
                <div class="row">
                    @forelse ($products as $product)
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
                        @empty
                        <div class="col-md-12">
                            <h2 class="text-center font-weight-bold text-danger"> Produk tidak ditemukan </h2>
                        </div>
                    @endforelse
                </div>
            </div>
            <div style="display:flex; justify-content:center">
                {{$products->links()}}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h2 class="font-weight-bold">Keranjang</h2>
                <p class="text-danger font-weight-bold">
                    @if(session()->has('error'))
                        {{session('error')}}
                    @endif
                </p>
                <table class="table table-sm table-bordered table-striped table-hovered">
                    <thead class="bg-secondary text-white ">
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
                            <td> <a href="#" class="font-weight-bold text-dark">{{$cart['name']}}</a>
                            <br>
                            Qty : {{$cart['qty']}}
                            <a href="#" wire:click="IncreaseItem('{{$cart['rowId']}}')" class="font-weight-bold text-dark" style="font-size:18px">+ |</a>
                            <a href="#" wire:click="RemoveItem('{{$cart['rowId']}}')"class="font-weight-bold text-danger" style="font-size:15px">Hapus Item</a>
                            <a href="#" wire:click="DecreaseItem('{{$cart['rowId']}}')"class="font-weight-bold text-dark" style="font-size:18px">| -</a>
                            </td>
                            <td>Rp {{number_format($cart['price'],2,',','.')}}</td>
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
                <h5 class="font-weight-bold">Sub Total : Rp {{(number_format($summary['sub_total'],2,',','.'))}}</h5>
                <h5 class="font-weight-bold">Diskon : Rp {{(number_format($summary['pajak'],2,',','.'))}}</h5>
                <h5 class="font-weight-bold">Total Bayar : Rp {{(number_format($summary['total'],2,',','.'))}}</h5>

                <div>
                    <button wire:click="enableTax" class="btn btn-primary"> Dapat Diskon </button>
                    <button wire:click="disableTax" class="btn btn-danger"> Tanpa Diskon </button>
                    <button class="btn btn-success"> Simpan Transaksi </button>
                </div>
            </div>
        </div>
    </div>
</div>