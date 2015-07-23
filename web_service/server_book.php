<link href="dbcon.php">
<?
//call library
require_once ('C:\xampp\htdocs\E-Lib\web_service\dbcon.php');

$server = new soap_server;
$server->register('getallbook');

function getallbook()
{
	$conn = mysql_connect('mysql.serversfree.com','u140129559_lib','12101991');
	mysql_select_db('u140129559_lib', $conn);
	
	$sql = "SELECT * FROM book";
	$q	= mysql_query($sql);
	while($r = mysql_fetch_array($q)){
	  $items[] = array('cd'=>$r['cd'],
                          'book_title'=>$r['book_title'],
                          'author'=>$r['author'],
                       'publisher_name'=>$r['publisher_name']); 
	}
	return $items;

}

$server->service($HTTP_RAW_POST_DATA);

exit();

?>
