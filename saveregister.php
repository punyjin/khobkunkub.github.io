<?php



function getRealIpAddr(){
	if (!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

$captcha = $_POST['captcha'];
$captchacorrect = $_SESSION['cap_code'];
$ip = getRealIpAddr();

//$result3 = pg_query("SELECT * FROM accounts WHERE lastip='".$ip."'");
//$num_rows2 = pg_num_rows($result3);
$redrirac = "index.php?page=register";

	if(trim($_POST["txtUsername"]) == ""){
		echo("<script> alert('กรอกข้อมูลทั้งหมด!');</script><script>window.location='".$redrirac."';</script>");
		exit();	
	}elseif(trim($_POST["txtPassword"]) == ""){
		echo("<script> alert('กรอกข้อมูลทั้งหมด!');</script><script>window.location='".$redrirac."';</script>");
		exit();	
	}elseif(trim($_POST["txtConPassword"]) == ""){
		echo("<script> alert('กรอกข้อมูลทั้งหมด!');</script><script>window.location='".$redrirac."';</script>");
		exit();	
	}elseif(trim($_POST["email"]) == ""){
		echo("<script> alert('กรอกข้อมูลทั้งหมด!');</script><script>window.location='".$redrirac."';</script>");
		exit();	
	}elseif(trim($_POST["captcha"]) == ""){
		echo("<script> alert('กรอกข้อมูลทั้งหมด!');</script><script>window.location='".$redrirac."';</script>");
		exit();	
	}elseif($_POST["txtPassword"] != $_POST["txtConPassword"]){
		echo("<script> alert('รหัสผ่านไม่ตรงกัน!');</script><script>window.location='".$redrirac."';</script>");
		exit();	
	}elseif (trim($_POST['captcha']) != $_SESSION['cap_code']){
		echo "<script>alert('กรอกรหัสในรูปไม่ถูกต้อง!');</script><script>window.location='".$redrirac."';</script>";
		exit();
	}else{
		$strSQL5 = "SELECT * FROM accounts WHERE email = '".trim($_POST["email"])."' ";// Verifica email
		$objQuery5 = pg_query($strSQL5);
		$objResult5 = pg_fetch_array($objQuery5);
		if($objResult5){
			echo("<script> alert('อีเมลนี้ถูกใช้แล้ว!');</script><script>window.location='".$redrirac."';</script>");
			exit();
		}else{
			$strSQL = "SELECT * FROM accounts WHERE login = '".trim($_POST['txtUsername'])."' "; // Verifica  ID
			$objQuery = pg_query($strSQL);
			$objResult = pg_fetch_array($objQuery);
			if($objResult){
				echo("<script> alert('User ถูกใช้แล้ว!');</script><script>window.location='".$redrirac."';</script>");
				exit();
			}else{	
				$strSQL = "INSERT INTO accounts (login,password,email,token) VALUES ('".$_POST["txtUsername"]."','".encripitar($_POST["txtPassword"])."','".$_POST["email"]."','".encripitar($_POST["txtUsername"])."')";   //Alterar Cash e Gold inicial //Change cash and gold
        //Create By Xorbit256
				$objQuery = pg_query($strSQL);
		
				$_SESSION['username'] = $_POST['txtUsername'];
				
				echo "<script>alert('สร้างบัญชีสำเร็จแล้ว.');</script><script>window.location='index.php?page=home';</script>";
			}
		}
	}
	
	pg_close();
?>
