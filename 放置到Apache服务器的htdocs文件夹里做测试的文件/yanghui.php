<html>
<head>
<title>杨辉三角形</title>
</head>
<body>
<p align=center>输出给定阶数的杨辉三角形:</p>
<form method="post" action="<? echo $PHP_SELF; ?>">
输入杨辉三角形的阶数 : <input type=text name="givenlines" size=5>
<input type="Submit" name="submit" value="打印杨辉三角形">
</form>

<?
function Yanghui( $line )
{

 for ($i=1;$i<=$line;$i++)
      { print("<Table >");
        for ($j=1;$j<=$i; $j++)
        {
         $yh[$i][1]=1;
         if ($i==$j)  $yh[$i][$j]=1;
         else $yh[$i][$j]=$yh[$i-1][$j-1] + $yh[$i-1][$j];

             print("<td width=40><font color=#0000FF>");
             echo $yh[$i][$j];
             print("</td>\n");
         }
         print("</Table>");
       }
}

if($_POST['submit'])
{
Yanghui( $_POST['givenlines'] );
//echo  $givenlines;
}
?>
</body>
</html>