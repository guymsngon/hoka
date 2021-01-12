<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('type_transport');
            $table->string('country_out');
            $table->string('country_in');
            $table->string('town_out');
            $table->string('town_in');
            $table->string('address_out');
            $table->string('address_in');
            $table->string('incorterm');
            $table->string('mod_cont');
            $table->float('length1',8,2);
            $table->float('width1',8,2);
            $table->float('height1',8,2);
            $table->float('volume1',8,2);
            $table->float('weight1',8,2);
            $table->string('images1');
            $table->float('length2',8,2);
            $table->float('width2',8,2);
            $table->float('height2',8,2);
            $table->float('volume2',8,2);
            $table->float('weight2',8,2);
            $table->string('images2');
            $table->float('length3',8,2);
            $table->float('width3',8,2);
            $table->float('height3',8,2);
            $table->float('volume3',8,2);
            $table->float('weight3',8,2);
            $table->string('images3');
            $table->float('length4',8,2);
            $table->float('width4',8,2);
            $table->float('height4',8,2);
            $table->float('volume4',8,2);
            $table->float('weight4',8,2);
            $table->string('images4');
            $table->float('length5',8,2);
            $table->float('width5',8,2);
            $table->float('height5',8,2);
            $table->float('volume5',8,2);
            $table->float('weight5',8,2);
            $table->string('images5');
            $table->float('volume_tot',8,2);
            $table->float('weight_tot',8,2);
            $table->string('weight_unity');
            $table->boolean('assurance');
            $table->longText('detail_assurance');
            $table->longText('nature_merchandise');
            $table->longText('info_sup');
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
        Schema::dropIfExists('annonces');
    }
}
