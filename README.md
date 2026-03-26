# 🟠 Drorange

> A modern e-commerce store built with Laravel.

**Live site:** [drorange.maktechlaravel.cloud](https://drorange.maktechlaravel.cloud)

---

## Table of Contents

- [About](#about)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Getting Started](#getting-started)
- [Configuration](#configuration)
- [Running the App](#running-the-app)
- [Deployment](#deployment)
- [Contributing](#contributing)
- [License](#license)

---

## About

Drorange is a full-featured e-commerce web application that lets customers browse products, manage a cart, and place orders — all through a clean, responsive interface.

---

## Features

- 🛍️ Product catalog with categories and search
- 🛒 Shopping cart and checkout flow
- 👤 User registration, login, and account management
- 📦 Order history and tracking
- 🔐 Secure authentication
- 📱 Fully responsive design

---

## Tech Stack

| Layer      | Technology          |
|------------|---------------------|
| Backend    | PHP / Laravel       |
| Frontend   | Blade / HTML / CSS  |
| Database   | MySQL               |
| Server     | Apache / Nginx      |

---

## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL

### Installation

```bash
# Clone the repository
git clone https://github.com/your-username/drorange.git
cd drorange

# Install PHP dependencies
composer install

# Install frontend dependencies
npm install && npm run build

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate
```

---

## Configuration

Edit the `.env` file and set your environment variables:

```env
APP_NAME=Drorange
APP_URL=https://drorange.maktechlaravel.cloud

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=drorange
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

---

## Running the App

```bash
# Run database migrations and seeders
php artisan migrate --seed

# Start the local development server
php artisan serve
```

Visit `http://localhost:8000` in your browser.

---

## Deployment

```bash
# Pull latest changes
git pull origin main

# Install/update dependencies
composer install --no-dev --optimize-autoloader
npm install && npm run build

# Run migrations
php artisan migrate --force

# Clear and cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## Contributing

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/your-feature`
3. Commit your changes: `git commit -m "Add your feature"`
4. Push to the branch: `git push origin feature/your-feature`
5. Open a Pull Request

---

## License

This project is licensed under the [MIT License](LICENSE).
