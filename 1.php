<?php
/*
      Thanks to : 
             https://github.com/tomiashari/fb-autoreaction
             https://github.com/dfmcvn/getFBtoken
             https://github.com/tro1d/bot-reaction-gettoken
*/
/////Modified by Dark-Link /////
function code($user1, $pass1, $r_male1,$r_female1,$max_status1){
$buat = '<?php
$user = "'.$user1.'";
$pass = "'.$pass1.'";
$r_male = "'.$r_male1.'";
$r_female = "'.$r_female1.'";
$max_status = "'.$max_status1.'";
?>';
$file = fopen('lib/config.php','w');
fputs($file,$buat);
fclose($file);
echo "Sukses Disetting";
}
echo "\033[1;35m______ ______________  ____  ___     ___    _________   ______   ___\n";
echo "|    \ |   _  ||   _ \ |  | / /      |  |   |  ||    \  | ||  | / / \n";
echo "|  |\ \|  |_| ||  |_| \|  |/ /  ____ |  |   |  ||     \ | ||  |/ /  \n";
echo "|  |/ /|   _  ||     / |    <  |____||  |   |  ||  |\  \| ||    <   \n";
echo "|    / |  | | ||  |\ \ |  |\ \       |  |___|  ||  | \    ||  |\ \  \n";
echo "|___/  |__| |_||__| \_\|__| \_\_     |______|__||__|  \___||__| \_\_\n";

echo "\033[1;32m Are you sure you want to do this?\n";
echo "Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
     echo "\033[1;31m Input tidak valid!\n";
     echo "     EXIT!\n"; 
    exit;
} 
echo "\n";
echo "\033[1m         ======BOT REACTION FACEBOOK======\n";
print "         |       TYPE OF REACTION        |\n";
print "         | 1.   Like        3 .  Wow     |\n";
print "         | 2.   Love        4.   Haha    |\n";
print "         | 7.   Sad         8.   Angry   |\n";
print "         ------------Dark-Link------------\n";
print " ===<[ROOT && MOD]>===<[BY]>===<[RUZTAM-D'ROCK]>===";
print "\n";
echo "\033[0m \n"; 
echo "Username/phone/Email : \n    ";
$user1 = trim(fgets(STDIN));
echo "Password             : \n    ";
$pass1 = trim(fgets(STDIN));
echo "Reaction if user male : \n    ";
$r_male1 = trim(fgets(STDIN));
echo "Reaction if user female : \n    ";
$r_female1 = trim(fgets(STDIN));
echo "Maximum reacted status (ex:100) : \n    ";
$max_status1 = trim(fgets(STDIN));
$execute = code($user1, $pass1, $r_male1,$r_female1,$max_status1);
print $execute;
?>

