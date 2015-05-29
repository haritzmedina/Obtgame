<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <link href="skins/obtpowa/formate.css" rel="stylesheet" type="text/css">
	<title>{log_title}</title>
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
<div id="main">
<br>
<table width="600px" colspan="10">
	<tr>
	<th colspan="10">
		<span class="topTitle">{log_welcome}</span>
	</th>
	</tr>
	<tr /><tr /><tr />
	<tr>
		<th colspan="3">
			<a class="leftMenu" href="reg.php">{log_reg}</a>
			<br>
			<a class="leftMenu" href="{forum_url}">{log_forum}</a>
			<br>
			<a class="leftMenu" href="contact.php">{log_contact}</a>
			<br>
			<a class="leftMenu" href="credit.php">{log_cred}</a>
		</th>
		<th colspan="5">
			<form name="formular" action="" method="post" onsubmit="changeAction('login');">
				<span class="login">
					{log_user_name}
					<br>
					<input name="username" value="" type="text">
					<br>
					{log_user_passwd}
					<br>
					<input name="password" value="" type="password">
					<br>
					{log_remember_me}
					<input name="rememberme" type="checkbox">
					<script type="text/javascript">document.formular.Uni.focus(); </script>
					<input name="submit" value="{log_login}" type="submit">
				</span>
			</form>
		</th>
		<th colspan="2">
			<span class="login">
				{log_remember_passwd}
				<br>
				{log_do_click} <a href="lostpassword.php">{log_here}</a>
			</span>
		</th>
	</tr>
	<tr>
		<th colspan="4">
			<span class="descript">{log_title} {log_descript}</span>
			<br><br>
			<span class="advice">{log_advice}</span>
		</th>
		<th colspan="6">
		<object width="320" height="265"><param name="movie" value="http://www.youtube.com/v/r3kbMcmvhUc&hl=es&fs=1&rel=0&color1=0x2b405b&color2=0x6b8ab6"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/r3kbMcmvhUc&hl=es&fs=1&rel=0&color1=0x2b405b&color2=0x6b8ab6" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="320" height="265"></embed></object>
		</th>
	</tr>
	<tr>
		<th colspan="5">
				<span class="stat1">{log_online_users}</span>
				<span class="stat2"> {online_users}</span>
			<br>
				<span class="stat1">{log_online_last_user}</span>
				<span class="stat2"> {last_user}</span>
			<br>
				<span class="stat1">{log_online_reg_users}</span>
				<span class="stat2"> {users_amount}</span>
		</th>
		<th colspan="5">
			<span class="copy">
				{log_copy_year} {log_title} {log_copy_res}
			</span>
		</th>
	</tr>
</table>

</body></html>
