<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testLogin(){
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testMahasiswaDashboard(){
        $response = $this->withSession(['niuser' => '72180253'])->get('/mahasiswa');
        $response->assertStatus(200);
    }
}
