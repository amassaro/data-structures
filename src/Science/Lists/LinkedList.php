<?php

namespace Science\Lists;

class LinkedList {

	var $head = null;

	function insert($val) {

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

}