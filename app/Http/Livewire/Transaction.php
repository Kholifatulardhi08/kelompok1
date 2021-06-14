<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction as TransactionModel;
use Livewire\WithPagination;


class Transaction extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $invoice_number, $user_id, $pay, $total;
    public $updateMode = false;
    public function render()
    {
        $transactions = TransactionModel::orderBy('created_at', 'DESC')->paginate(5);
        return view('livewire.transaction', compact('transactions'));
    }

    public function destroy($invoice_number){
        if($invoice_number){
            $transactions = TransactionModel::where('invoice_number', $invoice_number);
            $transactions->delete();
        }
        return view('livewire.transaction', compact('transactions'));
    }
}