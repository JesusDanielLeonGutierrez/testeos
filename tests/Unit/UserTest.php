<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function test_a_basic_request_post()
    // {
    //     $response = $this->post(
    //         '/api/client',
    //         [
    //             'name' => 20,
    //             'due' => 23.00,
    //             'comments' => 'comentario desde el test'
    //         ]
    //     );
    //     $response->assertStatus(200);
    //     $response->dd();
    // }

    // public function test_a_basic_request_get()
    // {
    //     $response = $this->get(
    //         '/api/client'
    //     );
    //     $response->assertStatus(200);
    //     $response->dd();
    // }

    // public function test_a_basic_request_put()
    // {
    //     $response = $this->put(
    //         '/api/client/7',
    //         [

    //             'name' => 'juan',
    //             'due' => 53.00,
    //             'comments' => 'comentario desde '
    //         ]
    //     );
    //     $response->assertStatus(200);
    //     $response->dd();
    // }

    public function test_a_basic_request_delete()
    {
        $response = $this->delete(
            '/api/client/7'
        );
        $response->assertStatus(200);
        $response->dd();
    }
}
