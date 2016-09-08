# Syrup

### App Key

[Create A New Application](https://github.com/settings/applications/new)

Authorization Callback Url must match GITHUB_REDIRECT_URL in .env

### Config(Homestead)

`cp .env.example .env`

`mysql -u homestead -psecret`

`create database syrup;`

`php artisan migrate`

### Install

`npm install`

`composer install`
