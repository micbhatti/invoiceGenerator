<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoicemakers extends Model
{
    protected $fillable =['name','email','street','phone','suite','city','province','zip','country'];
}
