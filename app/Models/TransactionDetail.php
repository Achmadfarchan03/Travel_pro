<?php

namespace App\Models;

use App\Models\Transaction as ModelsTransaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'id',
        'transactions_id',
        'username',
        'nationality',
        'is_visa',
        'doe_passport',
        'transaction_status',
    ];

    protected $hidden = [
        
    ];


    public function transaction() {
        return $this->belongsTo(ModelsTransaction::class, 'transactions_id', 'id');
    }
}
