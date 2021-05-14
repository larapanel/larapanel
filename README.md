# Larapanel
## Simple laravel panel

### getting started

#### installation

```

composer require larapanel/larapanel

```

#### Publish view and js files

```

php artisan vendor:publish --tag=larapanel

// for update :

php artisan vendor:publish --tag=larapanel --force

```

### Configuration

### step 1 :
After publishing new files, copy these two lines in your webpack.mix.js

```

.js('resources/js/vendor/larapanel/larapanel.js', 'public/modules/js')
.sass('resources/sass/vendor/larapanel/larapanel.scss', 'public/modules/css')

```

Please note that you can only have fonts in the following directory (because webpack will be confused in case if you use 2 directories for the fonts) :

```

resources/sass/vendor/larapanel/fonts/

```

for example, if you want to use awesome-font and iransans-font in your home.scss (located in resources/sass/home/home.scss) you must import fonts using the following directories :

```

@import '../vendor/larapanel/fonts/awesome/awesome-font.css';
@import '../vendor/larapanel/fonts/iransans/iransans-font.css';

```

### step 2 :
Run following cli command :

```

npm run dev

```

### Usage

Not available yet...
