# Laravel Request Lifecycle Demo 🚀

This project explains the Laravel Request Lifecycle in a beginner-friendly way.

## 🛠 Steps Demonstrated
1. Request enters through `public/index.php`
2. Kernel processes it
3. Middleware filters request (`LogRequestTime`)
4. Route matches (`/lifecycle`)
5. Controller executes (`DemoController@index`)
6. Response is returned (JSON output)

## 🔄 How to Test
- Clone repo
- Run `php artisan serve`
- Visit `http://127.0.0.1:8000/lifecycle`
- Check `storage/logs/laravel.log` to see request timing logs
```
