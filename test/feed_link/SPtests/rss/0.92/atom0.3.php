<?php

$data = <<<EOD
<rss version="0.92" xmlns:a="http://purl.org/atom/ns#">
	<channel>
		<a:link href="http://example.com/"/>
	</channel>
</rss>
EOD;

$expected = 'http://example.com/';

?>