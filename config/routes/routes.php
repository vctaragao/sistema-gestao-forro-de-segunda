<?php

use App\Actions\RegisterNewClassroom;

$app->get('/', RegisterNewClassroom::class);
