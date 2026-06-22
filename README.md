# PHP CRUD App with Auth — Users & Companies Management

A learning project built with vanilla PHP to understand the fundamentals of the language:
MVC architecture, authentication, form validation, and database interaction.

## Features

- User registration and login with password validation
- Role-based access: regular users manage contacts, admins manage companies
- Full CRUD for contacts (name, phone, email, address, company)
- Full CRUD for companies (name, address, website)
- Input validation extracted into reusable middleware functions
- PSR-4 autoloader (custom, no Composer)

## What I Learned

### MVC Architecture

Separated code into Models (database queries), Views (HTML templates), and Controllers (request handling). Controllers handle the request logic, delegate to Models for data, and render Views for output. Routes dispatch URLs to the appropriate controller method.

```php
// routes/routes.php maps URLs to controllers
case "contacts": 
    $controller = new ContactsController();
    $controller->index();
```

### Authentication

Session-based auth with role guards (`usersOnly()`, `adminOnly()`, `guestOnly()`) implemented as middleware functions. Passwords stored as plain text (for learning purposes — bcrypt recommended in production).

### PDO (PHP Data Objects)

All database queries use PDO with prepared statements to prevent SQL injection:

```php
$query = $this->pdo->prepare("SELECT * FROM companies WHERE id = ?");
$query->execute([$id]);
```

Learned the difference between `query()` and `prepare()`/`execute()`, fetching results with `FETCH_ASSOC`, and handling `PDOException`.

### Input Validation

Validation extracted into standalone middleware functions following a consistent pattern:

```php
function validateInputRegister(string $name, string $email, string $password, string $passwordConf): bool|array
```

Each function returns `true` on success or an associative array of error messages on failure. Errors are displayed in views using null coalescing: `<?= $validation["name"] ?? "" ?>`.

### Autoloading

Replaced manual `require_once` chains with `spl_autoload_register()` that maps class names to file paths by searching known directories. No Composer or namespaces required for this project.

### XSS Prevention

All user/DB output escaped with `htmlspecialchars()` in views to prevent cross-site scripting.

### Environment Variables

Database credentials moved to `.env` file, loaded via `parse_ini_file()`, and excluded from version control with `.gitignore`.

## Requirements

- PHP 8.0+
- MySQL/MariaDB
- No Composer dependencies

## Setup

1. Create the database:

```sql
CREATE DATABASE gestion_contacts_companies;
```

2. Import the schema (if available) or let the app create tables on first run.

3. Copy `.env` and adjust credentials:

```
DB_HOST=localhost
DB_NAME=gestion_contacts_companies
DB_USER=root
DB_PASS=your_password
```

4. Start the PHP built-in server:

```bash
php -S localhost:8000 -t public/
```

5. Visit `http://localhost:8000`

## Project Structure

```
├── config/
│   ├── autoload.php          # PSR-4 autoloader
│   ├── db.php                # PDO connection
│   └── session.php           # Session start
├── controllers/
│   ├── auth/                 # Login, Register, Logout
│   ├── contacts/             # List, Add, Update contacts
│   ├── companies/            # List, Add, Update companies
│   └── HomeController.php
├── middlware/
│   ├── auth.php              # Auth guard functions
│   └── inputValidation.php   # Validation functions
├── models/
│   ├── User.php
│   ├── Contacts.php
│   └── Companies.php
├── views/
│   ├── auth/
│   ├── contacts/
│   ├── companies/
│   └── shared/
├── public/
│   └── index.php             # Entry point
├── routes/
│   └── routes.php            # URL dispatcher
└── .env                      # DB credentials
```
