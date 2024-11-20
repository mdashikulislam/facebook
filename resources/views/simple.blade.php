
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Sidebar Menu</title>
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #2c2f36; /* Optional: Set a background color */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        /* Ensure the preloader gif scales well */
        #preloader img {
            max-width: 20%; /* Adjust width */
            height: auto; /* Maintain aspect ratio */
        }
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            background-color: #2c2f36; /* Softer dark background */
            flex-direction: column;
        }

        /* Partnership Logos */
        .partnership-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            position: absolute;
            top: 20px; /* Adjust position from top */
            left: 50%;
            transform: translateX(-50%);
            z-index: 10; /* Ensure it's above other content */
        }

        .partnership-logos img {
            height: auto;
        }

        .partnership-logos .nike-logo {
            max-width: 200px; /* Increased Nike logo size */
        }

        .partnership-logos .robert-half-logo {
            max-width: 250px; /* Increased Robert Half logo size */
        }

        .partnership-logos .partnership-x {
            font-size: 50px; /* Smaller "X" */
            color: white;
            font-weight: bold;
            margin: 0 20px;
        }

        /* Sidebar */
        .sidebar {
            width: 80px;
            background-color: #1a1a1a; /* Dark gray */
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            position: fixed; /* Keep sidebar in place */
            height: 100%;
            top: 0;
            left: 0;
            z-index: 5; /* Ensure the sidebar is below the logos */
        }

        /* Sidebar Logo */
        .sidebar .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        .sidebar .logo img {
            max-width: 50px;
        }

        /* Careers Text */
        .careers-text {
            font-size: 10px;
            color: white;
            font-weight: bold;
            font-family: 'Nike Careers Icons', sans-serif; /* Nike Careers Icons font */
            margin-top: 11px;
        }

        /* Menu Items */
        .menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 40px; /* Spacing between menu items */
        }

        .menu-item {
            writing-mode: vertical-rl; /* Vertical text */
            transform: rotate(180deg); /* Flip the vertical text */
            font-size: 12px;
            color: #f26b1d; /* Orange text */
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
        }

        .menu-item:hover {
            color: white;
            cursor: pointer;
        }

        .divider {
            width: 40px;
            height: 1px;
            background-color: #666; /* Gray line divider */
        }

        /* Footer Icons */
        .footer-icons {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .footer-icons img {
            width: 20px;
            height: auto;
            opacity: 0.8;
        }

        .footer-icons img:hover {
            opacity: 1;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div id="preloader">
    <img src="{{asset('preloader.gif')}}" alt="Loading...">
</div>
<!-- Partnership Logos -->
<div class="partnership-logos">
    <img src="nike-logo.png" alt="Nike Logo" class="nike-logo">
    <span class="partnership-x">X</span>
    <img src="robert-half-logo.png" alt="Robert Half Logo" class="robert-half-logo">
</div>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Logo Section -->
    <div class="logo">
        <img src="nike-logo.png" alt="Nike Careers Logo">
        <!-- Careers Text -->
        <div class="careers-text">CAREERS</div>
    </div>

    <!-- Menu Items -->
    <div class="menu">
        <a href="#" class="menu-item">Search Jobs</a>
        <div class="divider"></div>
        <a href="#" class="menu-item">Find Your Fit</a>
    </div>

    <!-- Footer Icons -->
    <div class="footer-icons">
        <img src="heart-icon.png" alt="Favorites Icon">
        <img src="profile-icon.png" alt="Profile Icon">
    </div>
    <script>
        window.addEventListener('load', function () {
            const preloader = document.getElementById('preloader');
            const content = document.getElementById('content');
            setTimeout(() => {
                preloader.style.display = 'none';
                content.style.display = 'block';
            }, 50000);
        });
    </script>
</div>
</body>
</html>
