<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\LabTest;
use Faker\Generator as Faker;
use App\Generators\LabTestFakerGenerator;

$factory->define(LabTest::class, function (Faker $faker) {
    $labTestFakerGenerator = new LabTestFakerGenerator();
    return [
        'name' =>   $labTestFakerGenerator->getName(),
        'shortname' => $labTestFakerGenerator->getShortName(),
    ];
});
