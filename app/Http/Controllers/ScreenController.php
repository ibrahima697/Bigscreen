<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Poll;
use App\Models\User;
use App\Repositories\AnswerRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Validator;
class ScreenController extends Controller
{
    //
    public function index()
    {
        $questions = Question::with('answers')->get();
        $questionsResponse = [];
        foreach ($questions as $question) {
            if ($question->type === 'A') {
                $JSONItem = [
                    'id' => $question->id,
                    'libelle' => $question->libelle,
                    'type' => $question->type,
                    'choices' => json_decode($question->choices),
                ];
            } else {
                $JSONItem = [
                    'id' => $question->id,
                    'libelle' => $question->libelle,
                    'type' => $question->type,
                ];
            }
            array_push($questionsResponse, $JSONItem);
        }
        return view('screens.index', ['questions' => $questionsResponse]);
    }

    public function getPoll()
    {

        $poll = Poll::where(
            [
                ['status', '=', true],
            ]
         )->first();

        if ($poll == null) {
            abort(404);
        } else {
            $pollResponse = [];
            $answers = $poll->answers()->with('question')->orderBy('question_id')->get();
            foreach ($answers as $answer) {
                $answers = [
                    'libelle' => $answer->libelle,
                    'question' => [
                        'libelle' => $answer->question->libelle,
                    ]
                ];
                array_push($pollResponse,$answers);
            } 
            return view('screens.answer', ['poll' => [
                'id' => $poll->id,
                'email' => $poll->email,
                'answers' => $pollResponse,
          
            ]]);
        }


    }
    public function createPoll(Request $request)
    {
       return view('screens.index', ['questions' => $questionsResponse], ['poll' => $poll], ['answers' => $answers]);   
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);
        $poll = new Poll();
        $poll->email = $request->email;
        $poll->url = Str::random(10);

        $poll = Poll::find(['email',$request->email]);
        if ($poll == null) {
          $validated->errors()->add('email', 'Email already exist');
            return redirect()->back()->withErrors($validated)->withInput();
        } else {
            $answerRepository = new AnswerRepository();
            $answerRepository->store($request);
        }
        $Answer = [];

        foreach ($request->all() as $key => $value) {
            if (is_array($value)) {
                $value = json_encode($value);
            }
            $answer = new Answer();
            $answer->libelle = $value;
            $answer->question_id = $key;
            $answer->poll_id = $key;
            array_push($Answer, $answer);
        }
         $poll->status = true;
        

        return view('screens.url')->with('success', 'Votre questionnaire a été envoyé avec succès');



    }
}
