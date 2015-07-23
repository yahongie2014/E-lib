<?php 
$json = file_get_contents('http://afsh5nat.bugs3.com/librarian/books.php');

$data = json_decode($json, TRUE);

$countries = array(); 

foreach($book_id['book_id']['book_title'] as $book_title) {
    $countries[] = $item['description'];
}
?>