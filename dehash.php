<?php

// Change this
$email = "jd9902791@gmail.com"; /* Your email */
$code = "2c95837f1f75c6c9";     /* Your secret code */

// Clear screen
function clearScreen() {
    echo "\033[2J\033[;H";
}

// Print banner
function printBanner() {
	echo "       ___   ____  _      __    __   _    
      | | \ | |_  | |_|  / /\  ( (` | |_| 
      |_|_/ |_|__ |_| | /_/--\ _)_) |_| | 
            Developed by @mkdirlove
	  
";
}

// Banner for help message
function helpBanner() {
	echo "  ___   ____  _      __    __   _    
 | | \ | |_  | |_|  / /\  ( (` | |_| 
 |_|_/ |_|__ |_| | /_/--\ _)_) |_| | 
       Developed by @mkdirlove
	  
";
}

clearScreen();
printBanner();

if ($argc != 5) {
	clearScreen();
	helpBanner();
    echo " Usage: php dehash.php --type [hash type] --hash [hash value / file]\n";
    echo "                       --type [md5, md4, sha1, sha256, sha384, sha512, ntlm]\n";
    echo "                       --hash [hash value / file]\n";
    exit();
}

$hash_type = "";
$hash = "";

for ($i = 1; $i < $argc; $i++) {
    switch ($argv[$i]) {
        case "--type":
            $hash_type = $argv[$i + 1];
            break;
        case "--hash":
            $hash = $argv[$i + 1];
            break;
    }
}

if (empty($hash_type) || empty($hash)) {
    echo " Usage: php dehash.php --type [hash type] --hash [hash value / file]\n";
    echo "                       --type [md5, md4, sha1, sha256, sha384, sha512, ntlm]\n";
    echo "                       --hash [hash value / file]\n";
    exit();
}

echo " ------------------ Results ------------------\n";

// Read multiple hashes from txt file
function readMultipleHashFromFile($file, $hash_type, $email, $code) {
    if (!file_exists($file)) {
        echo "File does not exist.\n";
        exit();
    }

    $hashes = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (empty($hashes)) {
        echo "File is empty.\n";
        exit();
    }

    foreach ($hashes as $hash) {
        $response = file_get_contents("https://md5decrypt.net/en/Api/api.php?hash=".$hash."&hash_type=".$hash_type."&email=".$email."&code=".$code);
        echo " ".$hash. " : " . $response . "\n";
    }
}

if (strpos($hash, '.txt') !== false) {
    readMultipleHashFromFile($hash, $hash_type, $email, $code);
} else {
    $response = file_get_contents("https://md5decrypt.net/en/Api/api.php?hash=".$hash."&hash_type=".$hash_type."&email=".$email."&code=".$code);
    echo " ".$hash. " : " . $response . "\n";
}

?>
