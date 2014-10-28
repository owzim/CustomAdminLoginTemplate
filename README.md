# Custom Admin Login Template

#### for ProcessWire 2.5

Make your own admin login form.

#### Istallation

This module's files should be placed in /site/modules/CustomAdminLoginTemplate/

#### Usage

Create a file called `admin-login.php` in your templates folder or copy the `admin-login.example-template.php` and rename it.

You can set a custom path and filename with `$config->paths->loginTemplate` in your `/site/config.php`.

Example:

```PHP
$config->paths->loginTemplate = $config->paths->templates . 'my-admin-login.php';
```

#### Use case

To brand the login form without branding the whole admin theme, if you want to expose the admin login page on your site somewhere.

#### Change Log

0.1.0

- initial version
