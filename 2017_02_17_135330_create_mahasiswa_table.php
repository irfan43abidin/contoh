<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
public function up()
    
	{

		Schema::creat('mahasiswa', funtion (blueprint 
		$table) {
			$table->increments('id');
			$table->string('nama');
			$table->string('nim');
			$table->text('alamat');
			$table->timestamps();
			}
			);       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
