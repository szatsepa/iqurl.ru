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

$query = "SELECT p.id AS row, p.priority,p.time, 
(SELECT im.id FROM `images` AS im LEFT JOIN `presentation` AS p   ON p.p_url = im.id WHERE row = p.id AND p.type = 1) AS img_id, 
(SELECT im.name FROM `images` AS im LEFT JOIN `presentation` AS p   ON p.p_url = im.id WHERE row = p.id AND p.type = 1) AS img_link, 
(SELECT im.comment FROM `images` AS im LEFT JOIN `presentation` AS p   ON p.p_url = im.id WHERE row = p.id AND p.type = 1) AS img, 
(SELECT st.id FROM `sites` AS st LEFT JOIN `presentation` AS p   ON p.p_url = st.id WHERE row = p.id AND p.type = 0) AS lnk_id, 
(SELECT st.name FROM `sites` AS st LEFT JOIN `presentation` AS p   ON p.p_url = st.id WHERE row = p.id AND p.type = 0) AS lnk_link, 
(SELECT st.comment FROM `sites` AS st LEFT JOIN `presentation` AS p   ON p.p_url = st.id WHERE row = p.id AND p.type = 0) AS lnk, 
(SELECT snd.id FROM `sounds` AS snd LEFT JOIN `presentation` AS p   ON p.sound = snd.id WHERE row = p.id) AS sound_id, 
(SELECT snd.name FROM `sounds` AS snd LEFT JOIN `presentation` AS p   ON p.sound = snd.id WHERE row = p.id) AS filename, 
(SELECT snd.comment FROM `sounds` AS snd LEFT JOIN `presentation` AS p   ON p.sound = snd.id WHERE row = p.id) AS sound 
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
