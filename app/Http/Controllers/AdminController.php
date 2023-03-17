<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     *
     *Displays three pieCharts and radarChart
     *
     * @return void
     */

    public function index()
    {
        $pieDatas = array($this->pieChart('6'), $this->pieChart('7'), $this->pieChart('10'));

        $radarDatas = $this->radarChart(array('11', '12', '13', '14', '15'));

        return view('back.index', ['pieDatas' => $pieDatas, 'radarDatas' => $radarDatas]);
    }

    public function pieChart(string $questionID)
    {
        $labels = Question::AnswerPossible($questionID)->pluck('possible_answer');

        $labels = explode(",", $labels->implode('0 => ',));
        $question = Question::where('id', $questionID)->pluck('body');
        $answers = Answer::all()->where('question_id', $questionID)->groupBy('answer');

        $datas = [];

        $colors = [];


        /**
         * Foreach labels define :
         *  - $number => how many this response was choose
         *  - $colors => push a value who define the label
         */
        foreach ($labels as $key => $value) {
            $number = 0;

            if(isset($answers[$value])) {

                $number = $answers[$value]->count();
                array_push( $datas, $number);
                array_push( $colors, "#".bin2hex(openssl_random_pseudo_bytes(3)) );

            }


        }

        return array(
            "question_id" => $questionID,
            "question" => $question->implode(''),
            "labels" => $labels,
            "datas" => $datas,
            "colors" => $colors
        );
    }

    public function radarChart(array $questionsID) {

        $labels = [];
        $answers = [];
        foreach ($questionsID as $questionID) {
            array_push($labels, "Question n°" . $questionID);
            array_push($answers, Answer::all()->where('question_id', $questionID)->avg('answer'));
        }

        return array("labels" => $labels, "datas" => $answers);
    }

    /**
     * get all questions
     *
    */

    public function survey()
    {
        $questions = Question::all();

        return view('back.survey', compact('questions'));
    }

    /**
     * get all answers
     *
    */

    public function answers()
    {
        $questions = Question::all();
        $answers = Answer::latest()->paginate(40);
      
        $link = [];
        foreach($answers as $answer) {
            $link[$answer->url_link] = Answer::hashPath($answer->url_link)->pluck('answer', 'question_id');
        }
        
        return view('back.answers', compact('answers', 'questions', 'link'));
    }
}
