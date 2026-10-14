# Veikals – Praktiskais darbs 2 (Laravel)

Vienkārša produktu vietne: kategorijas un produkti.

## Palaišana

1. XAMPP Control Panel → ieslēgt **MySQL** (datubāze `veikals`).
2. Projekta mapē:
   ```
   php artisan migrate:fresh --seed
   php artisan serve
   ```
3. Atvērt http://127.0.0.1:8000, ielogoties ar `test@example.com` / `password` (vai reģistrēties).

## Kur atrodas prasības

| Prasība | Fails |
|---|---|
| Autentifikācija (Laravel Breeze) | `routes/auth.php`, `app/Http/Controllers/Auth/` |
| 2 saistīti modeļi (Category hasMany Product) | `app/Models/Category.php`, `app/Models/Product.php` |
| Pilna CRUD produktiem | `app/Http/Controllers/ProductController.php`, `routes/web.php` |
| Seeders | `database/seeders/CategorySeeder.php`, `ProductSeeder.php`, `DatabaseSeeder.php` |
| AJAX (produkta dzēšana ar `fetch`) | `resources/views/products/index.blade.php`, `ProductController@destroy` |
| Blade veidnes | `resources/views/products/` |
| Ievaddatu validācija | `app/Http/Requests/ProductRequest.php` |

## Mākslīgā intelekta rīku izmantošana

Darba izstrādē tika izmantots **Claude (Anthropic)**: vides uzstādīšanai (XAMPP, Composer, Laravel Breeze),
modeļu, migrāciju, kontroliera, validācijas, seederu, Blade skatu un AJAX dzēšanas koda ģenerēšanai.
