<?php

$comments = array('thanks', 'thankyou', 'good');
if(isset($_POST['comment'])){
    array_push($comments, $_POST['comment']);
}

foreach($comments as $com){
    echo $com . '</br>';
}




?>