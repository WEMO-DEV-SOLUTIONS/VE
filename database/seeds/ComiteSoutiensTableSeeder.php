<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComiteSoutiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            [
                'nom_comite'=> 'Justice',
                'categorie'=> 'comite de soutiens virtuel',
                'lieu'=> "Awae",
                'ville'=> "Yaounde",
                'rencontre'=> "Lundi",
                'date_debut'=> "2020-02-4",
                'heure' => "15:20",
                'code_comite'=> "XXX1",
                'chef_groupe'=> "johndoe1@gmail.com",
                'password'=> bcrypt("12435"),
                'created_at'=> now(),
            ],
            [
                'nom_comite'=> 'Paix',
                'categorie'=> 'comite de soutiens virtuel',
                'lieu'=> "Awae",
                'ville'=> "Yaounde",
                'rencontre'=> "Lundi",
                'date_debut'=> "2020-02-4",
                'heure' => "15:20",
                'code_comite'=> "XXX2",
                'chef_groupe'=> "johndoe2@gmail.com",
                'password'=> bcrypt("12435"),
                'created_at'=> now(),
            ],
            [
                'nom_comite'=> 'Vérité',
                'categorie'=> 'comite de soutiens Physique',
                'lieu'=> "Awae",
                'ville'=> "Yaounde",
                'rencontre'=> "Lundi",
                'date_debut'=> "2020-02-4",
                'heure' => "15:20",
                'code_comite'=> "XXX3",
                'chef_groupe'=> "johndoe3@gmail.com",
                'password'=> bcrypt("12435"),
                'created_at'=> now(),
            ],
            [
                'nom_comite'=> 'Amour',
                'categorie'=> 'comite de soutiens virtuel',
                'lieu'=> "Awae",
                'ville'=> "Yaounde",
                'rencontre'=> "Lundi",
                'date_debut'=> "2020-02-4",
                'heure' => "15:20",
                'code_comite'=> "XXX4",
                'chef_groupe'=> "johndoe4@gmail.com",
                'password'=> bcrypt("12435"),
                'created_at'=> now(),
            ],
            [
                'nom_comite'=> 'Lumière',
                'categorie'=> 'comite de soutiens virtuel',
                'lieu'=> "Awae",
                'ville'=> "Yaounde",
                'rencontre'=> "Lundi",
                'date_debut'=> "2020-02-4",
                'heure' => "15:20",
                'code_comite'=> "XXX5",
                'chef_groupe'=> "johndoe5@gmail.com",
                'password'=> bcrypt("12435"),
                'created_at'=> now(),
            ],
            [
                'nom_comite'=> 'Misericorde',
                'categorie'=> 'comite de soutiens virtuel',
                'lieu'=> "Awae",
                'ville'=> "Yaounde",
                'rencontre'=> "Lundi",
                'date_debut'=> "2020-02-4",
                'heure' => "15:20",
                'code_comite'=> "XXX6 ",
                'chef_groupe'=> "johndoe6@gmail.com",
                'password'=> bcrypt("12435"),
                'created_at'=> now(),
            ]
        ];
        
        foreach ($data as $datum){

            $exist_comite_soutiens = DB::table('comite_soutiens')
                ->OrWhere('nom_comite',$datum['nom_comite'])
                ->OrWhere('code_comite',$datum['code_comite'])
                ->OrWhere('chef_groupe',$datum['chef_groupe'])->count();

            if ( empty($exist_comite_soutiens) ){
                DB::table('comite_soutiens')->insert($datum);
            }
        }



    }
}
