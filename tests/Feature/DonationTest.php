<?php

namespace Tests\Feature;

test('you can see the dono page')->get('/')->assertStatus(200);

test('a donator can donate money', function () {
   $response = $this->post('/donate', [
       'email' => 'brandon@eduance.io',
       'amount' => '4'
   ]);

   $response->assertStatus(200);
});
