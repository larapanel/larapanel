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

Please note that panel fonts will be published in the following directory :

```

resources/fonts/

```

### step 2 :
Run following cli command :

```

npm run dev

```

### Usage

Not available yet...
