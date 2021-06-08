<div class="row">
     <div class="col-md-8">
        <div class="card">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col-md-3"><h3 class="font-weight-bold">List Produk</h3></div>
                        <div class="col-md-9"><input wire:model="search" type="text" class="form-control" placeholder="Cari Product..."></div>
                    </div>
                </div>
                <br>
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-md-4 mb-3">
                            <div class="card" wire:click="addItem({{$product->id}})" style="cursor: pointer" >  
                                    <img src="{{ asset('storage/images/'.$product->image)}}" alt="product" style="object-fit: containt; width: 100%; height: 170px">
                                    <button wire:click="addItem({{$product->id}})" class="btn btn-dark btn-sm" style="position: absolute; top: :0; right:0; padding:10px 15px"><i class="fas fa-cart-plus"></i></button>                                
                                    <h5 class="text-center font-weight-light mt-2">{{$product->name}}</h5>
                                    <h6 class="text-center font-weight-light" style="color: rebeccapurple">Rp {{number_format($product->price,0,',','.')}}</h6>
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
            <div class="card-header bg-white">
                <h3 class="font-weight-bold">Keranjang</h3>
            </div>
            <div class="card-body">
                <p class="text-danger font-weight-bold">
                    @if(session()->has('error'))
                        {{session('error')}}
                    @endif
                </p>
                <table class="table table-sm table-bordered table-striped table-hovered">
                    <thead class="bg-secondary text-white">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse ($carts as $index=>$cart)
                            <td class="text-center">
                                {{$index+1}}
                                <br>
                                <i class="fas fa-trash-alt" wire:click="RemoveItem('{{$cart['rowId']}}')" style="font-size:15px; cursor: pointer; color: purple"></i>
                            </td>
                            <td> 
                                <a href="#" class="font-weight-bold text-dark">{{$cart['name']}}</a>
                            <br>
                            <a href="#">Rp {{number_format($cart['pricesingle'],0,',','.')}}</a>
                            </td>
                            <td class="text-center">
                            <button class="btn-outline-primary btn-sm" style="padding: 7px 10px" wire:click="IncreaseItem('{{$cart['rowId']}}')"><i class="fas fa-plus-square"></i></button>    
                                {{$cart['qty']}}
                            <button class="btn-outline-primary btn-sm" style="padding: 7px 10px" wire:click="DecreaseItem('{{$cart['rowId']}}')"><i class="fas fa-minus-square"></i></button>
                            </td>
                            <td>Rp {{number_format($cart['price'],0,',','.')}}</td>
                        </tr>
                        @empty
                        <td colspan="4"><h6 class="text-center">Keranjang Kosong</h6></td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Pembayaran</h4>
                <h5 class="font-weight-bold">Sub Total : Rp {{(number_format($summary['sub_total'],0,',','.'))}}</h5>
                <h5 class="font-weight-bold">Biaya Admin : Rp {{(number_format($summary['pajak'],0,',','.'))}}</h5>
                <h5 class="font-weight-bold">Total Bayar : Rp {{(number_format($summary['total'],0,',','.'))}}</h5>
                    <div class="row">
                            <div class="col-sm-6">
                                <button wire:click="enableTax" class="btn btn-primary"> Biaya Admin</button>
                            </div>
                            <div class="col-sm-6">
                                <button wire:click="disableTax" class="btn btn-danger"> Diskon 0% </button>
                            </div>
                        <div class="col-sm-12">
                            <center>
                                <button class="btn btn-success"> <i class="fas fa-save"></i> Simpan Transaksi </button>
                            </center>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </div>
</div>