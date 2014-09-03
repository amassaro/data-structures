<?php

namespace Science\Lists;

class LinkedListNode {

    use NextTrait;

    var $value = null;

    function __construct($val) {
        $this->value = $val;
    }

}