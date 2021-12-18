<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planTrabajos', function (Blueprint $table) {
            $table->id();
            $table->string('sprint', 22)->nullable();
            $table->string('resultado', 500)->nullable();
            $table->string('duración', 100)->nullable();
            $table->date('fecha_inicio', 10)->nullable();
            $table->date('fecha_fin', 10)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planTrabajos');
    }
}
