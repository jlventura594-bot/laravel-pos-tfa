# Laravel POS — Technical Formative Assessments

A Laravel project for IT0049 Web System Technologies.

**Developer:** John Laurence Ventura  
**Current milestone:** TFA5 — Laravel POS Foundations

## Features

- Home page introducing the application.
- About page describing the project.
- Customers page displaying five sample customers.
- Users page displaying five sample users.
- Navigation between all four pages.
- Blade tables rendered using `@foreach`.

Customer and user records are static arrays defined in their respective
controllers. Authentication, database-backed records, and CRUD operations
are not implemented in this milestone.

## Technologies

- Laravel 13
- PHP 8.4
- Composer 2
- Blade templates
- SQLite for Laravel's local framework storage

## Routes

| URL | Controller method |
|---|---|
| `/` | `PageController@index` |
| `/about` | `PageController@about` |
| `/customers` | `CustomerController@index` |
| `/users` | `UserController@index` |

## Local Setup — Windows PowerShell

Install PHP 8.4 and Composer. Enable PHP extensions including OpenSSL,
mbstring, fileinfo, cURL, PDO SQLite, SQLite3, and ZIP.

After cloning this repository, open a terminal inside its project folder.

For a fresh clone, run:

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
```

Ensure `.env` contains:

```dotenv
DB_CONNECTION=sqlite
```

Create the SQLite file if it does not already exist:

```powershell
if (!(Test-Path database/database.sqlite)) {
    New-Item database/database.sqlite -ItemType File
}
```

Then run:

```powershell
php artisan migrate
php artisan serve
```

Open http://127.0.0.1:8000 in your browser.

## Database Files

Laravel's migrations and seeders are included in `database/`.
The displayed customer and user records come from controller arrays,
not database tables.

Local `.env`, SQLite database files, and dependency folders are excluded
from version control.

## Manual Verification

- All four pages load successfully.
- Customers displays five records.
- Users displays five records.
- Navigation works between all pages.

## Deployment

Hosting is pending. The live application URL will be added after deployment.