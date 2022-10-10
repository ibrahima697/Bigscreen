<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Answer;

class Poll extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'status',
        'user_id',
        'questions',
        'email',
        'name',
        
                    
    ];

    public function answers(){

        return $this->hasMany(Answer::class);
    }
}
