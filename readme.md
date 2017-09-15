# What's this?

This repo contains codes that will be used as educational materials for my `TechTalk` at [LaraBits: First Steps to Laravel](https://www.facebook.com/pampdev/photos/a.1895880487314456.1073741839.1780609138841592/2006207479615089/?type=3&theater), a seminar that will be held at Cloudstaff, SM Clark, Angeles City, Pampanga Philippines. The seminar will be held by [Pampanga Developers Group](https://www.facebook.com/pampdev/), on September 16, 2017. See full list on [my post](https://aprilmintacpineda.github.io/2017/09/05/larabits-tech-talk/)

# Run this

```
git clone https://github.com/aprilmintacpineda/larabits-demo-3.git
composer install
composer run post-root-package-install
php artisan key:generate
npm install -D
php artisan migrate
npm run dev
php artisan serve
```

Then open your browser on [localhost:8000/](http://localhost:8000/)

### Notes

The `database/database.sqlite` was intentionally added to for easy setup.