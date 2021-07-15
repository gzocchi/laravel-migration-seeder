<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = config('travel');
        foreach ($travels as $item) {
            $travel = new Travel();
            foreach ($item as $key => $value) {
                $travel->{$key} = $value;
            }
            $travel->save();
        }
    }
}
