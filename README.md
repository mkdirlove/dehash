<h1 align="center">
  <br>
  <a href="https://github.com/mkdirlove/dehash"><img src="https://github.com/mkdirlove/dehash/blob/main/logo.png" alt="dehash"></a>
  <br>
  A simple multi-hash cracking tool written in PHP.
  <br>
</h1>

#### Installation

Copy-paste this into your terminal:

```
git clone https://github.com/mkdirlove/dehash.git
```
```
cd dehash
```
```
php dehash.pph -h
```
#### Usage
``` 
  ___   ____  _      __    __   _    
 | | \ | |_  | |_|  / /\  ( (` | |_| 
 |_|_/ |_|__ |_| | /_/--\ _)_) |_| | 
       Developed by @mkdirlove
	  
 Note: You can only decrypt 400 hashes per day.

 Usage: php dehash.php --type [hash type] --hash [hash value / file]
                       --type [md5, md4, sha1, sha256, sha384, sha512, ntlm]
                       --hash [hash value / file]]
```

#### Then edit file to match your config

It already have an email and secret code but you can create your own secret code at https://md5decrypt.net/en/Api/

```
// Change this
$email = ""; /* Your email */
$code = "";  /* Your secret code */
```

#### Cracking single hash
```
php dehash.php --type md5 --hash 5f4dcc3b5aa765d61d8327deb882cf99
```

#### Cracking multiple hash from text file
```
php dehash.php --type md5 --hash hashes.txt
```
#### Supported Hashes
```
md5, md4, sha1, sha256, sha384, sha512, ntlm
```

#### Error Codes Description
```
- ERROR CODE : 001   ==>   You exceeded the 400 allowed request per day (please contact me if you need more than that).
- ERROR CODE : 002   ==>   There is an error in your email / code.
- ERROR CODE : 003   ==>   Your request includes more than 400 hashes.
- ERROR CODE : 004   ==>   The type of hash you provide in the argument hash_type doesn't seem to be valid.
- ERROR CODE : 005   ==>   The hash you provide doesn't seem to match with the type of hash you set.
- ERROR CODE : 006   ==>   You didn't provide all the arguments, or you mispell one of them.
- ERROR CODE : 007   ==>   The premium code you entered doesn't seem to be valid.
- ERROR CODE : 008   ==>   The premium variable doesn't seem to be correct, it must be 1.
- ERROR CODE : 009   ==>   Your premium account ran out of time, to continue using it, you'll have to buy more time or hashes.
```
#### Demo video
```
https://asciinema.org/a/GBXVLbiJNLBjX5EOuggI84t9j
```
