# Car Wash Booking System

A modern car wash booking management system built with Laravel 12. This application allows customers to book car wash services online, while providing administrators with tools to manage bookings, services, and time slots efficiently.

## Entity-Relationship Diagrams (ERD)

-   [dbdiagram](https://dbdiagram.io/d/car-wash-booking-68cb76e15779bb7265ff3f28)

## Features

-   🚗 **Vehicle Management**: Store and manage multiple vehicles per user
-   📅 **Advanced Scheduling**: Book services with flexible time slots
-   💵 **Service Catalog**: Configurable services with pricing and duration
-   📱 **User Dashboard**: Track booking history and status
-   👨‍💼 **Admin Panel**: Manage bookings, services, and time slots
-   📊 **Reporting**: Generate reports on bookings and revenue

## Tech Stack

-   **Backend**: Laravel 12
-   **Database**: MySQL 8.0
-   **Frontend**: Blade templates with Tailwind CSS
-   **Containerization**: Docker & Docker Compose

## Requirements

### For Manual Installation

-   PHP 8.2 or higher
-   Composer
-   MySQL 8.0 or higher
-   Node.js and npm
-   Nginx web server

### For Docker Installation

-   Docker
-   Docker Compose

## Installation

### Manual Installation

1. **Clone the repository**

```bash
git clone https://github.com/danisec/bwa-car-wash-booking.git
cd bwa-car-wash-booking
```

2. **Install PHP dependencies**

```bash
composer install
```

3. **Copy environment file and generate application key**

```bash
cp .env.example .env

php artisan key:generate
```

4. **Configure database in .env file**

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=car_wash_booking
DB_USERNAME=username
DB_PASSWORD=your_password
```

5. **Run migrations and seed the database**

```bash
php artisan migrate:fresh
```

6. **Install frontend dependencies and build assets**

```bash
npm install
npm run build
```

8. **Start the development server**

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

### Docker Installation

1. **Clone the repository**

```bash
git clone https://github.com/danisec/bwa-car-wash-booking.git
cd bwa-car-wash-booking
```

2. **Copy environment file for Docker**

```bash
cp .env.example .env
```

3. **Configure the .env file for Docker**

```
DB_CONNECTION=mysql
DB_HOST=car-wash-booking-db
DB_PORT=3306
DB_DATABASE=car_wash_booking
DB_USERNAME=username
DB_PASSWORD=your_password
```

4. **Build and start the Docker containers**

```bash
docker compose build

docker compose up -d
```

The application will be available at `http://localhost:8000`

## Project Structure

-   **app/Http/Controllers**: Contains the controllers for handling HTTP requests.
-   **app/Models**: Holds the Eloquent models.
-   **database/migrations**: Database migrations to set up the tables.
-   **resources/views**: Blade templates for the frontend.
-   **routes/web.php**: Defines web routes for the application.

## License

The Car Wash Booking System is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
