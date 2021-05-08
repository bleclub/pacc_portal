<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('case_id', 50);
            $table->string('department', 100);
            $table->string('staff_name', 200);
            $table->string('wanted_id', 50);
            $table->string('court_name', 100);
            $table->string('accuse_id_card', 50);
            $table->string('accuse_name', 200);
            $table->text('allegation_detail');
            $table->string('attorney_name', 200);
            $table->string('expire_date', 20);
            $table->string('announce_date', 20);
            $table->enum('status',['disable','enable']);
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
        Schema::dropIfExists('reports');
    }
}
