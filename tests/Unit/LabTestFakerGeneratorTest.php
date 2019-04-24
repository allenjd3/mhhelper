<?php

namespace Tests\Unit;

use App\Generators\LabTestFakerGenerator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LabTestFakerGeneratorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     */
    public function it_should_create_a_random_test_name_short_name_combination()
    {
        $labTestFakerGenerator = new LabTestFakerGenerator();
        $tests = $labTestFakerGenerator->getTests();

        $this->assertContains($labTestFakerGenerator->getShortName(), $tests);


    }

    
}
