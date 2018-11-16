# Desarrollo_Aplicaciones_Web
Este repositorio contiene el proyecto final de la clase "TC2026 - Desarrollo de aplicaciones web", ITESM, MTY.
Hecho por Emilio Chavez y Eugenio Soberon

# Generalidades
El proyecto es una página web que muestra catalogos de agendas y permite a los usuarios registrarse y hacer compras. 

# Arquitectura
Se utilizó PHP con una arquitectura MVP, con vistas parciales y generación de contenido dinámico en base a la DB.

# Estructura
Proyecto/
|--- about.php
|--- actionManager
|    |--- authenticate
|    |    |--- is_user_logged.php
|    |    |--- process_login.php
|    |    |--- process_logout.php
|    |    |--- register_new_user.php
|    |    |--- user_exists.php
|    |--- login.php
|    |--- orders
|    |    |--- create_order.php
|    |    |--- get_new_order.php
|    |    |--- get_user_orders.php
|    |--- planners
|        |--- get_all_planners.php
|--- catalogo.php
|--- config.php
|--- css
|    |--- album.css
|    |--- form-validation.css
|    |--- front_page.css
|    |--- signin.css
|--- dataAccess
|    |--- dbConnection.php
|    |--- orderDAO.php
|    |--- plannerDAO.php
|    |--- userDAO.php
|--- img
|    |--- brand_logo.png
|    |--- catalogo
|    |    |--- 1.jpg
|    |    |--- 2.png
|    |    |--- 3.jpg
|    |    |--- 4.png
|    |    |--- 5.png
|    |    |--- 6.png
|    |    |--- 7.png
|    |    |--- 8.png
|    |    |--- 9.png
|    |--- coffee.jpg
|    |--- landing.png
|    |--- landing2.png
|--- index.php
|--- js
|    |--- catalog.js
|    |--- home.js
|    |--- load_catalog.js
|    |--- login.js
|    |--- order.js
|--- model
|    |--- Order.php
|    |--- Planner.php
|    |--- User.php
|--- my_404.php
|--- new_order.php
|--- shared
|    |--- _global_footer.php
|    |--- _header.php
|    |--- _nav_bar.php
|    |--- _order_row.php
|    |--- _planner_template.php
|--- user_orders_index.php
|--- views
    |--- login.php
    |--- registration.php
