<?php
$tdsurl = 'http://ya.ru';
echo '<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
location.replace("'.$tdsurl.'");
</script>
<noscript>
<meta http-equiv="refresh" content="0; url='.$tdsurl.'">
</noscript>
</head>
<body>
<a href="'.$tdsurl.'" rel="nofollow">Click to continue...</a>.
</body>
</html>';
