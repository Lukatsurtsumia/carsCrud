 #Car Crud 
 A Laravel-based CRUD application for Car management — creating,uploading img, reading, updating, and deleting vehicle records 
 — with support for user registration and login.
Users can register, log in, and manage the system through a simple and clean interface.
Admin can controle all Users & Cars tables.


#Customer Authentication!
  - Register new customers. 
  - Login / logout system. 

#Cars Managment!
- Add new cars (name, price, age, etc.)  
-  View all cars in a structured list. 
-  Update existing car information.
-  Filter cars (e.g. by price, age).
-  Delete cars easily.


#Technologie Used
-Backend (PHP 8+, Laravel).
-Frontend (Blade, Css, Javascript)
-Database(MySQL)
-Tools(Composer, Npm, Artisan CLI)

/////////////////////////////////////////////////////////////////

Lets Started

#
Make sure you have installed:
- PHP >= 8.0  
- Composer  
- MySQL or SQLite  
- Node.js & NPM  

#

1. Clone the repository
   ```bash
   git clone https://github.com/Lukatsurtsumia/carsCrud.git
   cd carsCrud

2.composer install
npm install && npm run dev

3.cp .env.example .env
php artisan key:generate

4. php artisan migrate --seed

Run the Project
5. php artisan serve......http://127.0.0.1:8000
