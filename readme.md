# Syrup

### App Key

[Create A New Application](https://github.com/settings/applications/new)

Authorization Callback Url must match GITHUB_REDIRECT_URL in .env

### Install

`npm install`

`composer install`

### Config(Homestead)

`cp .env.example .env`

`mysql -u homestead -psecret`

`php artisan migrate`
