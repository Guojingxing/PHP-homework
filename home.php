<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            <?php
            $size = 32;
            switch ((int)date("d", time()+60*60*8) % 2){
                case 1: $size = 32; break;
                case 0: $size = 20; break;
            }
            echo ".font{font-size:",$size,"px}";
            ?>
        </style>
        <title>My Homework</title>
    </head>
    <body>
    
        <div align=right>
            <?php
            echo strftime("%A  %B  %c %Y", time()+60*60*8);
            ?>
        </div>
        <h1>第一个作业</h1>
        <?php
        $color = "#FF0000";
        $date = date("n", time()+60*60*8); #11、12、1属于冬季，其余类推
        $bg = 'white';
        $season = "春天";
        switch ($date){
            case "2":case "3":case "4":$color = "#FF0000"; $bg = 'white'; $season = "春天"; break;
            case "5":case "6":case "7":$color = "#00FF00"; $bg = 'white'; $season = "夏天"; break;
            case "8":case "9":case "10":$color = "#D9D919"; $bg = 'white'; $season = "秋天"; break;
            case "11":case "12":case "1":$color = "#FFFFFF"; $bg = 'black'; $season = "冬天"; break;
        }
        echo "<h2 color=\"red\">".$season."</h2>";
        #第一个表格
        echo '<table style="background-color:',$bg,'; text-align:center; color:',$color,';" border=10 class="font">';
        echo"<tr ><td > </td>";
        for($column = 1; $column <=9; $column++){
            echo '<td>', $column, '</td>';
        }
        echo "</tr>";
        for ($row = 1; $row <= 9; $row ++){
            echo"<tr><td>", $row, "</td>";
            for ($column = 1; $column <= $row; $column ++){
                echo '<td>', $column*$row, '</td>';
            }
            echo"</tr>";
        }echo "</table>";
        
        #第二个表格
        echo '<table style="background-color:',$bg,'; text-align:center; color:',$color,';" border=10 class="font">';
        echo"<tr ><td > </td>";
        for($column = 9; $column >=1; $column--){
            echo '<td>', $column, '</td>';
        }
        echo "</tr>";
        for ($row = 9; $row >= 1; $row --){
            echo"<tr><td>", $row, "</td>";
            for ($column = 9; $column >= 1; $column --){
                if ($row<$column)
                    echo "<td > </td>";
                else
                    echo '<td>', $column*$row, '</td>';
            }
            echo"</tr>";
        }echo "</table>";

        #第三个表格
        echo '<table style="background-color:',$bg,'; text-align:center; color:',$color,';" border=10 class="font">';
        echo"<tr ><td > </td>";
        for($column = 1; $column <= 9; $column++){
            echo '<td>', $column, '</td>';
        }
        echo "</tr>";
        for ($row = 9; $row >= 1; $row --){
            echo"<tr><td>", $row, "</td>";
            for ($column = 1; $column <= $row; $column ++){
                echo '<td>', $column*$row, '</td>';
            }
            echo"</tr>";
        }echo "</table>";

        #第四个表格
        echo '<table style="background-color:',$bg,'; text-align:center; color:',$color,';" border=10 class="font">';
        echo"<tr ><td > </td>";
        for($column = 9; $column >=1; $column--){
            echo '<td>', $column, '</td>';
        }
        echo "</tr>";
        for ($row = 1; $row <= 9; $row ++){
            echo"<tr><td>", $row, "</td>";
            for ($column = 9; $column >= 1; $column --){
                if ($row < $column)
                    echo "<td > </td>";
                else
                    echo '<td>', $column*$row, '</td>';
            }
            echo"</tr>";
        }echo "</table>";
        ?>
    </body>
</html>
