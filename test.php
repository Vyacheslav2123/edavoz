$email = $_POST['email'];
 if ($email !== ' ') {
    mail("ryazan500600@gmail.com", "test", "Письмо отправлено с сайта Edavoz"); 
 }
 header("Location: ./pay.html")