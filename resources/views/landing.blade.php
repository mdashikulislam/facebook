
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job at Nike</title>
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
            align-items: center;
            justify-content: center;
            text-align: center;
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

        /* Text about partnership */
        .partnership-text {
            color: white;
            font-size: 20px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            font-weight: bold;
            line-height: 1.4;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); /* Subtle text shadow */
        }

        .partnership-text strong {
            color: #f26b1d; /* Highlight the important text */
        }

        /* Transparent container */
        .schedule-container {
            background: rgba(255, 255, 255, 0.1); /* Slightly transparent white background */
            padding: 40px;
            margin-top: 50px;
            max-width: 700px;
            width: 100%;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2); /* Soft shadow for depth */
            color: white;
        }

        .schedule-container h3 {
            color: white;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .schedule-container p {
            color: white;
            font-size: 16px;
            margin-bottom: 20px;
            font-weight: 400;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); /* Subtle text shadow */
        }

        .schedule-container button {
            background-color: white; /* White background */
            color: black; /* Black text color */
            padding: 20px 50px;
            border: 2px solid black; /* Black border */
            border-radius: 8px;
            cursor: pointer;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .schedule-container button:hover {
            background-color: black; /* Black background on hover */
            color: white; /* White text color on hover */
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

        /* Logo Section */
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
        .block-img{
            width: 250px;
            height: 250px;
            margin-bottom: 30px;
            display: block;
        }
    </style>
</head>
<body>
<div id="preloader">
    <img src="{{asset('preloader.gif')}}" alt="Loading...">
</div>
<!-- Partnership Logos -->
<div class="partnership-logos">
    <img src="{{asset('nike-logo.png')}}" alt="Nike Logo" class="nike-logo">
    <span class="partnership-x">X</span>
    <img src="{{asset('robert-half-logo.png')}}" alt="Robert Half Logo" class="robert-half-logo">
</div>

<!-- Text about partnership -->


<!-- Transparent container for scheduling -->
<div style="display: flex;align-items: center;gap: 50px">
    <div>
        <img class="block-img"  src="{{asset('img/1.jpg')}}" alt="">
        <img class="block-img" src="{{asset('img/3.jpg')}}" alt="">
    </div>
    <div>
        <div class="partnership-text">
            <p><strong>Apply for a job at Nike</strong> with Robert Half, a proud partner working with us to recruit you and help you do your best.</p>
        </div>
        <div class="schedule-container">
            <h3>Schedule Your Meeting with Robert Half</h3>
            <p>We're excited to help you take the next step in your career. Click below to schedule a meeting with a Robert Half recruiter. Let’s get you on the path to success with Nike.</p>
            <button onclick="window.location.href='{{route('calender')}}'">Continue with Calendly</button>
        </div>
        <div style="margin-top: 50px;max-width: 700px;">
            <img style="max-width: 200px;" src="{{asset('img/just.jpg')}}" alt="">
        </div>
    </div>
    <div>
        <img class="block-img" src="{{asset('img/2.jpg')}}" alt="">
        <img class="block-img" src="{{asset('img/4.jpg')}}" alt="">
    </div>
</div>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Logo Section -->
    <div class="logo">
        <img src="{{asset('nike-logo.png')}}" alt="Nike Careers Logo">
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
        <img src="{{asset('heart-icon.png')}}" alt="Favorites Icon">
        <img src="{{asset('profile-icon.png')}}" alt="Profile Icon">
    </div>
    <script>
        window.addEventListener('load', function () {
            const preloader = document.getElementById('preloader');
            const content = document.getElementById('content');
            setTimeout(() => {
                preloader.style.display = 'none';
                content.style.display = 'block';
            }, 1500);
        });
    </script>
</div>
</body>
</html>
