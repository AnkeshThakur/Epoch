<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Style/caln_style.css" />			
            				
<title>Calendar</title>

<script type="text/javascript">
function display_year(x){

	for($i=1; $i<=14; $i++)
	{	document.getElementById("Div_"+$i).style.display="none";
		document.getElementById("But_"+$i).checked=false;
	}
	document.getElementById("Div_"+x).style.display="block";
	document.getElementById("But_"+x).checked=true;
}</script>
</head>
<? echo("<div id=\"title\" align=\"center\" ><img src=\"Img/calendar.png\" id=\"topimage\"> <p id=\"title\">Epoche Calendar </p></div>");
	echo("<div id=\"decade\" ><p id=\"ch_de\">Choose the decade:</p></br>
	<table id=\"dec_table\" align=\"center\" width=\"100%\"><tr>");
			for($q=1; $q<=14; $q++)
			{ $m=190+$q-1;
			echo("<td onmouseover=\"this.style.opacity=1;this.filters.alpha.opacity=100\" onmouseout=\"this.style.opacity=0.6;this.filters.alpha.opacity=60\"><a id=\"But_".$q."\" onClick=\"display_year(".$q.")\" style=\"cursor: pointer; cursor: hand;\">".$m."0s</a></td>");
			}
			
			echo("</tr>
			
	</table>			
	</div>");
	
	
	echo("<div id=\"yr\">");?>
    		
            <div id="Div_1" class="MyDiv">Choose year and month:</br>
            	<form class="form_d" name="frm" action="index.php" method="get">
                Year: <select name="year">
                <? for($x=2; $x<=9; $x++){
                		echo("<option value=\"190".$x."\">190".$x."</option>"); } ?>
                        
                        </select>
                 Month: <select name="month">
                 		<option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>            
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                        </select>
                   <button class="dis_but" type="submit" value="Display" />
                   </form>
            </div>
            
            <?
			for($c=2; $c<=13; $c++){
				$tmp=$c+189;
            	echo("<div id=\"Div_".$c."\" class=\"MyDiv\">
						Choose year and month:
            	<form class=\"form_d\" name=\"frm\" action=\"index.php\" method=\"get\">
                Year: <select name=\"year\">");
                 for($x=0; $x<=9; $x++){
                		echo("<option value=\"".$tmp."".$x."\">".$tmp."".$x."</option>"); }
                        
                   echo("</select>
                 		Month: <select name=\"month\">
                 		<option value=\"1\">January</option>
                        <option value=\"2\">February</option>
                        <option value=\"3\">March</option>            
                        <option value=\"4\">April</option>
                        <option value=\"5\">May</option>
                        <option value=\"6\">June</option>
                        <option value=\"7\">July</option>
                        <option value=\"8\">August</option>
                        <option value=\"9\">September</option>
                        <option value=\"10\">October</option>
                        <option value=\"11\">November</option>
                        <option value=\"12\">December</option>
                        </select>
                   	<button class=\"dis_but\" type=\"submit\" value=\"Display\"/>
                   	</form>");
					echo("</div>");}

			?>
                      
            <div id="Div_14" class="MyDiv">Choose year and month:
            	<form class="form_d" name="frm" action="index.php" method="get">
                Year: <select name="year">
                <? for($x=0; $x<=7; $x++){
                		echo("<option value=\"203".$x."\">203".$x."</option>"); } ?>
                        
                        </select>
                 Month: <select name="month">
                 		<option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>            
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                        </select>
                   <button class="dis_but" type="submit" value="Display" />
                   </form>
            </div> 
      <?      
	 echo("</div>");
	 
	 
	 
	echo("<div id=\"caln\">");
	if(empty($_GET["year"]) &&(empty($_GET["month"])))
	{
		$year=date("Y");
		$month=date("m");
	 }

	else
	{$year=$_GET["year"];
	$month=$_GET["month"];}
	$m_name=date("F",mktime(0,0,0,$month,1,$year));
	$no_of_days=date("t", mktime(0,0,0,$month,1,$year));
	$strt_day=date("w",mktime(0,0,0, $month,1,$year));
	$blanks=$strt_day;
	$i=$flag=1;
	$pmonth=date("m",mktime(0,0,0,$month-1,1,$year));
	$pyear=date("Y", mktime(0,0,0,$month-1,1,$year));
	$nmonth=date("m", mktime(0,0,0,$month+1,1,$year));
	$nyear=date("Y", mktime(0,0,0,$month+1,1,$year));
	
	if($year>=1902 && $year<1910){$var=1;}
	elseif($year>=1910 && $year<1920) {$var=2;}
	elseif($year>=1920 && $year<1930) {$var=3;}
	elseif($year>=1930 && $year<1940) {$var=4;}
	elseif($year>=1940 && $year<1950) {$var=5;}
	elseif($year>=1950 && $year<1960) {$var=6;}
	elseif($year>=1960 && $year<1970) {$var=7;}
	elseif($year>=1970 && $year<1980) {$var=8;}
	elseif($year>=1980 && $year<1990) {$var=9;}
	elseif($year>=1990 && $year<2000) {$var=10;}
	elseif($year>=2000 && $year<2010) {$var=11;}
	elseif($year>=2010 && $year<2020) {$var=12;}
	elseif($year>=2020 && $year<2030) {$var=13;}
	else {$var=14;}
	
	echo("<p id=\"Caln_title\" align=\"center\">".$m_name.",".$year."</p>");
	echo("<table id=\"calendar\" width=\"60%\">
			<tr>
				<td width=\"2%\">Sun</td><td width=\"2%\">Mon</td><td width=\"2%\">Tue</td><td width=\"2%\">Wed</td><td width=\"2%\">Thu</td><td width=\"2%\">Fri</td><td width=\"2%\">Sat</td>
			</tr>");
			while($i<=$no_of_days)
			{
				echo("<tr>");
				if($flag==1)
				{
					$flag++;
					for($b=0; $b<$blanks; $b++)
					{
						echo("<td></td>");	
					}
				}
				for($d=$strt_day; $d<=6; $d++)
				{
					if($i>$no_of_days) break;
					echo("<td>".$i."</td>");
					$i++;	
				}
				$strt_day=0;
			echo("</tr>");
			}
	echo("</table>");
	echo("</div>");
	
	echo("<div id=\"prev\">");
	if($year==1902 && $month==1)    //Boundary Condition
	{
		echo("<div><img src=\"Style/Img/left_arrow.png\"></div>");
	}
	else{
			echo("<a href=\"index.php?year=".$pyear."&month=".$pmonth."\"><div><img src=\"Style/Img/left_arrow.png\" alt=\"Previous Month\"></div></a>");
	}
	echo("</div>");
	echo("<div id=\"nxt\">");
	if($year==2037 && $month==12)    //Boundary Condition
	{
		echo("<div><img src=\"Style/Img/right_arrow.png\" alt=\"Next Month\"></div>");
	}
	else{
	echo("<a href=\"index.php?year=".$nyear."&month=".$nmonth."\"><div><img src=\"Style/Img/right_arrow.png\" alt=\"Next Month\"></div></a>");}
	echo("</div>");
	
	

echo("<body onload=\"display_year(".$var.")\">"); ?>
</body>
</html>
