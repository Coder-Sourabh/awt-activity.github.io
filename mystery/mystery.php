
<?php
$q=$_GET['q'];
$xml=new DOMDocument();
$xml->load("mystery.xml");
$c1=$xml->getElementsByTagName('mystery');
$c2=$xml->getElementsByTagName('item');
foreach($c2 as $k)
{
	$name=$k->getElementsByTagName('name');
	$nm=$name->item(0)->nodeValue;
	$auth=$k->getElementsByTagName('auth');
	$p=$auth->item(0)->nodeValue;
	$desc=$k->getElementsByTagName('description');
	$d=$desc->item(0)->nodeValue;
	if($nm==$q)
	{
		echo"<br>Name=".$nm;
		echo"<br>author name=".$p;
		echo"<br>Catagory : mystery ";
		echo"<br> Summary <br>".$d;
	}
	
}

//name auth cat summ
?>	