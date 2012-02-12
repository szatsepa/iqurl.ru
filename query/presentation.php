<?php

/*
 * created by arcady.1254@gmail.com 2/2/2012
 */

$name_id = intval($attributes[name_id]);

$query = "SELECT name FROM names WHERE id = $name_id";

$result = mysql_query($query) or die($query);

$row = mysql_fetch_row($result);

$name = $row[0];

unset ($row);  

$query = "SELECT p.id,
            (SELECT i.comment FROM images AS i WHERE i.id = p.p_url AND i.type = p.type) AS img, 
            (SELECT i.id FROM images AS i WHERE i.id = p.p_url AND i.type = p.type) AS img_id,
            (SELECT i.name FROM images AS i WHERE i.id = p.p_url AND i.type = p.type) AS img_link,
            (SELECT s.comment FROM sites AS s WHERE s.id = p.p_url AND s.type = p.type) AS lnk, 
            (SELECT s.id FROM sites AS s WHERE s.id = p.p_url AND s.type = p.type) AS lnk_id,
            (SELECT s.name FROM sites AS s WHERE s.id = p.p_url AND s.type = p.type) AS lnk_link,
            (SELECT snd.comment FROM sounds AS snd WHERE snd.id = p.sound) AS sound, 
            (SELECT snd.id FROM sounds AS snd WHERE snd.id = p.sound) AS sound_id,
            (SELECT snd.name FROM sounds AS snd WHERE snd.id = p.sound) AS filename,
            p.time,
            p.priority
          FROM `presentation` AS p 
          WHERE p.name_id = $name_id
          ORDER BY p.priority";

$result = mysql_query($query) or die($query);

$presentation = array();

while ($var = mysql_fetch_assoc($result)){

    array_push($presentation, $var);
}

mysql_free_result($result);

?>
