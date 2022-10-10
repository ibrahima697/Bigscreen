<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\User;
use App\Models\Question;
use App\Models\Poll;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       // factory(Answer::class, 10)->create();
        $faker = \Faker\Factory::create();
        $questions = Question::all();
        $users = User::all();
        $polls = Poll::all();
        foreach ($questions as $question) {
            foreach ($users as $user) {
                foreach ($polls as $poll) {
                    DB::table('answers')->insert([
                        'libelle' => $faker->sentence,
                        'question_id' => $question->id,
                        'user_id' => $user->id,
                        'poll_id' => $poll->id,
                    ]);
                }
            }
        }

        
    }
}
