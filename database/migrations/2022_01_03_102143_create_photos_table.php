<?php

use App\Models\Categorie;
use App\Models\Collection;
use App\Models\Oeuvre;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->foreignIdFor(Oeuvre::class)->nullable()->constrained()->onDelete('cascade');
            $table->foreignIdFor(Collection::class)->nullable()->constrained()->onDelete('cascade');
            $table->foreignIdFor(Categorie::class)->nullable()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('photos');
    }
}
