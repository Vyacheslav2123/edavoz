<?php
$email = $_POST['email'];
mail("edavoz@gmail.com", "ryazan500600@gmail.com", "test", "Письмо отправлено с сайта Edavoz"); 
header('Location: success.html');
?>
