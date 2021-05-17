# Readme

## learning path

Start learning from here: <https://www.w3schools.com/php/php_functions.asp>

## About live php server setup

Browser extension links:

[Chrome extension page](https://chrome.google.com/webstore/detail/live-server-web-extension/fiegdmejfepffgpnejdinekhfieaogmj/)

[Firefox extension page](https://addons.mozilla.org/en-US/firefox/addon/live-server-web-extension/).

The setting in the browser extension should be like that: ![Help image here...](/utils/instruction-img1.png)

The github repo of browser extension tool is [here](https://github.com/ritwickdey/live-server-web-extension).

With `live-sever` cli your server will run on origin: http://localhost:8080 and thus you can configure your browser live-server extension like shown below exactly(Note: We are serving our php server @ port 3000, see scripts in package.json for more details).

Note you must NOT (although we want it to run at port 8080 only, live-server by default server files @ port 8080 though) specify `--port 8080` in live-server command, coz that seems to cause any problem and live reloading in browser isn't working that way.

- live web server from php: <https://github.com/ritwickdey/live-server-web-extension>
- <https://stackoverflow.com/questions/60678203/is-it-possible-to-use-live-server-for-php-with-autoreload-on-save>
- if ever get free try this another promising extension(its popular on vscode though: <https://marketplace.visualstudio.com/items?itemName=ziishaned.livereload>).

## other

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
