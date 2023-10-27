<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $fillable =  ['name','start_date','end_date','value','status','creator'];
    
    public function creator(): BelongsTo  
    {   
        return $this->belongsTo(User::class, 'creator', 'id');
    }
}


