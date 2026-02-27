# TechStack Tracker
![techstack tracker](image.png)

A web application to track and manage technologies you want to learn or master. I built it for me, but I think it can help you too.

## Features

- Dashboard with real-time statistics
- Add, edit, and delete technologies
- Toggle mastery status for each technology
- Track learning progress with visual indicators
- Responsive design for mobile and desktop

## Tech Stack

- Laravel 12
- Tailwind CSS
- Vite
- MySQL

## Installation

```bash
git clone https://github.com/alphonsekazadi/techstack-tracker.git
cd techstack-tracker
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

## Usage

Start the development server:

```bash
composer run dev
```

Compile assets:

```bash
npm run dev
```

Access the application at http://localhost:8000

## Pages

- Dashboard: Overview with stats and recent technologies
- Technologies: Full CRUD management of your tech stack
- Progress: Detailed progress tracking and completion rates
