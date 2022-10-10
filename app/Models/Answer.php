<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poll;
use App\Models\Question;
class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'question_id',
        'poll_id',
        'email',

        
    ];
    public $timestamps = false;

    public function question(){

        return $this->belongsTo(Question::class);
    }
    public function poll(){

        return $this->belongsTo(Poll::class);
    }
}
