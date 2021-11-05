<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\SidebarFolder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SidebarFolderTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(SidebarFolder::class);

        $component->assertStatus(200);
    }
}
