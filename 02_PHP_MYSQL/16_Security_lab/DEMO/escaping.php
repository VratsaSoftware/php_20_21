<?php
$str = "A 'quote' is <b>bold</b>";
$script = '<script>document.location = "https://www.php.net/manual/en/function.password-hash.php"</script>';
echo $str;
// echo $script;
// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
// echo htmlentities( $str );
echo htmlentities( $script );

// // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
// echo htmlentities( $str, ENT_QUOTES );



// // The 'ENT_QUOTES' option doesn't protect you against javascript evaluation in certain tag's attributes, like the 'href' attribute of the 'a' tag. When clicked on the link below, the given JavaScript will get executed:

// $_GET['a'] = 'javascript:alert(document.cookie)';
// $href = htmlEntities($_GET['a'], ENT_QUOTES);
// print "<a href='$href'>link</a>"; # results in: <a href='javascript:alert(document.cookie)'>link</a>

$wp_string = '<p class="para rdfs-comment">Returns a string with backslashes added before characters that need to be escaped. These characters are:</p>
<ul class="simplelist">
 	<li class="member">single quote (<code class="literal">\'</code>)</li>
 	<li class="member">double quote (<code class="literal">"</code>)</li>
 	<li class="member">backslash (<code class="literal">\</code>)</li>
 	<li class="member">NUL (the NUL byte)</li>
</ul>
<p class="para">A use case of <span class="function"><strong>addslashes()</strong></span> is escaping the aforementioned characters in a string that is to be evaluated by PHP:</p>';

echo $wp_string;