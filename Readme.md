# Readme

Start learning from here: <https://www.w3schools.com/php/php_functions.asp>

To serve a particular path with apache2, read the guide @ linux-walkthrough.md file.

## Tips

- Want to make your prettier work with formatting php file as well..?

Just install this package `npm i -D @prettier/plugin-php` to your project and you are good then.., (i.e., saving a file now also formats php files as well).
src: <https://stackoverflow.com/a/63228491>

- Run command: `php -S localhost:8000` to run current folder at 8000 port.

Read about this awesomeness @ SO's answer: <https://stackoverflow.com/a/21872484/10012446>

- Via apache2: Visit: localhost/1.php to run a php file for browser.

- The file name must have extension .php otherwise the html content will render for sure but the php code won't execute at all.

Browse `localhost/docs` to view the default page of apache2 server.

## continue doing from below link

<https://www.w3schools.com/php/php_variables.asp>

## About live php server setup

Note you must specify `--port 8080` in live-server command, coz that seems to cause any problem and live reloding in browser isn't working that way.

- live web server from php: <https://github.com/ritwickdey/live-server-web-extension>
- <https://stackoverflow.com/questions/60678203/is-it-possible-to-use-live-server-for-php-with-autoreload-on-save>
- if ever get free try this another promising extension(its popular on vscode though: <https://marketplace.visualstudio.com/items?itemName=ziishaned.livereload>).
