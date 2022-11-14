<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('SHello %s!', $name);