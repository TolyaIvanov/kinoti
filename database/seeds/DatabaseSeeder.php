<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Film::class, 30)->create();
        factory(\App\Serial::class, 30)->create();
        factory(\App\Actor::class, 10)->create();
        factory(\App\Director::class, 10)->create();

        $actors = \App\Actor::all();
        $directors = \App\Director::all();

        \App\Film::all()->each(function ($film) use ($actors) {
            $film->actors()->saveMany($actors);
        });
        \App\Film::all()->each(function ($film) use ($directors) {
            $film->directors()->saveMany($directors);
        });
        \App\Serial::all()->each(function ($serial) use ($actors) {
            $serial->actors()->saveMany($actors);
        });
        \App\Serial::all()->each(function ($serial) use ($directors) {
            $serial->directors()->saveMany($directors);
        });
    }
}
