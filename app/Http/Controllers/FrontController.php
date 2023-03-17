<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Show all the list question
     *
     * @return view
     */
    public function index()
    {
        //
        $questions = Question::all();
        $email="";
        return view('front.index', compact('questions','email'));

    }
     /**
     * Show response survey
     *
     * @return void
     */
    public function answers(string $url_link) {
        $questions = Question::all();

        $answers = Answer::HashPath($url_link)->pluck('answer', 'question_id');

        return view('front.answer', ['questions' => $questions, 'answers' => $answers]);
    }

      /**
     *return the url form
     *
     * @return void
     */
    public function url()
    {
    
        return view('front.url');

    }
}
