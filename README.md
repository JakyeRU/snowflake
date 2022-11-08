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

# Publishing Configuration
```shell
php artisan vendor:publish --tag=snowflake-config
```

# Contributing
Thank you for considering contributing to Snowflake! You can read the contribution guide [here](https://github.com/JakyeRU/snowflake/blob/main/.github/CONTRIBUTING.md).

# Code of Conduct
In order to ensure that the community is welcoming to everyone, please review and abide by the [Code of Conduct](https://github.com/JakyeRU/snowflake/blob/main/.github/CODE_OF_CONDUCT.md).

# Security Vulnerabilities
If you need to report a security vulnerability please read our [Security Policy](https://github.com/JakyeRU/snowflake/blob/main/.github/SECURITY.md).

# License
snowflake is open-sourced software licensed under the [MIT](https://github.com/JakyeRU/snowflake/blob/main/LICENSE) license.

If you encounter any other error(s), please open an issue on [GitHub](https://github.com/JakyeRU/snowflake/issues/new/choose).