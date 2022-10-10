<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Poll;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class AdminController extends Controller
{
    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $graphData = [];

        array_push($graphData, $this->getStatFromIdQuestionForPieChart(6));
        array_push($graphData, $this->getStatFromIdQuestionForPieChart(7));
        array_push($graphData, $this->getStatFromIdQuestionForPieChart(10));
        array_push($graphData, $this->getStatFromIdQuestionForRadarChart(
        [
            
            [
                'id' => 11,
                'libelle' => "Confort d'utilisation",
            ],
            [
                'id' => 12,
                'libelle' => "Connection réseau",
            ],
            [
                'id' => 13,
                'libelle' => "Qualité des graphisme",
            ],
            [
                'id' => 14,
                'libelle' => "Qualité audio",
            ],
            [
                'id' => 15,
                'libelle' => "Qualité de l'image",
            ],
        ], "Qualité"));

        
        return view('admin.index', ['graphData' => $graphData]);
    }

    private function getStatFromIdQuestionForPieChart($id, $libelle = null){
        $question = Question::find($id);
        $answers = Answer::where('question_id', $id)->get();
        $graphData = [
            'type' => 'pie',
            'data' => [
                'labels' => [],
                'datasets' => [
                    [
                        'label' => $question->libelle ?? $libelle,
                        'data' => [],
                        'backgroundColor' => [],
                    ],
                ],
            ],
        ];
        foreach ($answers as $answer) {
            array_push($graphData['data']['labels'], $answer->libelle);
            array_push($graphData['data']['datasets'][0]['data'], $answer->count);
            array_push($graphData['data']['datasets'][0]['backgroundColor'], $answer->color);
        }
        return $graphData;
    }
    private function getStatFromIdQuestionForRadarChart(array $questions, string $libelle){
        $data = [];
        foreach ($questions as $question) {
            $question = Question::with("answers")->where('id', $question['id'])->first();
            //$data[];
            /* foreach ($question->answers as $answer) {
                $data[$question->libelle][$answer->libelle] = $answer->polls()->count();
            } */
        }
        return [
            'type' => 'radar',
            'title' => $libelle,
            'data' => $data,
        ];

    }

    public function getQuestions(){
        $questions = Question::get();
        $questionsData = [];
        array_push($questionsData, [
            'libelle' => 'Votre adresse mail',
            'type' => 'B',
            'id' => 1,
        ]);
        foreach ($questions as $question) {
            array_push($questionsData, [
                'libelle' => $question->libelle,
                'type' => $question->type,
                'id' => ($question->id + 1),
            ]);
        }
        return view('admin.questions', ['questions' => $questionsData]);
    }

    public function getAnswers(){
        $answers = Answer::get();
        $questions = Question::get();
        $questionsData = [];
        array_push($questionsData, [
            'libelle' => 'Votre adresse mail',
            'type' => 'B',
            'id' => 1,
        ]);
        foreach ($questions as $question) {
            array_push($questionsData, [
                'libelle' => $question->libelle,
                
                'id' => ($question->id + 1),
            ]);
        }
        $answersData = [];
        foreach ($answers as $answer) {
            array_push($answersData, [
                'id' => $answer->id ,
                'libelle' => $answer->libelle,
                'question_id' => ($answer->question_id),
                //'count' => $answer->polls()->count(),
            ]);
        }


        return view('admin.answers', ['answers' => $answersData, 'questions' => $questionsData]);  
    }
}
