<?php

require __DIR__ . '/../vendor/autoload.php';

$tree = new Science\Trees\BinarySearchTree();
$tree->insert(5);
$tree->insert(15);
$tree->insert(1);
$tree->insert(4);
$tree->insert(8);
$tree->insert(1);
$tree->insert(10);
$tree->insert(6);
$tree->insert(16);
$tree->insert(21);
$tree->insert(2);

$tree->traverse(function($data) {
    //echo $data . "\n";
});

echo $tree->findKthLargest($tree->root, 3)->data;