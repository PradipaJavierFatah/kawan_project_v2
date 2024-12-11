# Kawan Project Website

![Kawan Project Logo](https://drive.google.com/uc?id=1ZvM950OpxGLHyOxyeqW7SmpBevPm2tmM "Kawan Project")

This repository hosts the Kawan project, developed with Laravel, styled using Tailwind CSS, and Bootsrap 5.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Application](#running-the-application)

## Prerequisites
Before you begin, ensure you have met the following requirements:
- PHP >= 8.2.4
- Composer
- Node.js & npm
- MySQL or any other compatible database

## Installation

1. Clone the repository:
    ```bash
    https://github.com/PradipaJavierFatah/kawan_project_v2
    cd kawan_project_v2
    ```

2. Install PHP dependencies:
    ```bash
    composer install
    ```

3. Install Node.js dependencies:
    ```bash
    npm install
    ```

## Configuration

1. Copy the `.env.example` file to `.env`:
    ```bash
    cp .env.example .env
    ```

2. Generate an application key:
    ```bash
    php artisan key:generate
    ```

3. Configure your database settings in the `.env` file:
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

## Running the Application

1. Run the database migrations:
    ```bash
    php artisan migrate:fresh
    php aritsan migrate:fresh --seed
    ```

2. Seed the database (optional):
    ```bash
    php artisan db:seed
    ```

3. Build the front-end assets:
    ```bash
    npm run dev
    ```

4. Start the local development server:
    ```bash
    php artisan serve
    ```

By default, the server will be accessible at [http://127.0.0.1:8000](http://127.0.0.1:8000).

THANK YOU!
