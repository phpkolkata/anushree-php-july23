<?php

$week = array("sun", "mon", "tue", "wed", "thu", "fri", "sat");

print "select week:";
print "<select>";
foreach ($week as $w) {
    print "<option>$w</option>";
}
print "</select>";

?>
<!--
<select>
    <option></option>
    <option></option>
    <option></option>
    <option></option>
    <option></option>
    <option></option>
</select> -->
