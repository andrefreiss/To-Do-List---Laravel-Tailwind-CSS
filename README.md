# Laravel Todo List

A simple Todo List app built using Laravel and TailwindCSS.

## Requirements

Before getting started, you'll need:

- PHP 8.x or higher
- Composer
- Node.js and npm
- SQLite

## Steps to Run the Project Locally

### 1. Clone the repository

Clone the repository to your local machine using the following command:

```bash

git clone hgit@github.com:andrefreiss/To-Do-List---Laravel-Tailwind-CSS.git
```

2. Install Composer dependencies
Install the PHP dependencies of the project using Composer:
```bash
composer install
```
This will install all the required PHP libraries and dependencies specified in the composer.json file.

3. Install NPM dependencies
Install the frontend dependencies (TailwindCSS and other JavaScript dependencies) using npm:

```bash
npm install
```

This will install all the necessary packages for the frontend part of the application.

4. Configure the .env file
Copy the .env.example file to create the .env file:
```bash
cp .env.example .env
```

This file contains your environment configuration, including database settings, app key, etc. Make sure to adjust the database settings to match your local environment (SQLite or MySQL).

5. Generate the application key
Generate the Laravel application key:
```bash
php artisan key:generate
```

This command will set the APP_KEY in the .env file to a random value, which is required for the application to work.

6. Run the migrations
Run the migrations to set up the database:

```bash
php artisan migrate
```
If you're using SQLite, Laravel will automatically create the database file for you. Otherwise, ensure that your database is set up properly in the .env file before running this command.

7. Seed the database (optional)
You can seed the database with some dummy data for testing:

```bash
php artisan db:seed
```

8. Run the local server
To start the Laravel development server:

```bash
php artisan serve
```

This will start the server, and you can access the application at http://localhost:8000 in your web browser.
