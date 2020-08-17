<?php

require "../bootstrap.php";


use Illuminate\Database\Capsule\Manager as Capsule;


Capsule::schema()->create('users', function ($table) {

    $table->increments('id');

    $table->string('name');

    $table->bigInteger ('document')->unique();

    $table->string('email')->unique();

    $table->string('password');

    $table->unsignedInteger('id_country');

    $table->foreign('id_country')->references('id_country')->on('country')->onDelete('cascade');

    $table->timestamps();

});