<?php
 
namespace App\Repositories;

use App\Models\Answer;

class AnswerRepository
{
    public function store($request): bool
    {
        $answer = new Answer();
        $answer->libelle = $request;
        $answer->question_id = $request;
        $answer->poll_id = $request;
        $answer->email = $request;
        
        
       foreach ($request as $key => $value) {
            $answer->$key = $value;
        }
        return true;

        
    }


}

