<h1>目前的問卷 
    <a class="btn btn-outline-success rounded" href="?do=add_subject_form">
    <i class="fas fa-plus"></i> 建立新問卷</a>
</h1>
<?php
$subjects=all('topics');
echo "<ol class='list-group'>";
foreach ($subjects as $key => $value) {
    
    echo "<li class='list-group-item'>";
    //題目
    echo "<a class='d-inline-block col-md-6' href='index.php?do=vote&id={$value['id']}'>";
    echo $value['topic'];
    echo "</a>";
    
    //總投票數顯示
    $count=q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
    echo "<span class='d-inline-block col-md-1 text-center'>";
    echo $count[0]['總計'];
    echo "</span>";
    
    
    // 問卷開關
    echo "<a href='../api/change_status_topics.php?id={$value['id']}'>";
    echo ($value['sh']==1)?"顯示中":"未上架";
    echo "</a>";
    
    //管理題目
    echo "<a href='?do=edit_subject&id={$value['id']}' class='d-inline-block col-md-1 text-center'>";
    echo "<button class='btn btn-outline-success rounded'>管理</button>";
    echo "</a>";

    
    //看結果按鈕
    echo "<a href='../index.php?do=vote_result&id={$value['id']}' class='d-inline-block col-md-2 text-center'>";
    echo "<button class='btn btn-outline-info'>觀看結果</button>";
    echo "</a>";
    
  }
  echo "</li>";
  echo "</ol>";
  
  
?>