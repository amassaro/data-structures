<?php
namespace Science\Trees;

class BinarySearchTree {

    var $root = null;

    function insert($val) {
        if ($this->root == null) {
            $this->root = new BinaryTreeNode($val);
        }
        else
        {
            $this->internalInsert($this->root, $val);
        }
    }

    function traverse($callback) {

        if ($callback == null)
            return;
        $this->internalTraverse($this->root, $callback);

    }

    function findLargest($node) {

        if ($node == null)
            return null;

        if ($node->right != null) {
            return $this->findLargest($node->right);
        } else {
            return $node;
        }
    }

    function findKthLargest($node, $k) {
        $tmp = null;
        if ($node == null)
            return null;
        if ($node->right != null) {
            $tmp = $this->findKthLargest($node->right, $k);
        }
        $k--;
        if ($tmp == null && $k == 0) {
            return $node;
        }
        return $this->findKthLargest($node->left, $k);
    }

    function findSecondLargest($node) {

        if ($node == null)
            return null;

        if ($node->right == null) {
            echo 'search left: ' . $node->left->data;
            return $this->findLargest($node->left);
        }

        $tmp = $this->findLargest($node->right);

        if ($tmp->right == null) {
            echo 'search right, then left: ' . $node->left->data;
            if ($tmp->left != null)
                return $this->findLargest($tmp->left);
            else
                return $tmp;
        }
    }

    private function internalInsert($node, $val) {

        if ($node == null) {
            $node = new BinaryTreeNode($val);
        }

        if ($val < $node->data) {
            $node->left = $this->internalInsert($node->left, $val);
        }
        else if ($val > $node->data) {
            $node->right = $this->internalInsert($node->right, $val);
        }
        return $node;
    }

    private function internalTraverse($node, $callback) {
        if ($node == null) {
            return;
        }
        if ($node->left != null) {
            $this->internalTraverse($node->left, $callback);
        }
        $callback($node->data);
        if ($node->right != null) {
            $this->internalTraverse($node->right, $callback);
        }

    }
}