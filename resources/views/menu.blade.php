<!-- resources/views/menu.blade.php -->
@extends('Components.Layout', ['username' => $username])


@section('title', 'Menu')

@section('content')
    <main class="content-main">
        <section class="menu-section">
            <h2>Cafe Menu</h2>
        </section>

        <section class="menu-features">
            <div class="menu-feature">
                <i class="fas fa-coffee"></i>
                <h3>BREAKFAST/SNACK STAPLES</h3>
                <ul>
                    <li>Pancakes/Crepes with toppings - ₱35.00</li>
                    <li>Egg Sandwiches - ₱25.00</li>
                    <li>Yummy Burgers - ₱40.00</li>
                    <li>Ground Beef Cheesy Tacos - ₱75.00</li>
                    <li>Small Pansit/Bihon Guisado - ₱50.00</li>
                </ul>
            </div>
            <div class="menu-feature">
                <i class="fas fa-pizza-slice"></i>
                <h3>LUNCH/DINNER WITH FREE SOUP OF THE DAY</h3>
                <h3>Steamed rice with buttered vegetables to go in:</h3>
                <ul>
                    <li>Longganisa - ₱60.00</li>
                    <li>Embutido - ₱80.00</li>
                    <li>Chicken Cordon Bleu - ₱80.00</li>
                    <li>Burger Steaks - ₱70.00</li>
                </ul>
            </div>
            <div class="menu-feature">
                <i class="fas fa-wifi"></i>
                <h3>DRINKS/BEVERAGES</h3>
                <ul>
                    <li>Hot Coffee - 20.00</li>
                    <li>Wintermelon Tea with black pearl - ₱50.00</li>
                    <li>Cold Caramel Coffee - ₱50.00</li>
                    <li>Fruit Smoothies - ₱60.00</li>
                    <li>Soda Drinks - ₱20.00</li>
                </ul>
            </div>
        </section>
    </main>
@endsection
