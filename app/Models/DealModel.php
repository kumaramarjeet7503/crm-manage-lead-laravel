<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealModel extends Model
{
    use HasFactory;
    protected $table = 'deals' ;
    protected $primaryKey = 'id' ;

    public function getAccountDetails()
    {
        return $this->hasOne(AccountModel::class,"id","account_id") ;
    }

    public function getContactDetails()
    {
        return $this->hasOne(ContactModel::class,"id","contact_id") ;
    }
}
