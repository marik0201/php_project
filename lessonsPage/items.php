<?php
    $host = "localhost";
    $database = "DBlog";
    $user = "mysql";
    $password = "mysql";
    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url)[1];

    $query_name = "SELECT post.`name`, post.`content`, COUNT(post_likes.`post_id`), post.`post_id` FROM `post` INNER JOIN `post_likes` ON post.`post_id` = post_likes.`post_id` WHERE post.`type` = 'lesson' GROUP BY post.`post_id` ORDER BY COUNT(post_likes.`post_id`) DESC";
    $result_name = mysqli_query($link, $query_name) or die("Ошибка " . mysqli_error($link));

    $query_name_language = "SELECT `name`, `content`, `likes`, `post_id` FROM `post` WHERE `type`='lesson' AND `language`= '$url'";
    $result_name_language = mysqli_query($link, $query_name_language) or die("Ошибка " . mysqli_error($link));

    if (isset($_GET[$url])){
        if($result_name_language)
        {
            $rows = mysqli_num_rows($result_name_language);
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result_name_language);
                echo "<div class='post'>";
                echo "<a href=/DBlog/lessonsPage/lessonPage.php?".$row[3].">";
                echo "<div class='post_headline'>";
                echo $row[0];
                echo "<div class='likes'><img src='https://img.icons8.com/ios/20/000000/hearts.png'>".$row[2]."</div>";
                echo "</div>";
                echo "<div class='post_content'>";
                echo $row[1];
                echo "</div>";
                echo "</a>";
		        echo "</div>";
            }
        }
    }
    else {
        if($result_name)
        {
            $rows = mysqli_num_rows($result_name);
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result_name);
                echo "<div class='post'>";
                echo "<a href=/DBlog/lessonsPage/lessonPage.php?".$row[3].">";
                echo "<div class='post_headline'>";
                echo $row[0];
                echo "<div class='likes'><img src='https://img.icons8.com/ios/20/000000/hearts.png'>".$row[2]."</div>";
                echo "</div>";
                echo "<div class='post_content'>";
                echo $row[1];
                echo "</div>";
                echo "</a>";
		        echo "</div>";
            }
        }
    }
    
    mysqli_close($link);
?>