<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    use HasFactory;
    protected $primaryKey = 'invoice_number';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function Product(){
        return $this->hasMany(ProductTransaction::class, 'invoice_number', 'invoice_number');
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}