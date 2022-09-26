<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;
    protected $table = 'bitacora';
    protected $guarded = ['id'];
    protected $fillable = ['description', 'date', 'user_id', 'created_at','updated_at'];

    public function user(){
        return $this->hasOne(User::class,'id', 'user_id');
    }
}
