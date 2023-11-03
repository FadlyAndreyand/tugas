<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
Schema::create('bukus', function (Blueprint $table) {
$table->id();
$table->string('kode_buku')->unique();
$table->string('judul');
$table->string('penulis');
$table->timestamps();
});
}

};
