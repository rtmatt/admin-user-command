# Admin User Creation Command
Create admin users quickly on the command line

## Installation
### Install Dependencies
``` bash 
composer require rtmatt/admin-user-command
```

### Register Provider
Within `config/app.php`, add the following to the `providers` array:
  
``` php 
RTMatt\AdminUserCommand\AdminUserCommandServiceProvider::class,
```
  
## Usage

``` bash 
php artisan adminuser:make
```

You will be prompted to define a name, email and permission level.  Enter info for the prompts. 

At the end, it will spit out the temporary password. 
