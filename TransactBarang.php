<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactBarang extends Model
{
  use SoftDeletes;
  protected $table = 'transact_barang';

  public function user()
  {
    return $this->belongsTo(User::class, 'username', 'username');
  }

  public function detail_transact()
  {
    return $this->hasMany(DetailTransactBarang::class, 'invoice', 'invoice');
  }

  public function payment_barang()
  {
    return $this->hasMany(PaymentBarang::class, 'invoice_tr_barang', 'invoice');
  }
}
