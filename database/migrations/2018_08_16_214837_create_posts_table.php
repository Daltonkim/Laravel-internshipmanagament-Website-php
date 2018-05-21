<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            //$table->engine ='InnoDB';
            $table->increments('id');
            $table->string('jobtitle');
            $table->string('location');
            $table->string('jobtype');
            $table->string('jobdesc');
            $table->string('companyname');
            $table->string('howto');
            $table->string('deadline');
            $table->integer('user_id');
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
        Schema::dropIfExists('posts');
    }
}
