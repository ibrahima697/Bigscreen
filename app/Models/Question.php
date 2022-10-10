<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'type',
        'choices',
        'question_id',
        'email',
    ];
    public $timestamps = false;

    public function answers(){

        return $this->hasMany(Answer::class);
    }
}
