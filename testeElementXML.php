<?php

// $doc = new DOMDocument;

// $node = $doc->createElement("para", "Teste");
// $filho = $doc->createElement("para2", "Teste2");

// $doc->appendChild($node);

// $node->appendChild($filho);


// echo $doc->saveXML();




// $doc = new DOMDocument();
// $doc->loadXML("<foobar><bar/><foo/></foobar>");
// $bar = $doc->documentElement->firstChild;
// $foo = $doc->documentElement->lastChild;
// $foo->appendChild($bar);
// print $doc->saveXML();




$xml = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<body>
	Cão
</body>
XML;

/*$xml = <<<XML
<?xml version='1.0' encoding='utf-8' ?>
<root>
    <node />
</root>
XML;*/


// $xml = "<root>
//     <node />
// </root>";



// $doc = new DOMDocument();
    
//     $doc->loadXML($xml);
    
//     $foo = $doc->createElement("foo");
//     $doc->appendChild($foo);

//     $bar = $doc->createElement("bar", 'teste');
//     $foo->appendChild($bar);

    /*$bazz = $doc->createElement("bazz", 'Jack');
    $foo->appendChild($bazz);*/

    /*$bazz = $doc->createElement("bazz", 'Jack');
    $foo->appendChild($bazz);*/


//     $foo = $doc->createElement("foe");
//     $doc->appendChild($foo);

//     $bazz = $doc->createElement("bazz", 'Jack');
//     $foo->appendChild($bazz);


//     foreach ($doc->getElementsByTagName('bazz') as $node) {
// 		echo $node->getNodePath() . "\n";
// 	}


//     echo $doc->saveXML();

//     echo "
// <br>
// ";

//     echo $doc->getElementsByTagName('body')->item(0)->getLineNo();



$d = new DOMDocument('1.0');
$d->loadXML('<foo></foo>');
$n = $d->createElement('bar');
var_dump($n->C14N());
$d->documentElement->appendChild($n);
var_dump($n->C14N());
echo "
";
echo $n->C14N();


?>