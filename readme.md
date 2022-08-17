
# Laravel Pint githook
**Git pre-commit hook** for Laravel Pint  
**Automatically** formats and saves code on commit  
You no longer need to run the **./vendor/bin/pint** command every time  
### Requirements:

- PHP 8+
- Laravel 9+
- Laravel Pint 1+

### Installation
```bash
composer require dsoloview/laravel-pint-pre-commit
```

To add githook
```bash
php artisan pint-githook:install
```
To remove githook
```bash
php artisan pint-githook:remove
```

### License
MIT
