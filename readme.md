# IASIG Senior Project

## Setting up Project

Here are the steps to setup the project This is all in the terminal/shell:

- Make sure you have Composer/Laravel, Node, Bower, and Yarn and MYSQL installed
- commandline navigate to the project root and run the following commands exactly - if you run into errors you have to debug them before moving on
- composer install
- sudo npm install -g npm bower yarn
- yarn install
- sudo bower install --allow-root
    Create a blank database called aisig and add a username and password in MYSQL
    add that username and password to your .env file "DB_USERNAME" and "DB_PASSWORD"
- php artisan migrate
- php artisan db:seed
- sudo npm run dev

At this point you may have to look up how to set up a nodeJS application for production on ubuntu
https://www.digitalocean.com/community/tutorials/how-to-set-up-a-node-js-application-for-production-on-ubuntu-16-04

## Configure fixes I had to make to fix image linking problems with the site
Comment out sending emails in the register controller (*** Commented out until mail server is functioning ***)
delete the symlink storage in public
move contents from storage/app/public to public/storage/
Search and Replace `asset('image/'` with `asset('storage/image/'` in all views

## Updating the database

If you rewrite the seeds, use this command to refresh the database with your new data:

- php artisan migrate:refresh --seed

## Website

<a href="httpnps://test-iasig.com/" target="_blank">test-iasig.com</a>