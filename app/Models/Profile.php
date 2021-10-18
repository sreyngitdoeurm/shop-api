<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ["city","contry"];
    /**
     * profile belongs to user, user is the parent
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
