<div>
    <div class="row">
        <div class="col">
            <div class="card center">
                <div class="card-body">
                    <h2 class="font-weight-bold mb-3 text-center">Transaksi Pengguna</h2>
                    <table class="table table-bordered table-hovered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nomor Faktur</th>
                                <th>Id user</th>
                                <th>Pembayaran</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $index=>$transaction)
                            <tr class="text-center">
                                <td>{{$index + 1}}</td>
                                <td>{{$transaction->invoice_number}}</td>
                                <td>{{$transaction->user_id}}</td>
                                <td>{{$transaction->pay}}</td>
                                <td>{{$transaction->total}}</td>
                                <td>
                                <button class="fas fa-trash" wire:click="destroy({{$transaction->id}})"></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div style="display: flex; justify-content: center">
                        {{ $transactions->links() }}
                    </div>
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</div>