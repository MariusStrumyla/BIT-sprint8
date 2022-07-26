## Sprint-8, PHP OOP CMS

# About:

-   Project is made using PHP OOP, CSS and Bootstrap.

# Project tasks:

-   Working PHP OOP CMS project;
-   clean code;
-   admin panel;
-   ability to Read (view) articles for admin and viewers;
-   ability to Create articles (admin only);
-   ability to Delete articles (admin only);
-   ability to Update articles (admin only);
-   project uploaded on Github pages.

# Installation / launch process:

1.   Download and install latest `MySQL` version;
2.   download and install latest `XAMPP` version. Run it and start Apache and MySQL server;
3.   clone this repository `https://github.com/MariusStrumyla/BIT-sprint8.git` into `htdocs` directory (xampp\htdocs);
4.   open MySQL workbench and create database named `cms`;
5.   import `dump.sql` file into your SQL database:
- open your MySQL Workbench;
- in the toolbar choose `Server` -> `Data Import` -> in the Import Options select `Import from Self-Contained File` -> choose Default Target Schema to `cms` -> press `Start Import` -> after completion refresh `Schema's` on the left;
6.    you are good to go;

7.    open your browser and type:

```sh
    localhost/BIT-sprint8/ - to load page for viewers;
    localhost/BIT-sprint8/admin.php - to access admin page;
    
    log in credentials:
    username: admin
    password: admin1234
```

# Author

-   This project was created by me - Marius Strumyla;
-   find me on [LinkedIn](https://www.linkedin.com/in/marius-strumyla-88b107217/).
