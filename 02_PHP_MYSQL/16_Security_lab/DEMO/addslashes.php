<?php 

$string = "It's a simple string";

echo addslashes( $string );

$wp_string = '<p class="para rdfs-comment">Returns a string with backslashes added before characters that need to be escaped. These characters are:</p>
<ul class="simplelist">
 	<li class="member">single quote (<code class="literal">\'</code>)</li>
 	<li class="member">double quote (<code class="literal">"</code>)</li>
 	<li class="member">backslash (<code class="literal">\</code>)</li>
 	<li class="member">NULL (the NULL byte)</li>
</ul>
<p class="para">A use case of <span class="function"><strong>addslashes()</strong></span> is escaping the aforementioned characters in a string that is to be evaluated by PHP:</p>';

echo $wp_string;