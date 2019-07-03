<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HemperTest extends TestCase
{
    /** @test  */
    public function page_title_should_return_the_base_title_if_title_is_empty()
    {
    	//dd(page_title(''));
        $this->assertEquals('Laracarte - List of artisans',page_title(''));
    }

    /** @test  */
    public function page_title_should_return_the_correct_title_if_title_is_provided()
    {
    	//dd(page_title(''));
        $this->assertEquals('About | Laracarte - List of artisans',page_title('About'));
    }

    /** @test  */
    public function set_active_route_should_return_active__if_the_current_route_is_provided()
    {
    	$this->get(route('home'));
        $this->assertEquals('active',set_active_route('home'));
        $this->assertEquals('',set_active_route('about'));
    }
}
