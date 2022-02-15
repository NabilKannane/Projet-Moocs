<?php
/*
function listFolderFiles($dir){
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);

    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;

$i=0;
    foreach($ffs as $ff){
$i++;
        $file[] = $ff;
        if(is_dir($dir.'/'.$ff)){ $sous_file[$i] = listFolderFiles($dir.'/'.$ff);
       $file[$ff] = $sous_file[$i]; 
        }

    }

    return $file;
}

$tab_files=listFolderFiles('./moocs/');

echo json_encode($tab_files);


*/

function listFolderFiles($dir){
    $data = array();
    $list = scandir($dir);
    foreach($list as $li)
    {
        if (strcmp($li,".") <> 0 && strcmp($li,"..") <> 0 ){
            if (is_dir($dir.$li))
                $data[$li] = listFolderFiles($dir.$li."/");
            else{
                $file = substr($li, -4);
                if(!strcasecmp((strtolower($file)),'.mp4')){
                    $data[$li] = $li;
                }
            }      
        }
    }
    return $data;
}
echo json_encode(listFolderFiles('./moocs/'));

?>