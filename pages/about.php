<section class="sadrzaj">
<h1>About</h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a type 
specimen book. It has survived not only five centuries, but also the leap into 
electronic typesetting, remaining essentially unchanged. It was popularised in 
the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software like Aldus PageMaker including 
versions of Lorem Ipsum.
</p>
<p>
It is a long established fact that a reader will be distracted by the readable 
content of a page when looking at its layout. The point of using Lorem Ipsum is 
that it has a more-or-less normal distribution of letters, as opposed to using 
'Content here, content here', making it look like readable English. Many desktop 
publishing packages and web page editors now use Lorem Ipsum as their default 
model text, and a search for 'lorem ipsum' will uncover many web sites still in 
their infancy. Various versions have evolved over the years, sometimes by accident, 
sometimes on purpose (injected humour and the like).
</p>

<p>There are Sub About pages</p>
<a href="?page=about&id=hightech">HighTech</a><br />
<a href="?page=about&id=zdroid">ZDroid</a><br />
<a href="?page=about&id=rootwalker">RootWalker</a>

<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
//$id = $_GET['id'];



if ($id == 'hightech') { 
	echo '<p>Autor: <em>hightech</em>. Objavljeno: <time pubdate="2013-03-02">2013-03-02</time></p>';
	echo '<h4>HighTech<br />====</h4>';
	echo '<p>test</p>'; 
}

else if ($id == 'zdroid') { 
	echo '<p>Autor: <em>ZDroid</em>. Objavljeno: <time pubdate="2013-03-02">2013-03-02</time></p>';
	echo '<h4>ZDroid<br />=======</h4>';
	echo '<p>Ovo je naš prvi post :)<br />Za CLI art (crtanje u terminalu) možete koristiti program figlet.</p>
	<pre><code><span>#</span> apt-get install figlet</code></pre>
	<p>Za više informacija posetite<a href="http://www.figlet.org"> http://www.figlet.org</a>.<br /><br /><em>***</em></p>'; 
}

else if ($id == 'rootwalker') { 
	echo '<p>Autor: <em>rootwalker</em>. Objavljeno: <time pubdate="2013-03-02">2013-03-02</time></p>';
	echo '<h4>RootWalker<br />====</h4>';
	echo '<p>test broj 2 idemo</p>'; 
}

else { echo '<h3>Journal</h3><h4>Default<br />=======</h4>'; echo '<marquee>Nije znanje znanje znati, vec je znanje znanje dati</marquee> ';}



?>
</section>