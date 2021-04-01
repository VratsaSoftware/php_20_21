<?php
$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities( $str );

// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities( $str, ENT_QUOTES );



// The 'ENT_QUOTES' option doesn't protect you against javascript evaluation in certain tag's attributes, like the 'href' attribute of the 'a' tag. When clicked on the link below, the given JavaScript will get executed:

$_GET['a'] = 'javascript:alert(document.cookie)';
$href = htmlEntities($_GET['a'], ENT_QUOTES);
print "<a href='$href'>link</a>"; # results in: <a href='javascript:alert(document.cookie)'>link</a>