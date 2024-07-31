<?php
  
  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;
  
  class CreateCountriesTable extends Migration
  {
      public function up()
      {
          if (!Schema::hasTable('countries')) {
              Schema::create('countries', function (Blueprint $table) {
                  $table->id();
                  $table->string('name');
                  $table->string('code');
                  $table->timestamps();
              });
          }
      }
  
      public function down()
      {
          Schema::dropIfExists('countries');
      }
  };
?>  