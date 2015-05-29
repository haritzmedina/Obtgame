<br><br>
<form action="banned.php" method="post">
<input type="hidden" name="mode" value="banit">
	<table width="409">
		<tr>
			<td class="c" colspan="2">{admin_ban_toWho}</td>
		</tr><tr>
			<th width="129">{admin_ban_name}</th>
			<th width="268"><input name="name" type="text" size="25" /></th>
		</tr><tr>
			<th>{admin_ban_reason}</th>
			<th><input name="why" type="text" value="" size="25" maxlength="50"></th>
		</tr><tr>
			<td class="c" colspan="2">{admin_ban_time}</td>
		</tr><tr>
			<th>{admin_ban_days}</th>
			<th><input name="days" type="text" value="0" size="5" /></th>
		</tr><tr>
			<th>{admin_ban_hours}</th>
			<th><input name="hour" type="text" value="0" size="5" /></th>
		</tr><tr>
			<th>{admin_ban_minutes}</th>
			<th><input name="mins" type="text" value="0" size="5" /></th>
		</tr><tr>
			<th>{admin_ban_seconds}</th>
			<th><input name="secs" type="text" value="0" size="5" /></th>
		</tr><tr>
			<th colspan="2"><input type="submit" value="{admin_ban_ban}" /></th>
		</tr>
	</table>
</form>
