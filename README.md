<h1 style='font-weight:800; text-align:center;'><span style='color:#0f766e;'>BLIS</span><span style='color:#60a5fa;'>STORE</span></h1>

<p style='text-align: center; color: #697281;'>v 1.0.0</p>

# What is?

Blisstore is an online store created to satisfy the online commerce to all Central America. In this store you can find all kinds of products, such as:

* Technology
* Electronics
* Fashion
* Books
* Health

This project is implemented with **laravel** using **composer** as dependency manager, **git** as version control system, **tailwind css** to add style in a dynamic way and **flowbite** to get components.

# Feautures

This project currently has only a user registration and login system.

In this project are integrated features of laravel. The migrations are custom made to be able to successfully create our database, including foreign keys. The forms are validated using custom requests for each one, this way the correct functioning of the application is guaranteed. The passwords are stored in the database using hash, to ensure the security of the users, this is done using mutators in the user table model.

# Database
Our database is tailor-made to start this project. If you want to understand a little more about how it works, in the following image is the layout:

![BLISSTORE DB](/public/database.png "DB")

# Limitations

* The project does not yet have protection against brute force attacks. This will be implemented in a future update.

* This project does not yet have a two-step verification system. In the next version these features will be added.

* This project does not yet have a password recovery system. In the next version these features will be added.

