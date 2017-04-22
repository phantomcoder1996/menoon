<?php

use Illuminate\Database\Seeder;

class mediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $event=new \App\media();
        $event->event_id='1';
        $event->pic='\app\avatars\large.jpg';
        $event->type='img';
        $event->save();

          $event=new \App\media();
        $event->event_id='2';
        $event->pic='\app\avatars\background-pics-12.jpg';
        $event->type='img';
        $event->save();

        $event=new \App\Media();
        $event->event_id='2';
        $event->pic='\app\avatars\4537c00b63a920f5d1a49bd37b01e789.jpg';
        $event->type='img';
        $event->save();
    }
}
