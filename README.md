HTML Mail Link
=========================

Simple way to create HTML for email link.

Simply create an instance sending the email as the 1st argument and either use the object as a string or call getHTML() on it to automatically generate HTML for a mailto link.

Example:

`new HTMLMailLink( 'waughjai@gmail.com' );`

Generates the HTML:

`<a href="mailto:waughjai@gmail.com'">waughjai@gmail.com</a>`

For custom value shown in the link, push a hash map as the optional 2nd argument with the value you want in the "value" key:

Example:

`new HTMLMailLink( 'waughjai@gmail.com', [ "value" => "Email me." ] );`

Generates the HTML:

`<a href="mailto:waughjai@gmail.com'">Email me.</a>`

This hash map can also be used to send all other valid HTML5 attributes, as well as other options. See HTMLLink source code at https://github.com/waughjai/html-link for mo' details.
