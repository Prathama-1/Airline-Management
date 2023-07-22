<!DOCTYPE html>
<html>
<head>
	<title>User Found</title>
</head>
<style>
	div {
		width: 80%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 10%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid #009999;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
		
	}
	body  {
	  	background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
</style>
<body>
<h1 style = "text-align: center;"> B+ Tree </h1>
<div style="background-color: #f2f2f2;">


<?php
/*
  Php Program 
  Implement B Plus Tree Implement
*/
// Define tree node
class TreeNode
{
	public $isLeaf;
	public $keys;
	public $count;
	public $child;
	public function __construct($degree)
	{
		$this->isLeaf = false;
		$this->count = 0;
		$this->keys = array_fill(0, $degree, 0);
		$this->child = array_fill(0, $degree + 1, NULL);
		// Set initial child
		for ($i = 0; $i <= $degree; ++$i)
		{
			$this->child[$i] = NULL;
		}
	}
}
// Define tree structure
class BPTree
{
	public $root;
	public $degree;
	public function __construct($degree)
	{
		$this->degree = $degree;
		$this->root = NULL;
	}
	public function findParent($cursor, $child)
	{
		$parent = NULL;
		if ($cursor->isLeaf == true || ($cursor->child[0]).isLeaf == true)
		{
			return NULL;
		}
		for ($i = 0; $i < $cursor->count + 1; $i++)
		{
			if ($cursor->child[$i] == $child)
			{
				$parent = $cursor;
				return $parent;
			}
			else
			{
				$parent = $this->findParent($cursor->child[$i], $child);
				if ($parent != NULL)
				{
					return $parent;
				}
			}
		}
		return $parent;
	}
	public function insertInternal($x, $cursor, $child)
	{
		$i = 0;
		$j = 0;
		if ($cursor->count < $this->degree)
		{
			while ($x > $cursor->keys[$i] && $i < $cursor->count)
			{
				$i++;
			}
			for ($j = $cursor->count; $j > $i; $j--)
			{
				$cursor->keys[$j] = $cursor->keys[$j - 1];
			}
			for ($j = $cursor->count + 1; $j > $i + 1; $j--)
			{
				$cursor->child[$j] = $cursor->child[$j - 1];
			}
			$cursor->keys[$i] = $x;
			$cursor->count++;
			$cursor->child[$i + 1] = $child;
		}
		else
		{
			$newInternal = new TreeNode($this->degree);
			$virtualKey = array_fill(0, $this->degree + 1, 0);
			$virtualPtr = array_fill(0, $this->degree + 2, NULL);
			for ($i = 0; $i < $this->degree; $i++)
			{
				$virtualKey[$i] = $cursor->keys[$i];
			}
			for ($i = 0; $i < $this->degree + 1; $i++)
			{
				$virtualPtr[$i] = $cursor->child[$i];
			}
			$i = 0;
			while ($x > $virtualKey[$i] && $i < $this->degree)
			{
				$i++;
			}
			for ($j = $this->degree + 1; $j > $i; $j--)
			{
				$virtualKey[$j] = $virtualKey[$j - 1];
			}
			$virtualKey[$i] = $x;
			for ($j = $this->degree + 2; $j > $i + 1; $j--)
			{
				$virtualPtr[$j] = $virtualPtr[$j - 1];
			}
			$virtualPtr[$i + 1] = $child;
			$newInternal->isLeaf = false;
			$cursor->count = (int)(($this->degree + 1) / 2);
			$newInternal->count = $this->degree - (int)(($this->degree + 1) / 2);
			for ($i = 0, $j = $cursor->count + 1; $i < $newInternal->count;
                 $i++, $j++)
			{
				$newInternal->keys[$i] = $virtualKey[$j];
			}
			for ($i = 0, $j = $cursor->count + 1; $i < $newInternal->count + 1;
                 $i++, $j++)
			{
				$newInternal->child[$i] = $virtualPtr[$j];
			}
			if ($cursor == $this->root)
			{
				$this->root = new TreeNode($this->degree);
				$this->root->keys[0] = $cursor->keys[$cursor->count];
				$this->root->child[0] = $cursor;
				$this->root->child[1] = $newInternal;
				$this->root->isLeaf = false;
				$this->root->count = 1;
			}
			else
			{
				$this->insertInternal($cursor->keys[$cursor->count], 
                                      $this->findParent($this->root, $cursor),
                                      $newInternal);
			}
		}
	}
	// Handles the request to add new node in B+ tree
	public function insert($x)
	{
		if ($this->root == NULL)
		{
			// Add first node of tree
			$this->root = new TreeNode($this->degree);
			$this->root->isLeaf = true;
			$this->root->count = 1;
			$this->root->keys[0] = $x;
		}
		else
		{
			// Loop controlling variables
			$i = 0;
			$j = 0;
			$cursor = $this->root;
			$parent = NULL;
			// Executes the loop until when cursor node is not leaf node
			while ($cursor->isLeaf == false)
			{
				// Get the current node
				$parent = $cursor;
				for ($i = 0; $i < $cursor->count; $i++)
				{
					if ($x < $cursor->keys[$i])
					{
						$cursor = $cursor->child[$i];
						break;
					}
					if ($i == $cursor->count - 1)
					{
						$cursor = $cursor->child[$i + 1];
						break;
					}
				}
			}
			if ($cursor->count < $this->degree)
			{
				$i = 0;
				while ($x > $cursor->keys[$i] && $i < $cursor->count)
				{
					$i++;
				}
				for ($j = $cursor->count; $j > $i; $j--)
				{
					$cursor->keys[$j] = $cursor->keys[$j - 1];
				}
				$cursor->keys[$i] = $x;
				$cursor->count++;
				$cursor->child[$cursor->count] = $cursor->child[$cursor->count - 1];
				$cursor->child[$cursor->count - 1] = NULL;
			}
			else
			{
				$newLeaf = new TreeNode($this->degree);
				$virtualNode = array_fill(0, $this->degree + 2, 0);
				for ($i = 0; $i < $this->degree; $i++)
				{
					$virtualNode[$i] = $cursor->keys[$i];
				}
				$i = 0;
				while ($x > $virtualNode[$i] && $i < $this->degree)
				{
					$i++;
				}
				for ($j = $this->degree + 1; $j > $i; $j--)
				{
					$virtualNode[$j] = $virtualNode[$j - 1];
				}
				$virtualNode[$i] = $x;
				$newLeaf->isLeaf = true;
				$cursor->count = (int)(($this->degree + 1) / 2);
				$newLeaf->count = $this->degree + 1 - (int)(($this->degree + 1) / 2);
				$cursor->child[$cursor->count] = $newLeaf;
				$newLeaf->child[$newLeaf->count] = $cursor->child[$this->degree];
				$cursor->child[$this->degree] = NULL;
				for ($i = 0; $i < $cursor->count; $i++)
				{
					$cursor->keys[$i] = $virtualNode[$i];
				}
				for ($i = 0, $j = $cursor->count; $i < $newLeaf->count; 
                     $i++, $j++)
				{
					$newLeaf->keys[$i] = $virtualNode[$j];
				}
				if ($cursor == $this->root)
				{
					$newRoot = new TreeNode($this->degree);
					$newRoot->keys[0] = $newLeaf->keys[0];
					$newRoot->child[0] = $cursor;
					$newRoot->child[1] = $newLeaf;
					$newRoot->isLeaf = false;
					$newRoot->count = 1;
					$this->root = $newRoot;
				}
				else
				{
					$this->insertInternal($newLeaf->keys[0], $parent, $newLeaf);
				}
			}
		}
	}
	// Print the elements of B+ tree elements
   // Print the elements of B+ tree elements with levels
   public function printNode($node)
   {
	   if ($node == NULL)
	   {
		   // When node is empty
		   return;
	   }
	   else
	   {
		   $queue = array(); // Create a queue for breadth-first search
		   array_push($queue, array($node, 0)); // Enqueue the root node with level 0
   
		   $currentLevel = 0; // Track the current level
   
		   while (!empty($queue))
		   {
			  
			   [$currentNode, $level] = array_shift($queue); // Dequeue a node and its level
   
			   if ($level > $currentLevel)
			   {
				   echo "<br><br>"; // Print a new line when entering a new level
				   $currentLevel = $level;
				   echo "Level " . $level . ": ";
			   }
   
			   if ($currentNode->isLeaf && $level != 0)
			   {
				   echo " => "; // Print separator after each leaf node
			   }
			   
   
			   $nodeCount = $currentNode->count;
			   for ($i = 0; $i < $nodeCount; $i++)
			   {
				   if ($currentNode->isLeaf == false)
				   {
					   // When node is not a leaf, enqueue its child nodes with the next level
					   array_push($queue, array($currentNode->child[$i], $level + 1));
				   }
   
				   echo "[" . $currentNode->keys[$i] . "] "; // Print the current node's keys
   $z=1;
				   if ($i == $nodeCount - 1 && $currentNode->isLeaf == false)
				   {
					   // When it's the last key of a non-leaf node, enqueue its rightmost child with the next level
					   array_push($queue, array($currentNode->child[$i + 1], $level + 1));
				   }
			   }
   
			   
		   }
	   }
   }

}

function main()
{
    // Create a new b+ tree with degree 4
    $tree = new BPTree(4);
    
    // Read the flight details from the text file
    $file = fopen('indexp.txt', 'r');
    while (($line = fgets($file)) !== false) {
        $flightDetails = explode('|', $line);
        $flightNumber = intval($flightDetails[0]);
        $tree->insert($flightNumber);
    }
    fclose($file);
    
    // Print Tree elements
    $tree->printNode($tree->root);
}

main();


?>
</div>
</body>
</html>