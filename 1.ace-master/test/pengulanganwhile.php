<!DOCTYPE html>
<html>
<head>
	<title> Pengulangan while 1</title>
</head>
<body>

	Contoh pengulangan while 1:<br>
	<!-- HTML generated using hilite.me -->
<div style="background: #ffffff; overflow:auto;width:500px;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span>
<span style="color: #557799">$i=1;</span>
<span style="color: #557799">while ($i &lt;= 10)</span>
<span style="color: #557799">{</span>
<span style="color: #557799">  echo &quot;$i&quot;;</span>
<span style="color: #557799">  echo &quot;&lt;br /&gt;&quot;;</span>
<span style="color: #557799">  $i=$i+1;</span>
<span style="color: #557799">}</span>
<span style="color: #557799">?&gt;</span>
</pre></div>

<?php
$i=1;
while ($i <= 10)
{
  echo "$i";
  echo "<br />";
  $i=$i+1;
}
?>
<h1><p>Contoh pengulangan while yang lain</p></h1>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:400px;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span>
<span style="color: #557799">$i=1;</span>
<span style="color: #557799">while ($i &lt;= 10)</span>
<span style="color: #557799">{</span>
<span style="color: #557799">  echo &#39;&lt;strong&gt; Hi&lt;/strong&gt;&lt;br /&gt;&#39;;</span>
<span style="color: #557799">  echo &quot;&lt;br /&gt;&quot;;</span>
<span style="color: #557799">  $i=$i+1;</span>
<span style="color: #557799">}</span>
<span style="color: #557799">?&gt;</span>
</pre></div>

<?php
$i=1;
while ($i <= 10)
{
  echo '<strong> Hi</strong><br />';
  echo "<br />";
  $i=$i+1;
}
?>
<h1><p>Contoh pengulangan while yang lain,mabokin aja</p></h1>
<!-- HTML generated using hilite.me -->
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span>
<span style="color: #557799">$i=1;</span>
<span style="color: #557799">while ($i &lt;= 10)</span>
<span style="color: #557799">{</span>
<span style="color: #557799">  echo &#39;&lt;strong&gt; Hi&lt;/strong&gt;&lt;br /&gt;&#39;;</span>
<span style="color: #557799">  echo &quot;&lt;br /&gt;&quot;;</span>
<span style="color: #557799">  $i=$i+1;</span>
<span style="color: #557799">}</span>
<span style="color: #557799">?&gt;</span>
</pre></div>

<?php
$i=0;
while ($i < 10)
{
	$j=0;
	while ($j<6) {
		echo $j;
		$j++;
	}

	echo '<br />';
	$i++;
}
?>
</body>
</html>