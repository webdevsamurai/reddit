<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Community extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable = ['name', 'description', 'user_id'];

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
}
