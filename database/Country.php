<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('country', function ($table) {

    $table->increments('id_country');

    $table->string('code');

    $table->string('name');

});