<?php

namespace Tests\Feature;

test('you can see the dono page')->get('/donate')->assertStatus(200);

