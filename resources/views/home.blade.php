<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Track</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #F8FAFC; /* لون خلفية فاتح */
            color: #374151; /* لون نص داكن */
            font-family: 'Roboto', sans-serif; /* استخدام خط Roboto */
        }
        .header-bg {
            background-color: #1E293B; /* لون خلفية الرأس */
        }
        .header-text {
            color: #E5E7EB; /* لون نص الرأس */
        }
        .button-bg {
            background-color: #6D28D9; /* لون خلفية الزر */
        }
        .button-hover-bg {
            background-color: #5B21B6; /* لون خلفية الزر عند التمرير */
        }
        .accent-color {
            color: #6D28D9; /* لون مميز */
        }
        .accent-bg {
            background-color: #F3F4F6; /* لون خلفية مميزة */
        }
        .logo-color-1 {
            color: #6D28D9; /* لون اللوجو 1 */
        }
        .logo-color-2 {
            color: #F97316; /* لون اللوجو 2 */
        }
        .logo-color-3 {
            color: #2563EB; /* لون اللوجو 3 */
        }
    </style>
</head>
<body class="font-sans">
    <header class="container mx-auto p-4 flex justify-between items-center header-bg">
        <div class="text-2xl font-bold header-text">Train Track</div>
        <nav>
            <a href="#" class="header-text hover:text-white mx-2">Home</a>
            <a href="#" class="header-text hover:text-white mx-2">Track</a>
            <a href="#" class="header-text hover:text-white mx-2">About Us</a>
            <a href="#" class="header-text hover:text-white mx-2">Contact Us</a>
        </nav>
    </header>

    <section class="container mx-auto p-4 flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4 accent-color">The Fast Track<br>to Your Perfect Internship</h1>
            <p class="text-lg text-gray-400 mb-8">On the right track to your perfect internship - smart matching for career success.</p>
            <button class="button-bg hover:button-hover-bg text-white font-bold py-2 px-4 rounded">Try Train Track Now</button>
        </div>
        <div class="relative w-1/2">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-orange-500 rounded-full filter blur-3xl opacity-75"></div>
            <div class="relative">
                <div class="text-8xl font-bold text-gray-600">T</div>
            </div>
        </div>
    </section>
</body>
</html>