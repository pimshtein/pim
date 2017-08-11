<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeEmailNullableUsersTable extends Migration
{
    /**
     * Run the migrations.
     * Set email to "default null".
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email', 255)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     * Set email to not null.
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email', 255)->notNullable()->change();
        });
    }
}
