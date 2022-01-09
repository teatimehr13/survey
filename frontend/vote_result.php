<?php

$sql="select * 
      from `topics`,
           `options` 
      where `topics`.`id`=`options`.`topic_id` AND 
            `topics`.`id`='{$_GET['id']}'";

$rows=q($sql);
?>

<h1><?=$rows[0]['topic'];?></h1>

<ol class="list-group col-md mb-5" style="font-size:1.2rem" id="vote">
    <?php
    // print_r(array_column($rows,'count')) ;
    $final = array_column($rows,'count');
    $total = array_sum($final);
    // echo $result;
    foreach($rows as $row){
        $result =(1 / $total * $row['count'] *100) .'%';
        $figureOut = round($result,1);
       
        
        // echo $result;

        echo "<li class='list-group-item'>";
        echo "<span>{$row['opt']}</span>";
        // echo "<span class='badge badge-info float-right'>{$row['count']}</span>";
        echo "<div class='progress'>";
        echo "<div class='progress-bar progress-bar-striped progress-bar-animated bg-danger' role='progressbar' style='width: $figureOut%' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'>$figureOut %</div>";
        echo "</div>";
        echo "</li>";
    }

?>
<div class="text-right mt-4">
<h5>總投票數:<?=$total+100?> 票</h5>
</div>
</ol>
