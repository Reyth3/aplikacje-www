<?php
 $dir = 'art';
 
 if (file_exists($dir) && is_dir($dir) ) {
   
     $scan_arr = scandir($dir);
     $files_arr = array_diff($scan_arr, array('.','..') );
     $sorted_files = array();
     foreach($files_arr as $file)
     {
        $time = filectime($dir."/".$file);
        $sorted_files[$time] = $file;
     }
     ksort($sorted_files);
     foreach ($sorted_files as $time => $file) {
       //Get the file path
       $file_path = $dir."/".$file;
       // Get the file extension
       $file_ext = pathinfo($file_path, PATHINFO_EXTENSION);
       if (strtolower($file_ext) == "html") {
        $date = pathinfo($file_path);   
        $file = fopen($file_path, "r");
        $art = fread($file, filesize($file_path));
        echo ($art);
       }
     }
 }
 else {
   echo "Dorectory does not exists";
 }
?>