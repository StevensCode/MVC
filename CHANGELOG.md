# CHANGELOG

## 14-11-2016

* Added Vagrant support to allow for easier testing and use of app
* Added Weather app that hits weather.com API to provide weather of Detroit, MI
* Changed css file colors and margin

## 22-09-2016

* Made all files that use `Psr\Http\Message\ServerRequestInterface` and `ResponseInterface` more DRY
* Moved calculations to model file `Calc.php`
* Changed calculation functions to private
* Added appropriate docblock descriptions
* Linked `RESULT` to .twig view

## 21-09-2016

* Added `Bootstrap.php` file to simplify `index.php`
* Added `routes.yml` file for routing app
* Changed way Post/Model handle logic

## 19-09-2016

* Changed GET/POST so Calculator app worked the way it was intended to

## 16-09-2016

* Configured MVC app for twig templates
* Added brief Spec in `README.me` file

## 15-09-2016

* Updated composer.json file to include 2nd dev
* Added `mockery`, `twig`, `symfony`, and `phpunit`

## 14-09-2016

* Changed index.php to remove excess code

## 12-09-2016

* Added Slim Framework to enhance app

## 08-09-2016

* Changed namespaces and filename for Model
* Added docblock to PHP for clarity on use
* Fixed `$operator` and `$operand` mislabel
* Changed `getAnswer( )` to private function

## 07-09-2016

* Initial commit
* Added README.md
