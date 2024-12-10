# Laravel projekat

Nakon kloniranja celokupnog repozitorijuma sledećom komandom:
```
git clone https://github.com/elab-development/internet-tehnologije-projekat-turistickaagencija_2019_0232.git
```
Potrebno je izvršiti sledeće komande radi ispravnog pokretanja Laravel domaćeg zadatka:
```
cd laravelBackend
composer install
```
Nakon toga potrebno je preimenovati .env.example fajl u **.env** samo! U odnosu na ime  baze podataka koja je data unutar tog fajla, na PHPmyAdmin-u se mora kreirati istoimena baza.

Zatim usleđuju sledeće instrukcije kojim se započinje server:
```
php artisan key:generate
php artisan serve
php artisan migrate --seed
```

Dalja testiranja aplikacije mogu se vrsiti preko Postman aplikacije, u skladu sa API-jem samog domaceg rada.
