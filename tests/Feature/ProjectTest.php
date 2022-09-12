<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Book;

class ProjectTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

      /** @test */
    public function index_get()
    {
        $this->withoutExceptionHandling();
        $response = $this->getJson('/api/index');
        $response->assertOk();
       
        
    }

    /** @test */
    public function paginate_get()
    {
        $this->withoutExceptionHandling();
        $response = $this->getJson('/api/paginate');
        $response->assertOk();
       
        
    }

    /** @test */
    public function store_post()
    {
        $this->withoutExceptionHandling();
        $response = $this->postJson('/api/store',[

            'title' => 'Test title',
            'description' => 'Test description',
            'url' => 'Test url',
            'year_published' => '1',
            'editorial' => 'Test editorial',
            'available' => '1'

        ]);
        $response->assertOk();
        

        
    }
   
}
