<?php

require __DIR__ . '/../vendor/autoload.php';

use Science\Lists\LinkedList;

$list = new LinkedList();

foreach(range(1,10) as $val) {
    $list->insert($val);
}


function recurseListReverse($node) {
    if ($node == null)
        return;
    elseif ($node->next == null)
        echo $node->value . "\n";
    else
    {
        recurseListReverse($node->next);
        echo $node->value. "\n";
    }
}

function reverseListSwap($list) {
    $cur = $list->head;
    $next = $cur->next;
    $cur->next = null;
    while($next != null) {
        $tmp = $next->next;
        $next->next = $cur;
        $cur = $next;
        $next = $tmp;
    }
    $list->head = $cur;
}

echo 'Recursive List in Reverse' . "\n";
recurseListReverse($list->head);

echo 'Swap List in Reverse' . "\n";
reverseListSwap($list);
$node = $list->head;
while($node != null) {
    echo $node->value . "\n";
    $node = $node->next;
}
