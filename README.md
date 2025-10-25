1 - Introduction

This project is an exercise proposed in the Fullstack PHP module, where the teacher asked us to implement a web app with some functionalities focused on managing a library. The original excercise text is the following:

    ###
    Write a program that allow to manage a little library. For each book, save:

    * title,
    * authors,
    * genre,
    * Dewey classification
    * physical position (by using a short code).

    Also:

     - Implement a search module to find books based on user inputs, wich mean filtered results;
     - Implement a physical position visualizer to help users locate their selected books inside the library;
     - Implement a genre-based list of all books available;
     - Implement an author-based list of all books available;

    Other funcionalities:

     - Manage the books loan;
     - Manage the users registration process throw the web app;
     - Implement a users-list with expired loans;
     - By using CSS, implement a coherent sytle with a small neighborhood library.
    ###

2 - Stack description

The project use this stack libraries/frameworks/technologies:
        - database: mysql
        - backend: laravel
        - frontend: SSR with Blade templates + Javascript functions

3 - Installation

    1: create an empty folder, then with promtp command type "git clone https://github.com/SuperPorz/Fullstack_LARAVEL_library.git";
    2: type "cd Fullstack_LARAVEL_library" to ensure your prompts will run from inside the project folder;
    3: if composer package is installed, type "composer update" (otherwise install it first);
    4: rename ".env.example" file into ".env", then edit with your local machine setup (like the host database, the user/psw etc.);
    5: create a DB on your MySQL DBMS and remember to name it the same as specified on the .env file;
    6: by opening a prompt, type the follow: "php artisan migrate" so the framework can create all tables correctly;
    7: then type the follow: "php artisan db:seed" so the framework can populate the DB with some data;
    8: type the follow: "php artisan key:generate", a security app key will be generated 
        (for more info: https://tighten.com/insights/app-key-and-you/);
    9: type "php artisan serve", after that u can type "127.0.0.1:8000" in your browser URL to see and test the APP.