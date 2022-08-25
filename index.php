<?php

require __DIR__ . '/kirby/bootstrap.php';

#New method listed in updated kirby, not sure if it works
#require 'kirby/bootstrap.php';

echo (new Kirby)->render();
