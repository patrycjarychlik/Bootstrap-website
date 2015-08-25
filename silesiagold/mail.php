<?
 $temat=$_POST['temat'];
 $tresc=$_POST['tresc'];
 $email=$_POST['email'];
 if (!strstr($email, "@"))$email=$email."@to.jest.nr.telefonu";
    $naglowki  = "MIME-Version: 1.0\r\n";
    $naglowki .= "Content-type: text/html; charset=utf-8\r\n";
    $naglowki .= "Content-Transfer-Encoding: 8bit\r\n";
    $naglowki .= "From: $email";
 
 mail("zdzichs@caprisoft.com.pl","WWW: ".$temat,$tresc,$naglowki);

 header("Location: http://www.silegold.pl/?tytul=pomail");
 die();
?>


