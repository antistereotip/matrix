<section class="sadrzaj">
<h1>Contact</h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a type 
specimen book. It has survived not only five centuries, but also the leap into 
electronic typesetting, remaining essentially unchanged. It was popularised in 
the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software like Aldus PageMaker including 
versions of Lorem Ipsum.
</p>

<p>There are Sub Contact pages</p>
<a href="?page=contact&id=telefon">Telefon</a><br />
<a href="?page=contact&id=email">Email</a><br />

<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
//$id = $_GET['id'];



if ($id == 'telefon') { 
	echo '<p>Telefon: <em>mts</em> +38165 95 11 404 </p>';
	echo '<h4>HighTech<br />====</h4>';
	echo '<p>test</p>'; 
}


else if ($id == 'email') { 
	echo '<p>Email: <em>gmail</em> - milutingavrilovic@gmail.com</p>';
	echo '<h4>RootWalker<br />====</h4>';
	echo '<p>test broj 2 idemo</p>'; 
}

else { echo '<h3>Kontakt podaci</h3><h4>Default<br />=======</h4>'; echo '<marquee>Nije znanje znanje znati, vec je znanje znanje dati</marquee> ';}



?>

</section>