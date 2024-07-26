<?php
include "./model/Address.php";
include "./model/Person.php";

// สร้าง instance ของ Address
$address = new Address('123 Main St', 'Springfield', 'IL', '62701');

// สร้าง instance ของ Person โดยใช้ address ที่สร้างไว้
$person = new Person('John Doe', 30, $address);

echo $person;

?>
