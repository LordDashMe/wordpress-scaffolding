# Wordpress Scaffolding

:building_construction: :construction: :construction_worker: A kick starter project structure for wordpress.

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg?style=flat-square)](https://php.net/)

## Supported Web Server

- Apache

## Wordpress

- The Wordpress core codes registered as git submodule in ```/wordpress/```.

- Current git submodule version: 4.9.8

## Requirement(s)

- PHP version from 5.6.* up to latest.

- You can also check the latest wordpress requirements: <https://wordpress.org/about/requirements/>

## Install

- Recommended to install the package via Composer. Use the command below to install the package:

```txt
composer create-project lorddashme/wordpress-scaffolding <your-project-name>
```

## Usage

- Copy and rename the default file(s):

  - ```wp-config-sample.php``` > ```wp-config.php``` - To enable the wordpress config file.

  - ```htaccess-sample``` > ```.htaccess``` - To enable some security and override the apache host setup.

## License

- This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
