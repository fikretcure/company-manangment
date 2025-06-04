chmod +x reset.sh
php artisan optimize:clear
php artisan migrate:fresh --seed
