<?php

use App\Models\Teszt;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->integer('helyes')->default('0');
            $table->foreignId('KategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });

        Teszt::create([
            'kerdes'=> 'Ki volt a magyarország első felelős miniszterelnöke?',
            'v1'=>'Battyány Lajos',
            'v2'=>'Deák Ferenc',
            'v3'=>'Kossuth Lajos',
            'v4'=>'Győzike',
            'helyes'=> 0,
            'kategoriaId'=>1
        ]);
        Teszt::create([
            'kerdes'=> 'Ki volt a magyar állam alapítója?',
            'v1'=>'Szent István',
            'v2'=>'Álmos',
            'v3'=>'Árpád',
            'v4'=>'Győzike',
            'helyes'=> 0,
            'kategoriaId'=>1
        ]);

        Teszt::create([
            'kerdes'=> 'A papírt milyen szinű szelektív kukába gyűjtjük?',
            'v1'=>'kék',
            'v2'=>'szürke',
            'v3'=>'piros',
            'v4'=>'sárga',
            'helyes'=> 0,
            'kategoriaId'=>2
        ]);

        Teszt::create([
            'kerdes'=> 'A  széndioxid kibocsátás hatása?',
            'v1'=>'globális felmelegedés',
            'v2'=>'globális lehűlés',
            'v3'=>'semmi',
            'v4'=>'Győzike',
            'helyes'=> 0,
            'kategoriaId'=>2
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
