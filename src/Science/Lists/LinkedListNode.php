<?php

namespace Science\Lists;

class LinkedListNode {

    var $value = null;
    var $next = null;

    function __construct($val) {
        $this->value = $val;
    }

}