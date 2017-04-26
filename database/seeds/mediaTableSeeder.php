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
        $event->pic='1.jpg';
        $event->type='img';
        $event->save();

          $event=new \App\media();
        $event->event_id='2';
        $event->pic='2.jpg';
        $event->type='img';
        $event->save();

        $event=new \App\Media();
        $event->event_id='2';
        $event->pic='3.jpg';
        $event->type='img';
        $event->save();

        $event=new \App\Media();
        $event->event_id='3';
        $event->pic='4.jpg';
        $event->type='img';
        $event->save();

        $event=new \App\Media();
        $event->event_id='3';
        $event->pic='5.jpg';
        $event->type='img';
        $event->save();

        $event=new \App\Media();
        $event->event_id='4';
        $event->pic='6.jpg';
        $event->type='img';
        $event->save();
    }
}
