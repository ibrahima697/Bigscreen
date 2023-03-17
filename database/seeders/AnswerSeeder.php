<?php

namespace Database\Seeders;

use App\Models\answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class answerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [
            [ 'answer'=>'iguisse97@gmail.com','question_id'=>'1','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'26','question_id'=>'2','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'Homme','question_id'=>'3','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'3','question_id'=>'4','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'footballeur','question_id'=>'5','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'HTC Vive','question_id'=>'6','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'Occulus store','question_id'=>'7','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'HTC Vive Pro','question_id'=>'8','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'4','question_id'=>'9','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'travailler','question_id'=>'10','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'4','question_id'=>'11','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'5','question_id'=>'12','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'4','question_id'=>'13','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'5','question_id'=>'14','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'4','question_id'=>'15','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'Non','question_id'=>'16','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'Oui','question_id'=>'17','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'Oui','question_id'=>'18','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'oui','question_id'=>'19','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],
            [ 'answer'=>'match','question_id'=>'20','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c86','customer_id'=>'1'],

            [ 'answer'=>'papa@gmail.com','question_id'=>'1','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'25','question_id'=>'2','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'Homme','question_id'=>'3','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'4','question_id'=>'4','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'informaticien','question_id'=>'5','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'Oculus Quest','question_id'=>'6','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'SteamVR','question_id'=>'7','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'Occulus Quest','question_id'=>'8','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'3','question_id'=>'9','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'regarder la TV en direct','question_id'=>'10','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'3','question_id'=>'11','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'5','question_id'=>'12','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'2','question_id'=>'13','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'3','question_id'=>'14','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'5','question_id'=>'15','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'Non','question_id'=>'16','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'Non','question_id'=>'17','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'Non','question_id'=>'18','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'Non','question_id'=>'19','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],
            [ 'answer'=>'dormir','question_id'=>'20','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c87','customer_id'=>'2'],


            [ 'answer'=>'guisse@gmail.com','question_id'=>'1','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'20','question_id'=>'2','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'Femme','question_id'=>'3','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'3','question_id'=>'4','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'etudiante','question_id'=>'5','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'HTC Vive','question_id'=>'6','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'Occulus store','question_id'=>'7','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'HTC Vive Pro','question_id'=>'8','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'2','question_id'=>'9','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'travailler','question_id'=>'10','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'4','question_id'=>'11','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'5','question_id'=>'12','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'2','question_id'=>'13','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'3','question_id'=>'14','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'2','question_id'=>'15','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'Oui','question_id'=>'16','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'Non','question_id'=>'17','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'Non','question_id'=>'18','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'oui','question_id'=>'19','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],
            [ 'answer'=>'Netflix','question_id'=>'20','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c88','customer_id'=>'3'],


            [ 'answer'=>'ibrahima@mail.com','question_id'=>'1','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'52','question_id'=>'2','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'Préfère ne pas répondre','question_id'=>'3','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'3','question_id'=>'4','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'etudiante','question_id'=>'5','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'Oculus Rift/s','question_id'=>'6','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'Windows store','question_id'=>'7','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'Aucun','question_id'=>'8','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'4','question_id'=>'9','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'travailler','question_id'=>'10','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'5','question_id'=>'11','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'2','question_id'=>'12','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'4','question_id'=>'13','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'5','question_id'=>'14','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'5','question_id'=>'15','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'Oui','question_id'=>'16','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'Oui','question_id'=>'17','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'Non','question_id'=>'18','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'Non','question_id'=>'19','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],
            [ 'answer'=>'film','question_id'=>'20','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c89','customer_id'=>'4'],


           
            [ 'answer'=>'ahmady@gmail.com','question_id'=>'1','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'26','question_id'=>'2','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'1'],
            [ 'answer'=>'Homme','question_id'=>'3','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'3','question_id'=>'4','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'alternant','question_id'=>'5','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'Windows Mixed','question_id'=>'6','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'Occulus store','question_id'=>'7','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'HTC Vive Pro','question_id'=>'8','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'4','question_id'=>'9','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'1'],
            [ 'answer'=>'jouer en equipe','question_id'=>'10','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'4','question_id'=>'11','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'4','question_id'=>'12','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'4','question_id'=>'13','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'4','question_id'=>'14','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'4','question_id'=>'15','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'Non','question_id'=>'16','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'Oui','question_id'=>'17','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'Non','question_id'=>'18','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'oui','question_id'=>'19','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],
            [ 'answer'=>'film','question_id'=>'20','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c76','customer_id'=>'7'],


            [ 'answer'=>'cheikh@gmail.com','question_id'=>'1','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'40','question_id'=>'2','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'Homme','question_id'=>'3','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'4','question_id'=>'4','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'informaticien','question_id'=>'5','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'Oculus Quest','question_id'=>'6','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'SteamVR','question_id'=>'7','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'Occulus Quest','question_id'=>'8','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'3','question_id'=>'9','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'regarder la TV en direct','question_id'=>'10','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'3','question_id'=>'11','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'5','question_id'=>'12','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'2','question_id'=>'13','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'3','question_id'=>'14','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'5','question_id'=>'15','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'Oui','question_id'=>'16','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'Non','question_id'=>'17','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'Non','question_id'=>'18','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'oui','question_id'=>'19','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],
            [ 'answer'=>'documentaire','question_id'=>'20','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c57','customer_id'=>'8'],


          

            [ 'answer'=>'pogba@mail.com','question_id'=>'1','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'12','question_id'=>'2','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'Homme','question_id'=>'3','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'3','question_id'=>'4','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'joueur','question_id'=>'5','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'Oculus Rift/s','question_id'=>'6','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'Windows store','question_id'=>'7','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'Aucun','question_id'=>'8','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'4','question_id'=>'9','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'jouer en equipe','question_id'=>'10','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'5','question_id'=>'11','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'2','question_id'=>'12','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'4','question_id'=>'13','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'5','question_id'=>'14','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'5','question_id'=>'15','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'Oui','question_id'=>'16','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'Oui','question_id'=>'17','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'Oui','question_id'=>'18','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'Oui','question_id'=>'19','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
            [ 'answer'=>'match','question_id'=>'20','url_link'=>'18b2b90b-f4c9-4594-9539-50058b797c10','customer_id'=>'10'],
        ];
        answer::insert($answers);
    }
}
