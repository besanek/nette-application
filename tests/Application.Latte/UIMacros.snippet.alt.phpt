<?php

/**
 * Test: general snippets test.
 */

use Nette\Utils\Html,
	Nette\Bridges\ApplicationLatte\UIMacros,
	Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$latte = new Latte\Engine;
UIMacros::install($latte->getCompiler());

Assert::matchFile(
	__DIR__ . '/expected/UIMacros.snippet.alt.phtml',
	$latte->compile(__DIR__ . '/templates/snippet.alt.latte')
);
