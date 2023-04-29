<?
 $connection = mysqli_connect('localhost','root','','book_db');

 if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];

    $request = "insert into book_form(name, email, phone, address, location, guests) values 
    ('$name','$email','$phone','$address','$location','$guests')";

    mysqli_query($connection, $request);

    header('location:book.php');
 }else{
    echo 'Something went wrong try again';
 }

?>