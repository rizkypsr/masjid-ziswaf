## Cara Jalanin

1. Didownload dulu yaaa. kalo gak didownload, mau hosting apa ? angin ?

2. Kalo udah didownload, buka di vscode. Terus buka terminal ketikkan perintah berikut:

Dijalanin Satu Satu ya

```
composer install
```

```
npm install
```

```
cp .env.example .env
```

```
php artisan key:generate
```

3. Buat Database di PHPMYADMIN dengan nama ziswaf

4. Jalanin

```
php artisan migrate
```

5. Buka 2 Terminal, kemudian jalankan kedua perintah di terminal masing-masing

```
npm run dev
```

```
php artisan serve
```