<h1 align="center">
  <br>
  <a href="https://github.com/mkdirlove/dehash"><img src="https://github.com/mkdirlove/dehash/blob/main/logo.png" alt="dehash"></a>
  <br>
  A simple multi-hash cracking tool written in PHP.
  <br>
</h1>

#### Installation

Copy-paste this into your terminal:

```sh
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

 Usage: php dehash.php --type [hash type] --hash [hash value]
                       --type [md5, md4, sha1, sha256, sha384, sha512, ntlm]
                       --hash [hash value / file]
```
#### Cracking single hash
```
php dehash.php --type md5 --hash 5f4dcc3b5aa765d61d8327deb882cf99
```

#### Cracking multiple hash from text file
```
php dehash.php --type md5 --hash hashes.txt
```
