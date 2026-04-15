# My First Project

A simple web application with a full landing page and authentication.

## Files

- `index.html`: Full landing page with hero, about, contact sections, and navigation. Uses Bootstrap for styling and responsiveness.
- `login.html`: Login form.
- `login.php`: PHP script to handle login.
- `register.html`: Registration form.
- `register.php`: PHP script to handle registration.
- `about.html`, `contact.html`: Additional pages (basic content).

## Usage

1. To run the application, you need a PHP server. You can use XAMPP, WAMP, or PHP's built-in server.

2. Place the files in your web server's document root (e.g., htdocs for XAMPP).

3. Start the server.

4. Open `index.html` in your browser to view the landing page.

5. Navigate to login or register from the menu.

6. For login: username: `admin`, password: `password`.

## Features

- Responsive landing page with Bootstrap
- Mobile-friendly navigation
- Login and registration forms
- Basic styling

## Dependencies

- Bootstrap 5.3.0 (loaded from CDN)

## Troubleshooting

- If PHP is not running, you'll see the PHP code as text. Ensure your server is configured for PHP.
- For security, in a real application, use proper authentication, database storage, and password hashing.
- Ensure internet connection for Bootstrap CDN.