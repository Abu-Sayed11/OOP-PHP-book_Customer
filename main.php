<!DOCTYPE html>
<body>
<?php
include('Book.php');
include('Customer.php');

$book = new Book(123456, "Himu", "Humayun Ahmed", 5);
$customer = new Customer(1001, "Abu", "Sayeed", "john.doe@gmail.com");

// Using getters and setters
$book->available = 10;
$customer->email = "sayeed1001@gmail.com";

// Using __get and __set
$book->title = "Nondito Noroke";
$customer->firstName = "Abu";
echo"<pre>";
echo "Book Information: <br><br>" . $book . "\n";
echo "<br>";
echo "Customer Information: <br><br>" . $customer . "\n";
echo"</pre>";
?>
</body>
</html>