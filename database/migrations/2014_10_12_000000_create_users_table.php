<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('estado',10)->nullable();
            $table->integer('agen_tipo')->nullable();
            $table->string('type')->default('user');
            $table->rememberToken();
            $table->string('tipo')->nullable();
            $table->date('fec_cad')->nullable();
            $table->string('aut_maxima',10)->nullable();
            $table->mediumText('bio')->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable()->default('profile.png');
            $table->string('accion')->nullable();
            $table->string('ip')->nullable();
            $table->string('user_accion')->nullable();            
            $table->date('fec_accion')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
