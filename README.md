# Laravel POS — Technical Formative Assessments

A Laravel application developed for IT0049 Web System Technologies.

**Developer:** John Laurence Ventura  
**Current milestone:** TFA7 — Forms and Validation (in progress)

## Features

- Home and About pages.
- Customer and user listings retrieved through Eloquent.
- Customer creation and editing.
- User creation and editing.
- Server-side validation with field-level error messages.
- Preservation of submitted non-password input after validation errors.
- Unique username and email validation for users.
- CSRF protection on forms.
- Database migrations and a sample-data seeder.

New user passwords are hashed using the User model's password cast.
Authentication and login are not implemented.

## Assessment Progress

### TFA5 — Laravel Foundations

Implemented four pages, routes, controllers, Blade views, and navigation.

### TFA6 — From Arrays to Eloquent

Replaced controller arrays with database queries, added a Customer model,
updated the users schema, and created PosSeeder with five sample records
for each table.

### TFA7 — Forms, Validation, and File Upload

Implemented customer and user create/edit forms with validation.

The nullable avatar database column has been added. Avatar validation,
image preparation, storage, and listing display remain pending.
TFA7 is not yet complete.

## Requirements

- PHP 8.4
- Composer 2
- PHP extensions: cURL, fileinfo, mbstring, OpenSSL, PDO,
  PDO SQLite, SQLite3, and ZIP

The current pages use Blade and inline CSS, so an npm build is not
required to run them.

## Installation — Windows PowerShell

Clone the repository:

```powershell
git clone https://github.com/jlventura594-bot/laravel-pos-tfa.git
cd laravel-pos-tfa
composer install
```

For a fresh clone, create the local environment configuration:

```powershell
Copy-Item .env.example .env
php artisan key:generate
```

Ensure `.env` contains:

```dotenv
DB_CONNECTION=sqlite
```

Create the SQLite database file if missing:

```powershell
if (!(Test-Path database/database.sqlite)) {
    New-Item database/database.sqlite -ItemType File
}
```

Create the tables and populate sample data:

```powershell
php artisan migrate --seed
```

Prepare the public storage link:

```powershell
php artisan storage:link
```

Start the development server:

```powershell
php artisan serve
```

Open http://127.0.0.1:8000.

## Updating an Existing Local Copy

Commit or otherwise preserve local changes before pulling.

```powershell
git pull origin main
composer install
php artisan migrate
```

Keep the existing `.env` and application key.

Run `php artisan db:seed` when sample data is needed. The seeder updates
matching sample customers and creates sample users only when their
usernames do not already exist.

## Pages

| URL | Purpose |
|---|---|
| `/` | Home |
| `/about` | Project information |
| `/customers` | Customer listing |
| `/customers/create` | Create customer |
| `/customers/{customer}/edit` | Edit customer |
| `/users` | User listing |
| `/users/create` | Create user |
| `/users/{user}/edit` | Edit user |

## Database

- Customers: full name, email, and optional phone.
- Users: unique username, full name, unique email, hashed password,
  and nullable avatar path.
- Migrations and seeders are included in the repository.
- `.env`, local SQLite files, and dependency folders are excluded.

The seeded users have randomly generated passwords and are sample
records, not published login credentials.

## Deployment

A hosted submission link has not yet been confirmed.
Deployment and the remaining TFA7 avatar features are pending.