<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add3ToUpprotectionInvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('upprotection_invs', function (Blueprint $table) {
            $table->smallInteger('check_used_up_protection')->nullable();
        });

        Schema::table('upconcrete_invs', function (Blueprint $table) {
            $table->smallInteger('check_used_up_concrete')->nullable();
        });

        Schema::table('control_invs', function (Blueprint $table) {
            $table->smallInteger('check_used_control')->nullable();
        });

        Schema::table('downconcrete_invs', function (Blueprint $table) {
            $table->smallInteger('check_used_down_concrete')->nullable();
        });

        Schema::table('downprotection_invs', function (Blueprint $table) {
            $table->smallInteger('check_used_down_protection')->nullable();
        });
        
        Schema::table('waterdelivery_invs', function (Blueprint $table) {
            $table->smallInteger('check_used_waterdelivery')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('upprotection_invs', function (Blueprint $table) {
            //
        });
    }
}
