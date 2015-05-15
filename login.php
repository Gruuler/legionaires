<div>
	<div class="login">
		<form method="post" action="scripts/login.php" id='login'>

			<!-- Below is the table for logging in.  Users put in their user names, passwords, and click the login button.
			Javascript will do some minor authentication to make sure that the information provided does not violate any
			standard procedures.  Form will then be passed on to login.php. -->

			<table>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="uName" id="uName"></td>
				</tr>
				<tr>
					<td colspan="2"><label id="badUser" class="error"></label></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td colspan="2"><label id="badPassword" class="error"></label></td>
				</tr>
				
			</table>

			<input type="button" value="Log In" id="loginSubmit">
		
		</form>
	</div>
</div>