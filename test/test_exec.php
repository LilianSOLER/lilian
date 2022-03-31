<?php 
$output = null;
$retvall = null;
exec('ls -l', $output, $retvall);
echo "Returned with status $retval and output:\n";
print_r($output);