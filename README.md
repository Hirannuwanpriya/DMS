# DMS - Delivery Management System

A Laravel-based Delivery Management System (DMS) to manage and organize delivery efficiently.

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10.x
- MySQL or another supported database

## Installation

Clone the repository:

```bash
git clone https://github.com/Hirannuwanpriya/DMS.git
cd DMS
```

Install PHP dependencies:

```bash
composer install
```

Copy the `.env` file and generate the application key:

```bash
cp .env.example .env
php artisan key:generate
```

Set your database credentials in `.env`, then run the migrations:

```bash
php artisan migrate
```

## Seed Sample Data

After installing dependencies, run the following command to populate the database with sample data:

```bash
composer refresh
```

> This command will reset the database and seed it with sample users, documents, and categories.

### 🔐 Sample Admin Login

Use the following credentials to log in as an administrator:

- **Email:** `admin@dms.com`
- **Password:** `admin`

- **Email:** `test@example.com`
- **Password:** `password`

## Run the Application

Start the Laravel development server:

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

---

## License

This project is open-source and available under the [MIT license](LICENSE).
