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
        $this->assertCount(1, Book::all());

        $post = Book::first();

        $this->assertEquals($post->title,'Test title' );
        $this->assertEquals($post->description,'Test description' );
        $this->assertEquals($post->url,'Test url' );
        $this->assertEquals($post->year_published,'1' );
        $this->assertEquals($post->editorial,'Test editorial' );
        $this->assertEquals($post->available,'1' );

        
    }
    
    /** @test */
    public function index_get()
    {
        $this->withoutExceptionHandling();
        $response = $this->getJson('/api/index');
        $response->assertOk();
       

        

        

        
    }
}
