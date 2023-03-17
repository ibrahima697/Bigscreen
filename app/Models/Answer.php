<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer',
        'question_id',
        'customer_id',
        'url_link'
    ];

    /**
     * Undocumented function
     * Relation answer belongs to question
     * @return void
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    /**
     * Relation answer belongs to customer
     *
     * @return Customer
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function scopeHashPath($query, $url_link) {

        return $query->where('url_link',$url_link);
    }
}
