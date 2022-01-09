<h1 id="vote" style="opacity: 0%;">目前的問卷</h1>
<h1 class="text-center mb-5">投票投起來</h1>
<div class="container">
    <div class='row'>

        <?php

        $sub2 = all('topics', ['sh' => 1]);
        if (!empty($sub2)) {
            foreach ($sub2 as $key => $value) {
        ?>

                <!-- // 印出來之前要判斷有沒有選項
        // 給使用者看
        // >0 表示資料存在
        // =>fat arrow -->

                <?php
                if (rows('options', ['topic_id' => $value['id']]) > 1) {
                ?>


                    <!-- 題目<img src='../image/{$row['name']}'
                    echo "<img src='../image/{$row['name']}'
                                有登入的會員才能使用投票功能 -->
                    <div class="col-md-6 mb-5 d-flex justify-content-center">
                        <div class='card' style='width: 18rem'>

                            <?php
                            $rows = all('photo', ['topic_id' => $value['id'],'sh' => 1]);
                            if (!empty($rows)) {
                                foreach ($rows as $key => $row) {
                                    echo "<img class='card-img-top' src='./image/{$row['name']}' style='height: 250px;' alt='Card image cap'>";
                                }
                            } ?>
                            <div class='card-body'>
                    <?php
                    if (isset($_SESSION['user'])) {

                        // ?表示當前頁
                        echo "<a href='index.php?do=vote&id={$value['id']}'>";
                        echo $value['topic'];
                        echo "</a><br><br>";
                        echo "<a href='index.php?do=vote&id={$value['id']}' class='btn btn-purple mr-3'>投票去</a>";
                        echo "<a href='?do=vote_result&id={$value['id']}'>";
                    } else {

                        echo "<h5 class='card-title'>{$value['topic']}</h5>";
                        echo "<a class='btn btn-secondary text-white mr-3' data-toggle='modal' data-target='#myModal'>投票去</a>";
                        echo "<a href='?do=vote_result&id={$value['id']}'>";
                        // echo "<span class='d-inline-block col-md-8'>" . $value['topic'] . "</span>";
                    }
                    echo "<button class='btn btn-mocha'>觀看結果</button>";
                    echo "</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            }
        } else {
            echo "<div>目前沒有進行中的問卷";
        }
        echo "</div>"

                    ?>
                            </div>
                        </div>