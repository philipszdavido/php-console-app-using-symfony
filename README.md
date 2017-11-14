# A PHP command-line application built using Symfony and Symfony/Console

This is a User Greetings console app built using PHP and Symfony/Console.

* Note: This app was built for my Medium article [Build a PHP console app using Symfony](https://medium.com/@kurtwanger40/build-a-php-console-application-using-symfony-692a876f416).

### Technologies
- PHP
- Symfony
- Symfony/Console

### Installation
* Clone this repo [here](https://github.com/philipszdavido/php-console-app-using-symfony).
* cd `php-console-app`
* Run `composer require symfony/console`

# Usage Options
    Console App v1.0.0

    Usage:
    command [options] [arguments]

    Options:
    -h, --help            Display this help message
    -q, --quiet           Do not output any message
    -V, --version         Display this application version
        --ansi            Force ANSI output
        --no-ansi         Disable ANSI output
    -n, --no-interaction  Do not ask any interactive question
    -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

    Available commands:
    greet  Greet a user based on the time of the day.
    help   Displays help for a command
    list   Lists commands

# Using the app

```sh
./console greet Nnamdi
```

Output
```sh

====**** User Greetings Console App ****====
==========================================

Good evening, Nnamdi
```
### Contribute
1. Fork this repository
2. Clone it to your local machine
3. Create a branch for the feature you want to implement
4. Push your changes to your repository
5. Submit a pull request

- Issue Tracker: https://github.com/philipszdavido/php-console-app-using-symfony/issues
- Source Code: https://github.com/philipszdavido/php-console-app-using-symfony

### Support
If you are having issues, please let me know.
Mail me at: kurtwanger40@gmail.com
