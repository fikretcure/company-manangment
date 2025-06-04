<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

## G-ERP Hakkında

Bu proje şu an için yalnızca **müşteri yönetimi** modülünü kapsamaktadır.

### Kurulum Adımları

Aşağıdaki adımları takip ederek projeyi yerel ortamınızda çalıştırabilirsiniz:

1. `.env.example` dosyasını `.env` olarak kopyalayın.
2. Terminalden aşağıdaki komutları sırasıyla çalıştırın:

```bash
composer install
php artisan migrate:fresh --seed
php artisan optimize:clear
php artisan serve --port=8085
```

3. Giris bilgileriniz `gcode@green.com` &&  `Green2025!`
4. Proje başarıyla başlatıldığında http://127.0.0.1:8085 adresinden erişebilirsiniz.
