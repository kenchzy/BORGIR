<?php
// You can later add PHP logic here for dynamic menu, orders, etc.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger & Fries Landing Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff8f0;
        }

        header {
            background-color: #d62828;
            color: white;
            padding: 20px 0;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 50px;
            background: white;
        }

        .text {
            flex: 1;
            min-width: 280px;
            padding: 20px;
        }

        .text h1 {
            font-size: 2.5em;
            color: #d62828;
        }

        .text p {
            color: #333;
            margin-bottom: 20px;
            line-height: 1.6;
            font-size: 18px;
        }

        .text button {
            padding: 12px 25px;
            background-color: #f77f00;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .text button:hover {
            background-color: #d65a00;
        }

        .image {
            flex: 1;
            min-width: 280px;
            text-align: center;
        }

        .image img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
            font-size: 14px;
        }

        /* Menu Image Sizing */
        .menu img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-top: 10px;
        }

        /* Menu Layout */
        .menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .menu-item {
            text-align: center;
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <header>
        🍔 Bur-fries dummy 🍟
    </header>

    <div class="container">
        <div class="text">
            <h1>Yummy Burgers & Crispy nga Fries</h1>
            <p>Welcome to the ultimate burger experience! Bite into our freshly grilled burgers made with 100% beef and enjoy them with a side of golden, crispy fries. Perfect for every craving.</p>
            <button>Order Now</button>
        </div>
        <div class="image">
            <img src="Burger-fries.png" alt="Burger and Fries">
        </div>
    </div>

    <!-- Menu Section -->
    <section class="container">
        <h2 style="text-align:center; color:#d62828;">Our Menu</h2>
        <div class="menu">
            <div class="menu-item">
                <img src="Burger.png" alt="BURGER">
                <h3>Classic Cheeseburger</h3>
                <p>Beef patty, cheddar cheese, lettuce, tomato, onion & our special sauce.</p>
            </div>
            <div class="menu-item">
                <img src="Fries.png" alt="Classic Fries">
                <h3>Golden Fries</h3>
                <p>Crispy, golden fries cooked to perfection and lightly salted.</p>
            </div>
            <div class="menu-item">
                <img src="combo-meal.png" alt="Combo Meal">
                <h3>Burger & Fries Combo</h3>
                <p>Your choice of burger with a generous serving of fries and a drink.</p>
            </div>
        </div>
    </section>

</body>
</html>
