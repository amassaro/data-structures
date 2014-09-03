<?php

namespace Science\Lists;

class DoublyLinkedList {

    var $head = null;
    var $tail = null;

    function insertHead($val) {

        $node = new DoublyLinkedListNode($val);
        $node->next = $this->head;
        $this->head = $node;
        if ($this->tail == null)
            $this->tail = $node;
        else
            $node->next->prev = $node;
    }

    function insertTail($val) {

        $node = new DoublyLinkedListNode($val);
        $node->prev = $this->tail;
        $this->tail = $node;
        if ($this->head == null)
            $this->head = $node;
        else
            $node->prev->next = $node;
    }

    function remove($val) {

        $prev = $node = $this->head;
        while($node != null) {
            if ($node->value == $val) {
                $prev->next = $node->next;
                if ($node == $this->head)
                    $this->head = $node->next;
                elseif ($node == $this->tail)
                    $this->tail = $node;
                unset($node);
                return;
            }
            $prev = $node;
            $node = $node->next;
        }
    }

}