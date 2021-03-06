## How to setup CitySeek development platform on XAMPP (Windows):
* Install XAMPP: https://www.apachefriends.org/xampp-files/5.6.24/xampp-win32-5.6.24-1-VC11-installer.exe
* Install Composer: https://getcomposer.org/Composer-Setup.exe
* Install Git: https://git-scm.com/download/win
* Edit `C:\xampp\apache\conf\extra\httpd-vhosts.conf` adding these lines: 
```
    <VirtualHost cityseek.dev:80>
        DocumentRoot "C:\xampp\htdocs\cityseek\CitySeek\public"
        ServerAdmin cityseek.dev
        <Directory "C:\xampp\htdocs\cityseek\CitySeek">
            Options Indexes FollowSymLinks
            AllowOverride All
            Require all granted
        </Directory>
    </VirtualHost>
```
* Edit `C:\Windows\System32\drivers\etc\hosts` file adding this line:

`127.0.0.1    cityseek.dev`

* In PHPStorm: VCS -> Checkout from Version Control -> GitHub: http://prnt.sc/cro0wv
 - Directory: `C:\xampp\htdocs\cityseek`
 
* Navigate to http://cityseek.dev/phpmyadmin . Create new database: `cityseek`
* Import sql of cityseek to the database. Get it from me :)
* change .env and /config/database.php files accordingly
* Add `curl.cainfo="C:/xampp/ca-bundle.crt"` to php.ini
* Put `ca-bundle.crt` file to /xampp

## Orientacinių varžybų sistema

Projektinis darbas: Orientacinių varžybų sistema
Akademinė grupė: IF-4/9
Kūrėjai:
* Darius Kraujutaitis (darius.kraujutaitis@ktu.edu)
* Lukas Kučinskas (lukas.kucinskas@ktu.edu)
* Kristupas Vaitkus (kristupas.vaitkus@ktu.edu)
* Linas Levanas (linas.levanas@ktu.edu)
