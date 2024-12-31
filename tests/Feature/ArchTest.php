<?php

test('debug functions')
    ->expect(['dump', 'dd', 'ds'])
    ->not->toBeUsed();
