<script type="text/javascript">
localStorage.setItem("swal",
swal(
  'Do not leave empty!',
  'ห้ามเว้นว่าง',
  'error'
)
</script>
<script type="text/javascript">
swal(
  'Username or Password Invalid!',
  'อีเมล์หรือรหัสผ่านไม่ถูกต้อง',
  'error'
)
</script>
<script type="text/javascript">
swal(
  'Success!',
  'เข้าสู่ระบบสำเร็จ!',
  'success'
)
</script>
<script type='text/javascript'>
function check_email(elm){
    var regex_email=/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*\@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.([a-zA-Z]){2,4})$/
    if(!elm.value.match(regex_email)){
        alert('โปรดป้อนที่อยู่อีเมลที่ถูกต้อง');
    }else{

}
}
</script>
				<div class="col-lg-8 order-md-1">
<div class="card mb-3">
	<div class="card-header" id="header">
			<i class="fa fa-fw fa-lock"></i>&nbsp;สมัครสมาชิก
	</div>
	<div class="card-body" style="padding: 0px; border-top:4px solid #b30000;position: relative;">
		<div class="container my-3">
		<div class="alert alert-warning" style='border-radius: 0px;background-color: rgba(244, 98, 66, 0.8);color: white;'><i class="fas fa-exclamation-triangle"></i> การุณาใช้ตัวอักษรพิมพ์เล็ก a-z 0-9 เท่านั้น</div>
			<form method="post" action="saveregister.php">
				<div class="form-group">
					<label for="oldpass"></i> Username :</label>
					<input style="margin-top: 5px;" type="txt" class="form-control" id="txtUsername" name="txtUsername" placeholder="ชื่อผู้ใช้ ควรมี 5 - 10 ตัวอักษร">
				</div>
				<div class="form-group">
					<label for="oldpass"></i> Password :</label>
					<input style="margin-top: 5px;" type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="รหัสผ่าน  ควรมี 5 - 10 ตัวอักษร">
				</div>
				<div class="form-group">
					<label for="oldpass"></i> Password :</label>
					<input style="margin-top: 5px;" type="password" class="form-control" id="txtConPassword" name="txtConPassword" placeholder="ยืนยันรหัสผ่าน  ควรมี 5 - 10 ตัวอักษร">
				</div>
				<div class="form-group">
					<label for="oldpass"></i> Email :</label>
					<input style="margin-top: 5px;" type="txt" class="form-control" onblur="check_email(this)" id="email" name="email" placeholder="อีเมล์">
				</div>
				<div class="form-group">
					<img src="captcha.php" id="captcha" />
					<input style="margin-top: 5px;" type="txt" class="form-control" id="captcha" name="captcha" placeholder="กรอกรหัสที่เห็นในภาพด้านบน">
				</div>
				<input name="submit" type="submit" class="btn btn-success btn-block mb-3" value="สมัครสมาชิก"/>
			</form>
		</div>
	</div>
</div>				</div>


  			
				<div class="col-lg-4 order-md-2">
					<div class="card mb-3">
	<div class="card-header" id="header">
		<i class="fa fa-fw fa-sign-in-alt"></i>&nbsp;เข้าสู่ระบบ	</div>
				<div class="card-body" style="padding: 0px; border-top:4px solid #b30000;position: relative;">
					<div class="container">
						<div class="container my-3">
							<div class="card-content">
								<div class="row">
									<div class="col-2">
										<img src="images/login.svg" alt="" style="width: 37px; height: 37px;">
									</div>
									<div class="col">
										<b style="color: red;">Login</b>
										<div>Manage account</div>
									</div>
								  </div><br>
								<div class="alert alert-warning" style='border-radius: 0px;background-color: rgba(244, 98, 66, 0.8);color: white;'>
<i class="fas fa-exclamation-triangle"></i> กรุณากรอกชื่อไอดีเป็นตัวเล็กทั้งหมด!</div>
<form class="form-horizontal" method="post">

								<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="ชื่อผู้ใช้งาน" name="user_login" id="user_login">
  <div class="input-group-append">
    <span class="input-group-text"><i class="fas fa-user"></i></span>
  </div>
</div>
								
							<div class="input-group mb-3">
  <input type="password" class="form-control" placeholder="รหัสผ่าน" id="pwd_login" name="pwd_login">
  <div class="input-group-append">
    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
  </div>
</div>

							
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" name="button" class="btn btn-block btn-danger" value="เข้าสู่ระบบ"><i class="fas fa-unlock-alt"></i>&nbsp;เข้าสู่ระบบ</button>
					<table style="width: 100%;">
						<tr>
							<td>
								<a style="margin-top: 3px;width: 100%;" href="?page=register" class="btn btn-primary"><i class="fa fa-fw fa-book"></i>&nbsp;สมัครสมาชิก</a>	
							</td>
						</tr>
					</table>
			  	</div>
		</form>
		</div>
				</div>
					
<script>
			function SoruceCodeBy_Xorbit256(message,type = "default")
			{
				$('#alert_box').modal('show');

				if(type == "error"){
					class_name = "alert-danger";
				}else if(type == "warning"){
					class_name = "alert-warning";
				}else if(type == "success"){
					class_name = "alert-success";
				}else{
					class_name = "alert-primary";
				}
				$('#alert_box #text_message').html('<div id="alert" class="alert '+ class_name +' alert-dismissible fade show" role="alert" align="left">' +
		  	 message +
				'</div>');
			}
		</script>

