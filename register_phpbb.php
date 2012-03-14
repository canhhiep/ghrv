<html>
<body>
	<form name='register' action='http://lecanhhiep.no-ip.org/phpBB3/ucp.php?mode=register' method="post">
		<input type="text" name="username" value="hiep1111"/>
		<input type="text" name="email" value="hiep1111@yahoo.com"/>
		<input type="text" name="email_confirm" value="hiep1111@yahoo.com"/>
		<input type="text" name="new_password" value="hiep1111@yahoo.com"/>
		<input type="text" name="password_confirm" value="hiep1111@yahoo.com"/>
		<input type="text" name="agreed" value="true"/>
		<input type="text" name="change_lang" value="0"/>
		<input type="text" name="tz" value="7"/>
		<input type="text" name="creation_time" value="1317393813"/>
		
	</form>
	<a href='#' onclick="javascript:submitformTao();">Submit tao user js</a>
	
	<form name="login" id="login" action="http://lecanhhiep.no-ip.org/phpBB3/ucp.php?mode=login" method="post">
		<input type="text" name="username" value="hiep1111"/>
		<input type="password" name="password" value="hiep1111@yahoo.com"/>
		<input type="checkbox" name="autologin" value="true"/>
		<input type="hidden" name="redirect" value="http://http://lecanhhiep.no-ip.org/phpBB3"/>
		<input type="hidden" name="post" value="true"/>
	</form>
	<a href='#' onclick="javascript:submitformLogin();">Submit login</a>
	
<script type="text/javascript">
function submitformTao() {
	document.register.submit();
}

function submitformLogin() {
	document.login.submit();
}

</script>
</body>
</html>