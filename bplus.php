<?php

class Node {
    public $key = array();
    public $ptr = array();
    public $isLeaf;
    public $size;

    public function __construct() {
        $this->key = array_fill(0, 4, null);
        $this->ptr = array_fill(0, 5, null);
        $this->isLeaf = false;
        $this->size = 0;
    }
}

class BPlusTree {
    public $root;
    public $bucketSize;

    public function __construct($bucketSize) {
        $this->root = null;
        $this->bucketSize = $bucketSize;
    }

    public function insertInternal($x, $current, $ptr) {
        $i = $current->size - 1;

        while ($i >= 0 && $current->key[$i] > $x) {
            $current->key[$i + 1] = $current->key[$i];
            $current->ptr[$i + 2] = $current->ptr[$i + 1];
            $i--;
        }

        $current->key[$i + 1] = $x;
        $current->ptr[$i + 2] = $ptr;
        $current->size++;
    }

    public function insert($x) {
        if ($this->root === null) {
            $this->root = new Node();
            $this->root->key[0] = $x;
            $this->root->isLeaf = true;
            $this->root->size = 1;
        } else {
            $current = $this->root;
            $parent = null;

            while ($current->isLeaf === false) {
                $parent = $current;

                for ($i = 0; $i < $current->size; $i++) {
                    if ($x < $current->key[$i]) {
                        $current = $current->ptr[$i];
                        break;
                    }

                    if ($i === $current->size - 1) {
                        $current = $current->ptr[$i + 1];
                        break;
                    }
                }
            }

            if ($current->size < $this->bucketSize) {
                $i = 0;

                while ($x > $current->key[$i] && $i < $current->size) {
                    $i++;
                }

                for ($j = $current->size; $j > $i; $j--) {
                    $current->key[$j] = $current->key[$j - 1];
                }

                $current->key[$i] = $x;
                $current->size++;
                $current->ptr[$current->size] = $current->ptr[$current->size - 1];
                $current->ptr[$current->size - 1] = null;
            } else {
                $newLeaf = new Node();
                $tempNode = array();

                for ($i = 0; $i < $this->bucketSize; $i++) {
                    $tempNode[$i] = $current->key[$i];
                }

                $i = 0;

                while ($x > $tempNode[$i] && $i < $this->bucketSize) {
                    $i++;
                }

                for ($j = $this->bucketSize + 1; $j > $i; $j--) {
                    $tempNode[$j] = $tempNode[$j - 1];
                }

                $tempNode[$i] = $x;
                $newLeaf->isLeaf = true;
                $current->size = ceil($this->bucketSize / 2);
                $newLeaf->size = floor($this->bucketSize / 2);

                for ($i = 0; $i < $current->size; $i++) {
                    $current->key[$i] = $tempNode[$i];
                }

                for ($i = 0, $j = $current->size; $i < $newLeaf->size; $i++, $j++) {
                    $newLeaf->key[$i] = $tempNode[$j];
                }

                $newLeaf->ptr[$newLeaf->size] = $current->ptr[$current->size];
                $current->ptr[$current->size] = $newLeaf;

                if ($current === $this->root) {
                    $newRoot = new Node();
                    $newRoot->key[0] = $newLeaf->key[0];
                    $newRoot->ptr[0] = $current;
                    $newRoot->ptr[1] = $newLeaf;
                    $newRoot->isLeaf = false;
                    $newRoot->size = 1;
                    $this->root = $newRoot;
                } else {
                    $this->insertInternal($newLeaf->key[0], $parent, $newLeaf);
                }
            }
        }
    }
}

// Read flight IDs from indexp.txt
$flightIDs = array();
$indexFile = fopen("indexp.txt", "r");

if ($indexFile) {
    while (($line = fgets($indexFile)) !== false) {
        $values = explode(" ", $line);
        $flightID = intval($values[0]);
        $flightIDs[] = $flightID;
    }

    fclose($indexFile);
} else {
    echo "Failed to open indexp.txt file.";
    exit();
}

// Construct the B+ tree
$tree = new BPlusTree(4);

foreach ($flightIDs as $flightID) {
    $tree->insert($flightID);
}

// HTML and CSS content
echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>B+ Tree</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 800px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        .tree {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .node {
            border: 1px solid #333;
            padding: 10px;
            margin: 10px;
        }

        .leaf {
            background-color: #F0F0F0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>B+ Tree Visualization</h1>
        <div class="tree">
HTML;

// Function to recursively generate the HTML representation of the B+ tree nodes
function generateHTML($node) {
    $html = '<div class="node';

    if ($node->isLeaf) {
        $html .= ' leaf';
    }

    $html .= '">';

    for ($i = 0; $i < $node->size; $i++) {
        $html .= '<span>' . $node->key[$i] . '</span>';
    }

    if (!$node->isLeaf) {
        for ($i = 0; $i <= $node->size; $i++) {
            if ($node->ptr[$i] !== null) {
                $html .= generateHTML($node->ptr[$i]);
            }
        }
    }

    $html .= '</div>';

    return $html;
}

// Generate the HTML representation of the B+ tree
if ($tree->root !== null) {
    echo generateHTML($tree->root);
}

echo <<<HTML
        </div>
    </div>
</body>
</html>
HTML;
