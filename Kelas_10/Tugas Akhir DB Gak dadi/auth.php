<?php 
defined('_VALID') or die('not allowed');

function init_login() {   
	
	require_once './koneksi.php';

	
	if (isset($_POST['user']) && isset($_POST['pass'])) {     
		$u = trim($_POST['user']);   //admin  
		$p = trim($_POST['pass']);   //admin
		
		//Syntax SQL
		$sql = "SELECT * FROM siswa
				WHERE username = '$u'";
		//jalankan syntax
		$res = mysql_query($sql);	
		
		//cek kesalahan syntax
		if ($res){
			//Cek apakah USERNAME ditemukan
			$num = mysql_num_rows($res);
			if ($num) 
			{
				//ambil data, masukkan sebagai array
				while ($row = mysql_fetch_row($res)) 
				{
					$pass = $row[2];
					
					//cek PASSWORD
					if($p==$pass)
					{
						// Jika sama, set cookie       
						setcookie('nlogin', $u);       
						setcookie('time', time());  
						// redireksi       
						echo "      
							<script type='text/javascript'>
								document.location.href='./index.php';
							</script> ";
							
					}else {
						echo 'Username/Password Tidak Sesuai';
						return false;     
					} 
				}
				
			} 
			else {
				echo 'Anda Belum Terdaftar';
				return false; 
			}
			
		}
		else {
			echo mysql_error();
		}		
	}
	@mysql_close($res);	
} 

function validate() 
{   
	if (!isset($_COOKIE['nlogin']) || !isset($_COOKIE['time']) ) 
	{
		?>
		<div class="inner">     
			<form action="" method="post">
			<center><h2>FORM LOGIN</h2></center>
			<table border=0 cellpadding=5>
					<tr>
						<td>Username</td>
						<td>
							<input type="text" name="user" />
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>
							<input type="password" name="pass" />
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="LOGIN" />
						</td>
					</tr>
				</table>
				Belum punya akun?<br>
				<a href="register.php"><i>Klik disini</i></a>
			</form>
		</div>
		<?php
		exit;
	} 
	if (isset($_GET['m']) && $_GET['m'] == 'logout') 
	{
		// Hapus cookie
		if (isset($_COOKIE['nlogin'])) {
			setcookie('nlogin', '', time() - 3 * 3600);     
		}     
		if (isset($_COOKIE['time'])) {       
			setcookie('time', '', time() - 3 * 3600);     
		} 
		// redirect halaman     
		echo"      
			<script type='text/javascript'>
				document.location.href='./';
			</script> ";   
	}  
}  
?>