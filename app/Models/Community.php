<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'user_id'];

    public function Topics()
    {
        return $this->hasMany(Community::class);
    }
}
