## About Warkop Companion
Warkop Companion menyediakan fitur pemesanan jasa desain dan model warung kopi dan cafe. Sistem menggunakan CRUD dan hanya perlu melakukan pendaftaran untuk melakukan pemesanan. Pembeli dapat memesan jasa desain interior, desain menu & branding, desain pencahayaan, desain exterior, pengurusan internet, dan persediaan furniture. Pembeli dapat memesan untuk banyak warung kopi sekaligus dan terdapat halaman pesanan dimana semua faktur pembelian jasa tersimpan.

## Requirements
1. XAMPP with PHP Version ^8.0.2
2. Composer

## How To Run
### First Run
1. Clone this repository
```bash
git clone https://github.com/harisde03/PBW-2022-Warkop-Companion
```

2. Change current directory to the cloned directory
```bash
cd PBW-2022-Warkop-Companion
```

3. Install all dependencies with composer
```bash
composer install
```

4. Copy .env.example to .env in the same directory
```bash
cp .env.example .env
```

5. Generate key using artisan
```bash
php artisan key:generate
```

6. Create the symbolic links configured for the application
```bash
php artisan storage:link
```

7. Create a database named `warkop_companion` through XAMPP CLI or phpMyAdmin

8. Generate the default seed through migration
```bash
php artisan migrate:fresh --seed
```

9. Run the server using artisan
```bash
php artisan serve
```

### After First Run
1. Start a terminal / command prompt in the cloned directory
```bash
cd PBW-2022-Warkop-Companion
```

2. Run the server using artisan
```bash
php artisan serve
```

## Resources
### Fonts:
https://github.com/twbs/icons  
https://github.com/FortAwesome/Font-Awesome  
https://fonts.google.com/specimen/Lobster  
https://fonts.google.com/specimen/Comfortaa  
