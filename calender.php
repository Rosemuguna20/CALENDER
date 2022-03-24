<?php

print '<?xml version = "1.0" encoding="utf-8"?>';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Calendar</title>
<link rel="stylesheet" type="text/css" href="calendar.css" />
</head>
<body>
<div class="container">

<h1>
Rozzie Family Schedule for
<?php
date_default_timezone_set('Africa/Kenya');
$ts = time();
$year = date("Y",$ts);
$month = date("M",$ts);
$month_day = date("D",$ts);
$week_day = date("l",$ts);
$hour = date("h",$ts);
$ampm = date("a",$ts);
$minute = date("i", $ts);
echo "$week_day".", "."$month"." "."$month_day".", "."$year".", "."$hour".":"."$minute"."$ampm";
?>
</h1>

<table id="event_table">

   <tr>
       <th class='hr_td_blank'> &nbsp; </th>
       <th class='table_header'>Jojo</th>
       <th class='table_header'>Lee</th>
       <th class='table_header'>Ellie</th>
   </tr>

<?php
// Function
function get_hour_string($time){
   $hour_string = "";
   $hour = date("h",$time);
   $ampm = date("a",$time);
   $hour_string = "$hour:00$ampm";
   return $hour_string;
}
$hours_to_show = 12;
$timestamp = time();
for($row = 0; $row <= $hours_to_show; $row++)
{
echo "<tr class=";
if ($row % 2 == 0)
   echo '"even_row">';
else echo '"odd_row">';
echo '<td class="hr_td">'. get_hour_string($timestamp) . "</td>";
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo "</tr>";
$timestamp += 60 * 60;
}
?>

</table>

</div>

</body>
</html>