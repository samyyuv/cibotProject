<?php

use App\Models\Photo;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOeuvresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->string('titre');
            $table->string('sous_titre');
            $table->dateTime('date');
            $table->boolean('active')->default(0)->nullable();
            $table->foreignIdFor(Collection::class)->constrained()->onDelete('cascade');;
            $table->foreignIdFor(Categorie::class)->constrained()->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oeuvres');
    }
}
