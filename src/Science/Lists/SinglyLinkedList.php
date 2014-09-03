<?php

namespace Science\Lists;

class SinglyLinkedList {

    var $head = null;

    function insertHead($val) {

        $node = new LinkedListNode($val);
        $node->next = $this->head;
        $this->head = $node;

    }

    function insertTail($val) {

        $node = $this->head;

        if ($node == null)
            $this->head = new LinkedListNode($val);
        else {
            while($node != null) {

                if ($node->next == null) {
                    $node->next = new LinkedListNode($val);
                    break;
                }
                $node = $node->next;
            }
        }
    }

    function remove($val) {

        $prev = $node = $this->head;
        while($node != null) {
            if ($node->value == $val) {
                $prev->next = $node->next;
                if ($node == $this->head)
                    $this->head = $node->next;
                unset($node);
                return;
            }
            $prev = $node;
            $node = $node->next;
        }
    }

}