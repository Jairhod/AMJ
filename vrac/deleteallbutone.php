    if (is_dir("assets/media/img/$folder/imagePrincipale")) 
      {
          $dir = 'assets/media/img/$folder/imagePrincipale';
          $leave_files = array($nameOK);

          foreach( glob("$dir/*") as $file ) {
              if( !in_array(basename($file), $leave_files) )
                  unlink($file);
          }  
      }