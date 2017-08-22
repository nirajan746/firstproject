<?php
$a= array('apple','banana','papaya','plum','pears');
$b=count($a);
echo $b.'<br>';
for ($i=0;$i<$b;$i++)
{
    
    echo ($i+1).'.'. $a[$i].'<br>';
    
}

?>
