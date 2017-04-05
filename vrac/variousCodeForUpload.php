
<?php
    $old = getcwd(); // Save the current directory
    chdir($path_to_file);
    unlink($filename);
    chdir($old); // Restore the old working directory   
?>

<?php
// ggarciaa at gmail dot com (04-July-2007 01:57)
// I needed to empty a directory, but keeping it
// so I slightly modified the contribution from
// stefano at takys dot it (28-Dec-2005 11:57)
// A short but powerfull recursive function
// that works also if the dirs contain hidden files
//
// $dir = the target directory
// $DeleteMe = if true delete also $dir, if false leave it alone

function SureRemoveDir($dir, $DeleteMe) {
    if(!$dh = @opendir($dir)) return;
    while (false !== ($obj = readdir($dh))) {
        if($obj=='.' || $obj=='..') continue;
        if (!@unlink($dir.'/'.$obj)) SureRemoveDir($dir.'/'.$obj, true);
    }

    closedir($dh);
    if ($DeleteMe){
        @rmdir($dir);
    }
}

//SureRemoveDir('EmptyMe', false);
//SureRemoveDir('RemoveMe', true);

?>
<?php
function deleteDirectory($dir){
    $result = false;
    if ($handle = opendir("$dir")){
        $result = true;
        while ((($file=readdir($handle))!==false) && ($result)){
            if ($file!='.' && $file!='..'){
                if (is_dir("$dir/$file")){
                    $result = deleteDirectory("$dir/$file");
                } else {
                    $result = unlink("$dir/$fich");
                }
            }
        }
        closedir($handle);
        if ($result){
            $result = rmdir($dir);
        }
    }
    return $result;
}

?>