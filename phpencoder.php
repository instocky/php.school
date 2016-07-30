<?php

echo "<tt><h2>START</h2>"; $colors = array("darkred", "limegreen", "dodgerblue", "darkviolet"); for($i=1;$i<=50;$i++) { echo '<b style="color:'.$colors[mt_rand(0,3)].'">'.$i.". test of the obfuscator</b><br>"; } echo '<h2>END</h2>';
