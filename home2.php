<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
        </style>
        <title>My Homework2</title>
    </head>
    <body>
    <h1>第二个作业</h1>
    <div style="color:red">结果会保存在answer.txt中。</div>
    <form action="<?php echo $PHP_SELF; ?>" method="POST"><!--返回给自己-->
        1.你来自湖南吗?<br>
        <input type="radio" name="place" value="yes">是<p>
        <input type="radio" name="place" value="no">否<p>
        2.你打游戏吗?<br>
        <input type="radio" name="game" value="no">是<p>
        <input type="radio" name="game" value="yes">否<p>
        3.你的大学过的充实吗?<br>
        <input type="radio" name="full" value="yes">是<p>
        <input type="radio" name="full" value="no">否<p>
        4.你将来会待在中国工作吗?<br>
        <input type="radio" name="stay" value="yes">是<p>
        <input type="radio" name="stay" value="no">否<p>
        5.你会除了英语中文以外的其他语言吗?<br>
        <input type="radio" name="lang" value="yes">是<p>
        <input type="radio" name="lang" value="no">否<p>
        6.你觉得你的大学过得好吗?<br>
        <input type="radio" name="good" value="yes">是<p>
        <input type="radio" name="good" value="no">否<p>
        7.你会科学上网吗?<br>
        <input type="radio" name="firewall" value="yes">是<p>
        <input type="radio" name="firewall" value="no">否<p>
        8.你知道YouTube吗?<br>
        <input type="radio" name="youtube" value="yes">是<p>
        <input type="radio" name="youtube" value="no">否<p>
        9.你会经常在网上学习吗?<br>
        <input type="radio" name="study" value="yes">是<p>
        <input type="radio" name="study" value="no">否<p>
        10.你快乐吗?<br>
        <input type="radio" name="happy" value="yes">是<p>
        <input type="radio" name="happy" value="no">否<p>
        <input type="submit" name="send" value="提交"><br>
    </form>
    <?
    $message_array = file("answer.txt");
    //
    $old_messages = "";
        //$old_messages .= $message_array[$counter];
    $thetime = date("Y-n-j H:i", time()+8*60*60);
    $arrays = array("place", "game", "full", "stay", "lang", "good", "firewall", "youtube", "study", "happy");//每个名字
    $total_lines = count($arrays);
    
    $temp = 1;
    $score = 0;
    
    $open_file = fopen("answer.txt", "w");
    fputs($open_file, "统计的时间是".$thetime."\n");
    for ($counter = 0; $counter < $total_lines; $counter++){
        if ($_POST[$arrays[$counter]]=="yes")//统计
            $temp = 1;
        else
            $temp = 0;
        //echo $_POST[$arrays[$counter]],$temp,'<br>';
        $old_messages =  "第".($counter+1)."题你得了".(string)$temp."分。\n";
        $score += $temp;
        fputs($open_file, $old_messages);
    }
    fputs($open_file, "总分为".(string)$score."分。");
    fclose($open_file);
    ?>
    </body>
</html>

