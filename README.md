# Spa and Saloon Booking System Made With Laravel
This is a very simple application for booking Spa and saloon services. For now it has no active payment services for sake of brevitiy and we really don't consider making any contract with any bank for demo application.  In this document I will show you how to run this application in windows.

## Basic Requirements for  running the app.

- Computer
- Internet Connection
- Mouse and keyboard (unless you are not a netrunner or something, I don't know)
- PHP installed
- Composer CLI
- Laravel CLI
- Mailtrap credentials
- XAMPP

## -PHP installation
[Download PHP](https://windows.php.net/download#php-8.0). 
After the download you have to create directory manually on your disk (e.g. C:/PHP). Extract the files to the directory you have created. Then you have create a path to that directory by adding path variable to your system's envoirement variables section. In order to do that you can search Edit Envoirement variables (Türkçesi Sistem ortam değişikliklerini düzenleyin) in your search bar or go to This Computer>properties>Advanced System settings>Advanced section, click the "Envoirement Variables" at the bottom.  In the following window on the top section. Find path select it and click edit. In the following window click add and add new path addressing the directory you have created (e.g. C:/PHP)

![1](https://user-images.githubusercontent.com/61189367/168450624-3419a4e5-f3a3-46c6-94a7-b1f4ba9b9eb3.JPG)
![2](https://user-images.githubusercontent.com/61189367/168450633-324ae801-899e-455a-ba13-30363c1daa03.JPG)
![3](https://user-images.githubusercontent.com/61189367/168450636-a038b1a6-4e3f-4b50-8029-d6b4398721ac.JPG)
![4](https://user-images.githubusercontent.com/61189367/168450639-3dd9073d-8794-470a-9c77-d92cd5e17b30.JPG)
![5](https://user-images.githubusercontent.com/61189367/168450640-214601c4-6257-43c3-8a47-178244c89f28.JPG)



Some of the version windows doesn't have the window like fifth window. There will be a lot simple window. You can simply follow the same steps then select the path and click edit add ; before entering adress of your path. 

In order to work with PhPyou have to configure your php.ini file. You can change your php.ini file with [mine](https://drive.google.com/file/d/1DNrgEgIqZKFS4x39uuN9vCXLrTYX4rdh/view?usp=sharing) but if you need  anything extra you can find the needed extension inside of your php.ini file and enable it simply by deleting ';' at the begining. 

Check your if PhP work by typing this to your cmd:
 
	php --version

## Composer Installation
You can download it [here](https://getcomposer.org/download/) with windows installer option. If you are masochist  you can try to install it manually.

## Laravel Installation
In your console simply type this:
	
	composer  global  require  "laravel/installer=~1.1"

## Mailtrap Credentials and your .env file
When you download this project through Github you won't have any .env file inside the directory of this project. You can create a new .env file (just create a new file and name it .env) or you can rename the '.env.example' to '.env'. Either way you have to copy .env.example into your .env file. After registering to mailtrap you will have to add an inbox. After creating your inbox, go into your inbox and click the SMTP Settings if it's not already selected. On the right panel you will see your credentials. Your username and password are right next to the 'user' writting like this ######;######. Before ; is your username and the after is your password. Take these to your .env file and paste it accordingly. You will have to change MAIL_FROM_ADDRESS which is the email address that you used to register your mailtrap account. As we are using Mailtrap, you will have to change MAIL_HOST to smtp.mailtrap.io. Lastly you have to change MAIL_PORT accordingly to your Smtp Settings which you can find besides 'url' at the end of whatever string written in there.

![6](https://user-images.githubusercontent.com/61189367/168450653-240aec28-7182-4dda-b0e8-454bab2f6a40.JPG)

![7](https://user-images.githubusercontent.com/61189367/168450788-0f0c7962-e942-4274-bb14-2ade3ea8942f.JPG)

![8](https://user-images.githubusercontent.com/61189367/168450754-22daeb97-2883-4ffe-9ff1-3ca243ca49e7.JPG)

![9](https://user-images.githubusercontent.com/61189367/168450761-7ea4e638-d262-4efb-8175-d0f2a19dddcd.JPG)

![10](https://user-images.githubusercontent.com/61189367/168450772-282d8850-120e-49c1-ba64-8ef9fc3e2f68.JPG)




## XAMPP Installation!

There is nothing special with XAMPP's installation. Download it here, install and run it. How ever you will have to configure your .env file's DB_CONNECTION section if you want to change anything about your db. However if you haven't changed anything or won't change anything you won't have to change anything.

Your .env will look like this. If you don't want to change anything it can stay like this.

## Installation of the App
Run these commands in order. 

	composer update
	composer install
After the installation run your XAMPP app. Start Apache and MySQL modules. Then press admin button of MySQL. Your browser will automatically open phpmyadmin page of your database. In this page open 'databases' tab and create a database called 'spa_and_resort'. I created tables under the name of this database so if the name is incorrect it won't work. If you wish to name it differently, don't. (Just kidding you can do that but I won't show it in here). 


![11](https://user-images.githubusercontent.com/61189367/168450660-41436cc1-2d93-4d6e-91a6-47559f89d931.JPG)

Finally you will have to run migrations. In order to do that open a console in project's directory. If you are using Git bash you can right click inside project directory and click git bash. however if you wish to use good ol' cmd. Run you cmd and simply find the project folder using cd command. If you are using git bash you will see (master) at the very end of the adress of the console. That means you are in the correct folder. When you are in the correct address run this command.

	php artisan migrate
If it works correctly you will see the tables inside 'spa_and_resort' database. This means we finished installing the app and connecting the database. In order to run the app run this command:
	
	php artisan serve
You will see the local address visit that local address in your browser and va la enjoy the application.
