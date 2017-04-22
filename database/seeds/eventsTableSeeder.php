<?php

use Illuminate\Database\Seeder;

class eventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         $event=new \App\events();
        $event->name='Tutorial';
        $event->description='asdfghjkl';
        $event->country='hello';
        
        $event->save();

         $event=new \App\events();
        $event->name='News';
        $event->description='asdfghjklzxcvbnm,';
        $event->country='helloooooooooo';
        $event->save();
    }
}
