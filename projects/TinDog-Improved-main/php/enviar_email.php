1.      <?php require 'mailer/PHPMailerAutoload.php';
2.
3.       if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
4.                  $assunto = $_POST['assunto'];
5.       }
6.       if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
7.                  $mensagem = $_POST['mensagem'];
8.       }
9.
10.    $mail = new PHPMailer;
11.
12.    $mail->isSMTP();
13.    $mail->Host = 'smtp.gmail.com';
14.    $mail->SMTPAuth = true;
15.    $mail->SMTPSecure = 'tls';
16.    $mail->Username = 'exemplo@gmail.com';
17.    $mail->Password = 'senha';
18.    $mail->Port = 587;
19.
20.    $mail->setFrom('email@gmail.com', 'Contato');
21.    $mail->addAddress('thiago.sandrade0720@gmail.com.br');
22.
23.    $mail->isHTML(true);
24.
25.    $mail->Subject = $assunto;
26.    $mail->Body    = nl2br($mensagem);
27.    $mail->AltBody = nl2br(strip_tags($mensagem));
28.
29.    if(!$mail->send()) {
30.        echo 'Não foi possível enviar a mensagem.<br>';
31.        echo 'Erro: ' . $mail->ErrorInfo;
32.    } else {
33.         header('Location: index.php?enviado');
34.    }
 ?>
