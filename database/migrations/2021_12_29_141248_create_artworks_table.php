<?php

use App\Models\Post;
use App\Models\Type;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('size');
            $table->dateTime('date');
            $table->longText('description');
            $table->timestamps();
            $table->foreignIdFor(Post::class)->constrained();
            $table->foreignIdFor(Type::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artworks');
    }
}
