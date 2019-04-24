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
        $module = factory('App\Module')->create();
        $labtest = new LabTest();
        $labtest->name = 'Sodium';
        $labtest->shortname = 'NA';
        $labtest->module_id = 1;

        $labtest->save();

        $this->assertDatabaseHas('lab_tests',[
            'name' => 'Sodium',
            'shortname' => 'NA'
        ]);
    }

    /**
     * @test
     */
    public function it_should_belong_to_modules()
    {   $module = factory('App\Module')->create();
        $labtests = factory('App\LabTest', 10)->create(['module_id'=>$module->id]);
        $first = $labtests->first();

        $this->assertEquals($module->id, $first->module_id);

    }
}
