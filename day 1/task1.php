<?php

if(file_exists('laptop')){
echo "file exist";
}else{
  
mkdir('laptop');
$file=dirname("laptop");
echo "file not exist";
}


?>