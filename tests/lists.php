<?php

require __DIR__ . '/../vendor/autoload.php';

function reverseListRecursive($node) {
    if ($node == null)
        return;
    else
    {
        reverseListRecursive($node->next);
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

use Science\Lists\SinglyLinkedList;
use Science\Lists\DoublyLinkedList;


$list = new SinglyLinkedList();

foreach(range(1,10) as $val) {
    $list->insertTail($val);
}


echo 'Printing List in Order' . "\n";
$node = $list->head;
while($node != null) {
    echo $node->value . "\n";
    $node = $node->next;
}

echo 'Recursive List in Reverse' . "\n";
reverseListRecursive($list->head);

echo 'Swap List in Reverse' . "\n";
reverseListSwap($list);
$node = $list->head;
while($node != null) {
    echo $node->value . "\n";
    $node = $node->next;
}

unset($list);


$list = new SinglyLinkedList();

foreach(range(1,10) as $val) {
    $list->insertHead($val);
}

$list->remove(2);
$list->remove(4);

echo 'Printing List in Order' . "\n";
$node = $list->head;
while($node != null) {
    echo $node->value . "\n";
    $node = $node->next;
}

echo 'Recursive List in Reverse' . "\n";
reverseListRecursive($list->head);

echo 'Swap List in Reverse' . "\n";
reverseListSwap($list);
$node = $list->head;
while($node != null) {
    echo $node->value . "\n";
    $node = $node->next;
}


$list = new DoublyLinkedList();

foreach(range(1,10) as $val) {
    $list->insertTail($val);
}

$list->remove(3);
$list->remove(5);

echo 'Printing List in Order' . "\n";
$node = $list->head;
while($node != null) {
    echo $node->value . "\n";
    $node = $node->next;
}

echo 'Recursive List in Reverse' . "\n";
reverseListRecursive($list->head);

echo 'Swap List in Reverse' . "\n";
reverseListSwap($list);
$node = $list->head;
while($node != null) {
    echo $node->value . "\n";
    $node = $node->next;
}

