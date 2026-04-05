# 🚗 Car CRUD

A Laravel-based CRUD application for **car management**.  
The system allows users to create, upload images, read, update, and delete vehicle records.
Users can **register and log in**, while the **admin can manage all users and cars** through a simple and clean interface.
---
# ✨ Features

## 👤 Customer Authentication
- Register new users
- Login / Logout system
- Secure authentication

## 🚘 Car Management
- Add new cars (name, price, age, etc.)
- Upload car images
- View all cars in a structured list
- Update existing car information
- Filter cars (for example by price or age)
- Delete cars easily

## 👑 Admin Controls
- Manage all users
- Manage all cars
- Full system control
---
# 🛠 Technologies Used

### Backend
- PHP 8+
- Laravel

### Frontend
- Blade
- CSS
- JavaScript

### Database
- MySQL / SQLite

### Tools
- Composer
- NPM
- Laravel Artisan CLI

---
# 🚀 Getting Started

## Requirements
Make sure you have installed:

- PHP >= 8.0
- Composer
- MySQL or SQLite
- Node.js & NPM
---
## 1️⃣ Clone the repository

```bash
git clone https://github.com/Lukatsurtsumia/carsCrud.git
cd carsCrud
```
---
## 2️⃣ Install dependencies

```bash
composer install
npm install
npm run dev
```
---
## 3️⃣ Configure environment
```bash
cp .env.example .env
php artisan key:generate
``
---
## 4️⃣ Setup the database
Update the database credentials inside the `.env` file.
Then run:

```bash
php artisan migrate --seed
```
---
## 5️⃣ Run the project

```bash
php artisan serve
```
Open in your browser:
```
http://127.0.0.1:8000
```
---
# 👨‍💻 Author

**Luka Tsurtsumia**
