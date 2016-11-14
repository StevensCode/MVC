# Starter for MVC Calculator.

## For use:

* Clone repo, ensure to use composer update to download most up-to-date dependencies

* For quick and painless through Terminal:
 1. open your CLI
 1. change directory to public folder
 1. enter php -S 0.0.0.0:8088 #or whichever port you'd like to use

* To get a Vagrant Box set up:
 1. edit and amend end of /etc/hosts file to have '192.188.10.10 MVC.app' at the end
 1. while in MVC folder, enter command vagrant up
 1. navigate to MVC.app/calculate for calculator and MVC.app/weather for the weather

# Overview:
## MVC Calculator
* MVC Calculator is a Calculator application that lets people manipulate numbers using these operators:
 - add
 - subtract
 - multiply
 - divide

## Scenario:
Not sure what 1 + 1 is? Enter the number '1', select the '+' operator, enter a second '1', then select calculate! The answer appears for the user to see!

## Non Goals:
This version will not support advanced features:
 - sin and cos
 - using '(' or ')' for order of operations
 - manipulating more than two numbers at a time

## MVC Weather App
* MVC Weather is an application that will tell you the current Temperature in F for Detroit, MI
 - That's it!

## Scenario:
Want to know the weather in Detroit, MI? Navigate to MVC.app/weather and take a look!

## Non Goals:
This version will not support advanced features:
 - Finding weather anywhere else but Detroit, MI
 - Display weather in anything but fahrenheit
