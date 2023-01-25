<?
	if(isset ($_POST['title'])) {$title=$_POST['title'];}
	if(isset ($_POST['name'])) {$fio=$_POST['name'];}
	if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}

	if(isset ($_POST['step1'])) {$step1=$_POST['step1'];}
	if(isset ($_POST['step2'])) {$step2=$_POST['step2'];}
	if(isset ($_POST['step3'])) {$step3=$_POST['step3'];}
	if(isset ($_POST['step4'])) {$step4=$_POST['step4'];}
	if(isset ($_POST['step5'])) {$step5=$_POST['step5'];}

	require 'PHPMailer/PHPMailerAutoload.php';
 
	$mail = new PHPMailer;
	
	$mail->isSMTP();
	$mail->Host = 'studiodance.com.ua';
	$mail->SMTPAuth = true;
	$mail->Username = 'no-reply@studiodance.com.ua';
	$mail->Password = '^Quq5*a!]pTZ';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	
	$mail->setFrom('no-reply@studiodance.com.ua', 'No reply');
	$mail->isHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->addAddress('danceplusart@gmail.com');
	$mail->Subject = 'New lead(studiodance.com.ua)';

	$mail->Body = "Форма: $title <br><br>";
	if ( $fio || $phonenum || $step1 || $step2 || $step3 || $step4 || $step5 ) {
		$mail->Body .= ""
			. ( $fio ?" Имя:  $fio <br>" : "")
			. ( $phonenum ?" Телефон:  $phonenum <br><br>" : "")
			. ( $step1  ? " Скільки Вам/дитині років?: $step1 <br>" : "")
			. ( $step2  ? " Чи займались раніше танцями?: $step2 <br>" : "")
			. ( $step3  ? " Який напрямок Вам більше всього подобається?: $step3 <br>" : "");
	}

	if (!$title && !$phonenum) {
	} else {
		$mail->send();
	}
	
?>