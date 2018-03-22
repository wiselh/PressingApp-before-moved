<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commande extends Model
{

    use SoftDeletes;
    protected $table = 'commandes';
    public $primaryKey = 'id_commande';
    public $num = 0;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the vetements for the Commande.
     */
    public function vetements()
    {
        return $this->hasMany(Vetement::class,'id_commande','id_commande');
    }

    /**
     * Get the client that owns the commande.
     */
    public function client()
    {
        return $this->belongsTo(Client::class,'id_client');
    }

//    public function client()
//    {
//        return $this->hasOne(Client::class);
//    }
    /**
     * Get the payments for the Commande.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class,'id_payment');
    }

}
