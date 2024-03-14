<?php

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
        Schema::create('admin_etud_messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();








            $table->string("contenu")->nullable();
            $table->string("file")->nullable();



            $table->unsignedBigInteger('id_admin');


            $table->foreign('id_admin')->references('id_admin')->on('admins')->cascadeOnDelete;



            $table->unsignedBigInteger('id_etudient');


            $table->foreign('id_etudient')->references('id_etudient')->on('etudients')->cascadeOnDelete;









        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_etud_messages');
    }
};
