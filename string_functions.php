<?php 
# substr()
$output =substr("hello",1,3);
echo $output;
$output = strpos("hello world",'o');
$output = strrpos();
#strlen()
#strpos() --first occurence of a sub striing 
#strrpos() --last occurence of a sub striing
#trim()--white space 
#ucwords() -- capitalze 1st character of each word
#str_replace("word","replaceword",$searchstirng)
#isstring($name)
    #  1 for string
    #   0 for nos

#strtoupper()
#strtolower()
#str
$values = array(true,false,null,'abc','33');
foreach($values as $value){
    if(is_string($value)){
        echo"{$value};
    };
};
$string = 'dsfdgs tyhr osfjskj sdfj';
$compressed = gzcompress($string);
echo $compressed;
?>
