<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Customer;
use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\AnswerRequest;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AnswerRequest   $answerRequest
     * @return \Illuminate\Http\Response
     */
    public function store(AnswerRequest $answerRequest)
    {
        $url_link = Str::uuid()->toString();
     
        $email = $answerRequest->answer1;
        $email = Customer::all()->where("email", $email)->pluck("email")->implode('0 => ',);
     
        if($email){
          
            $questions = Question::all();
            $email="L'adresse email existe déjà";
            return view('front.index', ['email' => $email,'questions'=> $questions]);
        }else{
         
            $Customer = Customer::create([
                'email' => $answerRequest->answer1,
            ]);
            $customers = Customer::all();
        
            foreach($customers as $customer) {
                $emailId= Customer::Email($customer->email)->pluck('id');
            }
            $questions = Question::all();
       
            foreach ($questions as $key => $question) {
                $answer = new Answer();
                $answer->answer = $answerRequest->input('answer'.$question->id);
                $answer->question_id = $key + 1;
                $answer->customer_id =$emailId[0];
                $answer->url_link = $url_link;
                $answer->save();
                }
            return redirect('/url')->with('url', $url_link);
        }
    }



}
