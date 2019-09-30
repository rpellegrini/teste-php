<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model
{
  protected $fillable = [
   'tipo', 'data', 'descricao', 'valor', 'status_pagamento',
];

}
