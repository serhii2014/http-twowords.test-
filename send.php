
<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$hiddenInput = $_POST['phone'];

$to = "sguschencka.web@neogara.com";
$subject = "Полные данные для регистрации нового пользователя ";
$message = "
Имя пользователя: ".htmlspecialchars($firstname)."
Фамилия пользователя: ".htmlspecialchars($lastname)."
Почта пользователя: ".htmlspecialchars($email)."
Телефон: $hiddenInput";
mail ($to, $subject, $message, $headers);
header('Location: http://twowords.test/thanks.php');
exit();
?>

