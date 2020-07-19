## Installation

**Clone the repo**

```bash
git clone https://github.com/roevevgen/shoping.git
```

**Switch into the newly created repo folder**

```bash
cd shoping
```

**Create the `.env` file**

```bash
cp .env.example .env
```

**Install the dependencies**

**First, download the Laravel installer using Composer:**

```bash
composer global require laravel/installer
npm install
```

**Make sure to place Composer's system-wide vendor bin directory in your $PATH
so the laravel executable can be located by your system. This directory
exists in different locations based on your operating system; however,
some common locations include:**

````bash


    macOS: $HOME/.composer/vendor/bin
    Windows: %USERPROFILE%\AppData\Roaming\Composer\vendor\bin
    GNU / Linux Distributions: $HOME/.config/composer/vendor/bin or $HOME/.composer/vendor/bin



````

**Generate encryption key**

```bash
php artisan key:generate
```

**Seed the database**

```bash
php artisan migrate:fresh --seed
```
