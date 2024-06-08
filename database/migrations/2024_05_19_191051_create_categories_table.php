<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('parent_id')
            ->nullable()
            ->constrained('categories' , 'id')
            ->nullOnDelete() // null
            //->restrictOnDelete(); // no remove
           // ->cascadeOnDelete() // delete all




            ;
            $table->text('description');
            $table->string('image');
            $table->enum('status', ['active', 'unactive']);
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
        Schema::dropIfExists('categories');
    }
};
