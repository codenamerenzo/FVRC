
<?php
// Print the array from getdate()
//print_r(getdate());
//echo '<br>';
// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
//echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
echo "$mydate[month] $mydate[mday], $mydate[year]";
?>
