# test-ui

Laravel Admin Panel with Bootstrap 5 - OpenCart Style

## Overview

This repository contains a professional admin panel for Laravel with an OpenCart-inspired design using Bootstrap 5.

## Features

✅ **Modern UI** - Bootstrap 5.3.2 with local assets  
✅ **OpenCart-style Layout** - Header, Footer, and Left Sidebar  
✅ **Dashboard Page** - Comprehensive welcome page with statistics  
✅ **Responsive Design** - Works on all devices  
✅ **Bootstrap Icons** - 1.11.1 icon library included  

## Quick Start

1. Clone the repository
2. Navigate to the public directory
3. Start PHP's built-in server:
```bash
php -S localhost:8000 -t public
```
4. Open your browser to `http://localhost:8000`

## Documentation

See [ADMIN_PANEL_README.md](ADMIN_PANEL_README.md) for detailed documentation.

## Structure

```
├── app/Http/Controllers/Admin/    # Admin controllers
├── resources/views/admin/         # Blade templates
│   ├── layouts/                   # Layout files
│   └── dashboard/                 # Dashboard views
├── routes/                        # Route definitions
└── public/                        # Public assets and entry point
    ├── css/                       # Bootstrap CSS and Icons
    └── js/                        # Bootstrap JavaScript
```

## Dashboard Components

- **Statistics Cards** - Total Sales, Orders, Customers, Products
- **Recent Orders Table** - Latest orders with status badges
- **Quick Stats** - Progress bars for key metrics
- **Recent Activity** - Timeline of recent events
- **Top Products** - Best-selling products list

## Screenshots

![Admin Panel Dashboard](https://github.com/user-attachments/assets/601553e9-2bdd-433e-b558-5387e49c4f15)

## License

Open source and free to use.