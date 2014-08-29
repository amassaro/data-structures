<?php

require __DIR__ . '/../vendor/autoload.php';

use Science\Lists\LinkedList;

$list = new LinkedList();

foreach(range(1,1000) as $val) {
	$list->insert($val);
}


function recurseList($node) {
	if ($node->next == null)
		echo $node->value . "\n";
	else
	{
		recurseList($node->next);
		echo $node->value. "\n";
	}
}

recurseList($list->head);

