<p align="center">
    <a href="https://github.com/JakyeRU/snowflake" target="_blank">
        <img src="https://raw.githubusercontent.com/JakyeRU/snowflake/main/.github/logo/Snowflake-logos_transparent.png" height=200>
    </a>
</p>

<p align="center">
    <img src="https://img.shields.io/github/workflow/status/JakyeRU/snowflake/Run%20tests?style=for-the-badge" alt="build">
    <img src="https://img.shields.io/github/v/release/JakyeRU/snowflake?color=blue&style=for-the-badge" alt="release">
</p>

# About snowflake
Snowflake is a package for Laravel that allows <a href="https://en.wikipedia.org/wiki/Snowflake_ID" target="_blank">Twitter's 64 bit snowflake</a> to be used as primary identifier for models.

# Advantages over other identifiers
* Keys begin with a timestamp
* Keys end with a random number, so guessing the size of the table is impossible
* Keys consist entirely of integers, which are handled more efficiently than strings
* Faster key generation (<1ms)
  * Standard UUID v4 - 5.6 milliseconds
  *  Sortable UUID v4 - 8.3 milliseconds
  *  ULID             - 3.1 milliseconds
  *  **Snowflake        - 0.4 milliseconds**
  * [Source](https://itnext.io/choosing-the-right-data-type-means-of-generating-unique-primary-keys-d7aac92968c6)

# Installation
```shell
composer require jakyeru/snowflake
```

# Usage 
```php
resolve('snowflake')->id(); // ---> 112871594573041664
```
# Usage with Eloquent Models
```php
<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Jakyeru\Snowflake\Traits\HasSnowflakes;

class User extends Authenticatable
{
    use HasSnowflakes;
}
```