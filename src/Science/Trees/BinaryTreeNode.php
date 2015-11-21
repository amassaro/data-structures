<?php
namespace Science\Trees;

class BinaryTreeNode {
    var $data = null;
    var $left = null;
    var $right = null;

    function __construct($val) {
        $this->data = $val;
    }
}