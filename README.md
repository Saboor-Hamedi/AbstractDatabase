# GIS MVCclear

AbstractDatabase is a PHP-based MVC framework designed to streamline database interactions and provide a robust structure for web applications. This project includes essential components such as Docker setup files, environment configuration examples, and application-specific code.

## Features

- **MVC Architecture**: Organized structure separating Model, View, and Controller layers.
- **Database Abstraction**: Simplified database operations using PDO.
- **Environment Configuration**: Easily configurable using `.env` files.
- **Docker Integration**: Docker setup for consistent development environments.
- **Asset Management**: Organized assets for easy styling and scripting.

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- Composer
- Docker (optional, for containerized development)

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Saboor-Hamedi/AbstractDatabase.git
   cd AbstractDatabase

<hr>

2.  Install dependencies:
    
    bash
    
    Copy code
    
    `composer install` 
    
3.  Copy the example environment file and configure it:
    
    bash
    
    Copy code
    
    `cp .env.example .env` 
    
4.  Set up the database:
    
    bash
    
    Copy code
    
    `php artisan migrate` 
    

### Running the Application

#### Using Docker

1.  Build and run the Docker containers:
    
    bash
    
    Copy code
    
    `docker-compose up -d` 
    
2.  Access the application at `http://localhost`.
    

#### Without Docker

1.  Start the PHP development server:
    
    bash
    
    Copy code
    
    `php -S localhost:8000 -t public` 
    
2.  Access the application at `http://localhost:8000`.
    

## Directory Structure

-   `app`: Contains application-specific code (controllers, models, views).
-   `public`: Publicly accessible files (index.php, assets).
-   `vendor`: Composer dependencies.
-   `docker-compose.yml`: Docker configuration file.
-   `.env.example`: Example environment configuration.

## Contributing

Contributions are welcome! Please fork the repository and create a pull request with your changes.



