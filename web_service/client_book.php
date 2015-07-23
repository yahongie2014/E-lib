<?
require_once ('C:\xampp\htdocs\E-Lib\web_service\dbcon.php');

$client = new soapclient('http://localhost:8048/E-lib/web_service/server_book.php');

$response = $client->call('getallbook');

if($client->fault)
{
	echo "FAULT: <p>Code: (".$client->faultcode.")</p>";
	echo "String: ".$client->faultstring;
}
else
{
	$r = $response;
	$count = count($r);
	?>
    <table border="1">
    <tr>
    	<th>Code</th>
    	<th>Title</th>        
    	<th>Author</th>        
    	<th>Publisher</th>        
    </tr>
    <?
    for($i=0;$i<=$count-1;$i++){
	?>
    <tr>
    	<td><?=$r[$i]['cd']?></td>
    	<td><?=$r[$i]['book_title']?></td>
    	<td><?=$r[$i]['author']?></td>                
    	<td><?=$r[$i]['publisher_name']?></td>
    </tr>
    <?
	}
	?>
    </table>
    <?
}
?>
