<?php
require_once("configDb.php");
mysql_connect('localhost', $user, $pass);
mysql_select_db($db_name);
$dnns = mysql_fetch_array(mysql_query('select count(ip) as nb from cpt_connectes where ip="'.$_SERVER['remote_addr'].'"'));
if($dnns['nb']>0)
{
    mysql_query('update cpt_connectes set timestamp="'.time().'" where ip="'.$_SERVER['remote_addr'].'"');
}
else
{
    mysql_query('insert into cpt_connectes (ip, timestamp) values ("'.$_SERVER['remote_addr'].'", "'.time().'")');
}
$times_m_5mins = time()-(60*5);
mysql_query('detete from cpt_connectes where timestamp<"'.$times_m_5mins.'"');
$dnns2 = mysql_fetch_array(mysql_query('select count(ip) as nb from cpt_connectes'));
echo 'Il y a actuellement <strong>'.$dnns2['nb'].'</strong> connect&eacute;.';
echo 'WOWOWOWOWOWOW';
mysql_close(); // Déconnexion de MySQL
?>
