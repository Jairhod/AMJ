<?php

$dir = 'test1';
$leave_files = array('124.jpg', '123.png');

foreach( glob("$dir/*") as $file ) {
    if( !in_array(basename($file), $leave_files) )
        unlink($file);
}