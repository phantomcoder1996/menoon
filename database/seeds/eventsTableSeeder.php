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
        $event->name='Project Management';
        $event->title="Diploma In Project Management";
        $event->description=' Outcome
 Certification
This free online project management professional certification course from Alison offers a comprehensive review of project management such as methodology, tool sets and documentation, and the project life cycle including analysis, planning, design and evaluation. The course also includes a project management case study. ';
        $event->country='Egypt';
        $event->start_date='2017/04/22';
       $event->end_date='2017/04/22';
        $event->save();

        $event=new \App\events();
        $event->name='Project Management';
        $event->title="Diploma In Project Management";
        $event->description=' Outcome
 Certification
This free online project management professional certification course from Alison offers a comprehensive review of project management such as methodology, tool sets and documentation, and the project life cycle including analysis, planning, design and evaluation. The course also includes a project management case study. ';
        $event->country='France';
        $event->start_date='2017/04/23';
        $event->end_date='2017/04/24    ';
        $event->save();

        $event=new \App\events();
        $event->name='Project Management';
        $event->title="Diploma In Project Management";
        $event->description=' Outcome
 Certification
This free online project management professional certification course from Alison offers a comprehensive review of project management such as methodology, tool sets and documentation, and the project life cycle including analysis, planning, design and evaluation. The course also includes a project management case study. ';
        $event->country='Canda';
        $event->start_date='2017/04/23';
        $event->end_date='2017/04/24    ';
        $event->save();

        $event=new \App\events();
        $event->name='Project Management';
        $event->title="Diploma In Project Management";
        $event->description=' Outcome
 Certification
This free online project management professional certification course from Alison offers a comprehensive review of project management such as methodology, tool sets and documentation, and the project life cycle including analysis, planning, design and evaluation. The course also includes a project management case study. ';
        $event->country='Suadia aribia';
        $event->start_date='2017/04/23';
        $event->end_date='2017/04/24    ';
        $event->save();
    }
}
