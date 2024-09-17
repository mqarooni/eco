# اللجنة العليا لرعاية شؤون الأشخاص ذوي الاعاقة

## Overview
This project is a private web application developed by **Code Crafter Company**. It is a proprietary project built exclusively for the **Bahrain Government** and specifically for the **اللجنة العليا لرعاية شؤون الأشخاص ذوي الاعاقة**. Unauthorized use, distribution, or modification of this project is strictly prohibited.

The application is built using Laravel and OpenAdmin, designed to provide a robust backend for content management and an intuitive frontend for users. The project is currently structured as a monolithic application but is designed to be split into separate frontend and backend services for deployment.

## Features
- **Admin Panel**: Manage content, users, and settings using OpenAdmin.
- **API**: A RESTful API to serve the frontend with necessary data.
- **Frontend**: A user-facing application that interacts with the backend via API calls.
- **Security**: Backend access is restricted and protected by authentication and authorization mechanisms.

## Tech Stack
- **Backend**: Laravel (PHP), MySQL
- **Frontend**: HTML, CSS, JavaScript (potential for Vue.js or React)
- **Admin Panel**: OpenAdmin

## Local Development Setup
### Prerequisites
- PHP 8.x
- Composer
- Node.js & npm (for frontend assets)
- MySQL

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/codecrafter05/SocialGov.git
   cd SocialGov
