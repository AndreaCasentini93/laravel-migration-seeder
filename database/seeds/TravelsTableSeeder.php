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
        $arrayTravel = config('travel');

        foreach ($arrayTravel as $item) {
            
            $travel = new Travel();

            $travel->title = $item['title'];
            $travel->image = $item['image'];
            $travel->location = $item['location'];
            $travel->stars = $item['stars'];
            $travel->address = $item['address'];
            $travel->vote = $item['vote'];
            $travel->free_cancellation = $item['free_cancellation'];
            $travel->room = $item['room'];
            $travel->board = $item['board'];
            $travel->price = $item['price'];

            $travel->save();

        }
    }
}
