<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Prendiamo l'array presente in config/comics.php
        $comicsArray = config('comics');

        //Per ogni singolo array creiamo un oggetto comic e riempiamo tutti i dati, infine salviamo
        foreach ($comicsArray as $comic) {

            $newComic = new Comic();
            $newComic->fill($comic);
            // $newComic->title = $comic['title'];
            // $newComic->description = $comic['description'];
            // $newComic->thumb = $comic['thumb'];
            // $newComic->price = $comic['price'];
            // $newComic->series = $comic['series'];
            // $newComic->sale_date = $comic['sale_date'];
            // $newComic->type = $comic['type'];
            $newComic->save();
        }
    }
}
