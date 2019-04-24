<?php

namespace App\Generators;

class LabTestFakerGenerator {

    private $name;

    private $shortname;

    private $tests = [
        'Sodium' => 'Na',
        'Potassium' => 'K',
        'Chloride' => 'Cl',
        'Urea Nitrogen' => 'BUN',
        'Creatinine' => "Cr",
        'B-Type Naturetic Peptide' => "BNP"
    ];

    function __construct() {
        $this->init();
    }

    public function init() {
        $key
         = array_rand($this->tests);
        $value = $this->tests[$key];
        $this->setName($key);
        $this->setShortName($value);
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function setShortName($value) {
        $this->shortname = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function getShortName() {
        return $this->shortname;
    }

    public function getTests() {
        return $this->tests;
    }

}