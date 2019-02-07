<?php

use \Fuel\Core\Route;

return array(
  // user
  'api/v1/users' => [
    ['GET', new Route('user/data')],
    ['POST', new Route('user/data')]
  ],
  'api/v1/users/:id' => [
    ['GET', new Route('user/data/$1')],
    ['PUT', new Route('user/data/$1')],
    ['DELETE', new Route('user/data/$1')]
  ]
);
