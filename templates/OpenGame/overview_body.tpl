<center>
<br>
<table width="519">
<tr>
	<td class="c" colspan="4">
		<a href="overview.php?mode=renameplanet" title="{Planet_menu}">{Planet} "{planet_name}"</a> ({user_username})
	</td>
</tr>
{Have_new_message}
{Have_new_level_mineur}
{Have_new_level_raid}
<tr>
	<th>{Server_time}</th>
	<th colspan=3>{time}</th>
</tr>
<tr>
    <th>{MembersOnline}</th>
	<th colspan="3">{NumberMembersOnline}</th>
</tr>
{NewsFrame}
<tr>
	<td colspan="4" class="c">{Events}</td>
</tr>
{fleet_list}
<tr>
	<th>{moon_img}<br>{moon}</th>
	<th colspan="2"><img src="{dpath}planeten/{planet_image}.jpg" height="200" width="200"><br>{building}</th>
	<th class="s">
		<table class="s" align="top" border="0">
		<tr>
			{anothers_planets}
		</tr>
		</table>
	</th>
</tr>
<tr>
	<th>{Diameter}</th>
	<th colspan="3">{planet_diameter} km (<a title="{Developed_fields}">{planet_field_current}</a> / <a title="{max_eveloped_fields}">{planet_field_max}</a> cases)</th>
</tr>
	<!--Ajout du pourcentage de case utilis�e et d'une barre-->
	<th >{Developed_fields}</th>
	<th colspan="3" align="center">
		<div  style="border: 1px solid rgb(153, 153, 255); width: 400px;">
		<div  id="CaseBarre" style="background-color: {case_barre_barcolor}; width: {case_barre}px;">
		<font color="#CCF19F">{case_pourcentage}</font>&nbsp;</div>
	</th>
<tr>
<tr>
	<th>{Level}</th>
	<th>{Mineur} : {lvl_minier}</th>
	<th></th>
	<th>{Raideur} : {lvl_raid}</th>
</tr>
<tr>
	<th>{Experience}</th>
	<th>{Mineur} : {xpminier} / {lvl_up_minier}</th>
	<th></th>
	<th>{Raideur} : {xpraid} / {lvl_up_raid} </th>
</tr>
	<th>{Temperature}</th>
	<th colspan="3">De {planet_temp_min}&deg;C {to} {planet_temp_max}&deg;C</th>
</tr>
<tr>
	<th>{Position}</th>
	<th colspan="3"><a href="galaxy.php?mode=0&galaxy={galaxy_galaxy}&system={galaxy_system}">[{galaxy_galaxy}:{galaxy_system}:{galaxy_planet}]</a></th>
</tr>
<tr>
	<th>{Debris}</th>
	<th colspan="3">Metal : {metal_debris} / Cristal : {crystal_debris}{get_link}</th>
</tr>
<tr>
	<th>{Points}</th>
	<th colspan="3">{Buildings} : {user_points} <br>
	{Fleet} : {user_fleet} <br>
	{Research} : {player_points_tech} <br>
	Total : {total_points} <br>
	({Rank} <a href="stat.php?start={u_user_rank}">{user_rank}</a> {of} {max_users})
	</th>
</tr>
{ExternalTchatFrame}
</table>
<br>
{ClickBanner}
</center>
</body>
</html>
