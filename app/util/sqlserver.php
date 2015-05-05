<?php

//链接数据库 
$conn=mssql_connect('wzg\SQLEXPRESS','sa','1234'); 

mssql_select_db('db_Dog',$conn); 

/*//query语句 
$Query="select top 20 * from db_DanWeiYangQuanXinXi "; 
$TestResult=mssql_query($Query); 
//输出结果 
$Num=mssql_num_rows($TestResult); 
for($i=0;$i<$Num;$i++) 
{ 
$Row=mssql_fetch_array($TestResult); 
//echo($Row[0]). "---" .(iconv("gb2312",   "utf-8", $Row[1]) ); 
echo($Row[0]). "---" .$Row[1]; 
echo("<br/>"); 
} 
*/
?>