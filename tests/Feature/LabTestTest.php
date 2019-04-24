<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\LabTest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LabTestTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_should_have_a_name_and_short_name()
    {
        $labtest = new LabTest();
        $labtest->name = 'Sodium';
        $labtest->shortname = 'NA';

        $labtest->save();

        $this->assertDatabaseHas('lab_tests',[
            'name' => 'Sodium',
            'shortname' => 'NA'
        ]);
    }
}
