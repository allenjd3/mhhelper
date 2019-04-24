<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Module;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModuleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_should_have_components()
    {
        $module = new Module();
        $module->number = 1027;

        $module->save();

        $this->assertDatabaseHas('modules', [
            'number'=> 1027
        ]);
    }
}
