<?php
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

use App\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->words(2,true);
            $newTrain->depart_station = $faker->city();
            $newTrain->arrived_station = $faker->city();
            $newTrain->hours_start = $faker->time();
            $newTrain->date_start = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->hours_end = $faker->time();
            $newTrain->date_end = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->code_train = $faker->regexify('[A-Z]{3}[0-6]{5}');
            $newTrain->number_carriages = $faker->numberBetween(1, 6);
            $newTrain->on_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
