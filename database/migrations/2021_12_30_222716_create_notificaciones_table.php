<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            //$table->id();
            $table->increments ('id');
            $table->text('cuerpo', 255)->nullable();
            //aqui se guarda el id del usuario que envia la notificacion
            $table->unsignedInteger('sender_id');
            //aqui se guarda el id del usuario que recibe la notificacion
            $table->unsignedInteger('recipient_id');
            //$table->string('estado_del_proyecto', 255)->nullable();
            //$table->string('entregable', 500)->nullable();
            //$table->date('fecha_de_entrega', 255)->nullable();
            //$table->string('porcentaje', 5)->nullable();
            //$table->decimal('costo', 22)->nullable()->default(0.00);
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
        Schema::dropIfExists('notificaciones');
    }
}
