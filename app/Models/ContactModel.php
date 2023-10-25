<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $table = 'contacts' ;
    protected $primaryKey = 'id' ;

    public function getAccountDetails()
    {
        return $this->hasOne(AccountModel::class,"id","account_id") ;
    }
}
