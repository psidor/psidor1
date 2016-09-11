<?php
#echo "this is php";
echo date('y-m-d h:i:s',time());
#passthru("raspistill -t 2000 -o image.jpg");
$output = shell_exec('raspistill -t 200 -o image.jpg');
#echo "<pre>$output</pre>";
echo '<img src="image.jpg" alt="" width="100%" />';
// to test changes
?>


