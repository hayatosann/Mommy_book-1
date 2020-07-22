<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class Maternity_checkupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maternity_checkups =[
            [
                'date' => '2020-07-20',
                'pregnancy_week' => 2,
                'fundal_height' => 23,
                'weight' => 50,
                'abdominal_circumference' => 80,
                'blood_pressure' => 100,
                'edema' => '-',
                'urinal_protein' => '-',
                'urinal_sugar' => '-',
                'note' => 'test',
                'user_id' => 1,
            ],
        ];
        foreach($maternity_checkups as $maternity_checkup){
            DB::table('maternity_checkups')->insert([
                'date' => $maternity_checkup['date'],
                'pregnancy_week' =>$maternity_checkup['pregnancy_week'] ,
                'fundal_height' => $maternity_checkup['fundal_height'],
                'weight' => $maternity_checkup['weight'],
                'abdominal_circumference' => $maternity_checkup['abdominal_circumference'],
                'blood_pressure' => $maternity_checkup['blood_pressure'],
                'edema' => $maternity_checkup['edema'],
                'urinal_protein' => $maternity_checkup['urinal_protein'],
                'urinal_sugar' => $maternity_checkup['urinal_sugar'],
                'note' => $maternity_checkup['note'],
                'user_id'=>$maternity_checkup['user_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
