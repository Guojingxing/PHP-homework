<html>
<head>
<title>���������</title>
</head>
<body>
<p align=center>����������������������:</p>
<form method="post" action="<? echo $PHP_SELF; ?>">
������������εĽ��� : <input type=text name="givenlines" size=5>
<input type="Submit" name="submit" value="��ӡ���������">
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