<?php

namespace Tests\Feature;

use Auth;
use Tests\TestCase;
use App\LabTest;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LabTestControllerTest extends TestCase
{
    use WithoutMiddleware, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_should_return_all_lab_tests_when_accessing_tests_route()
    {

        factory('App\Module', 5)->create()->each(function($u){
            $u->labtests()->save(factory('App\LabTest')->make());
        });

        $tests = LabTest::all();
        $response = $this->json('GET', '/api/tests');

        $response->assertStatus(200)->assertExactJson($tests->toArray());
    }

    /**
     * @test
     */
    public function it_should_be_able_to_store_tests() {
        $module = factory('App\Module')->create();
        $newTest = factory('App\LabTest')->make(['module_id'=>$module->id]);

        
       $response = $this->json('POST', '/api/tests', $newTest->toArray());

       $response->assertStatus(201);
    }

    /**
     * @test
     */
    public function it_should_show_labtest_if_requested() {
        $module = factory('App\Module')->create();
        $labtest = factory('App\LabTest',10)->create(['module_id'=>$module->id]);
        
        $response = $this->json('GET', '/api/tests/' . $labtest->first()->id);
        
        $response->assertJson($labtest->first()->toArray());
    }
}
