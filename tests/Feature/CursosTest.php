<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;


class CursosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
//
    //Without Login
    public function testIndex()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

}
