# Laravel Project Setup Guide

## Prerequisites

- **XAMPP/WAMP** (Add PHP to your environment path)
- **Composer**
- **Node.js**

---

## Creating a New Project

1. **Create Laravel Project**
   ```bash
   composer create-project laravel/laravel "project-name"
   ```

2. **Modify `.env` File**  
   Update your environment variables as needed.

3. **Install Dependencies**
   ```bash
   npm install
   composer install
   ```

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Start Development Servers**
   ```bash
   php artisan serve
   npm run dev
   ```

---

## If You Cloned the Project

After cloning, run:

```bash
php artisan key:generate
```