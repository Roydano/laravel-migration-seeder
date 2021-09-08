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
        for($i = 0; $i < 100; $i++){
            $newTravel = new Travel();

            $newTravel->location = 'Location da sogno numero ' . $i . +1;
            $newTravel->travel_description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatum obcaecati odio nulla! Ex, similique dolore fugit saepe autem et eveniet! Doloribus ratione consequuntur optio? Dolorem repellendus optio dicta provident!';
            $newTravel->days_travel = rand(5,20);
            $newTravel->person = rand(1,5);
            $newTravel->overnight_stay = 'hotel';
            $newTravel->hotel_name = 'Il magnifico Hotel numero ' . rand(1,1000);
            $newTravel->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit doloremque repellendus quam nisi necessitatibus. Tenetur ab optio quam numquam. Illum ipsa dicta esse repudiandae non doloremque aperiam quis voluptatum cupiditate.';
            $newTravel->price = rand(500, 10000);

            $newTravel->save();
        }
    }
}
