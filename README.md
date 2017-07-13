# Error-Page-Raspberry
Custom error page for Apache2, with a Raspberry look and feel.

## Preview

![alt text](https://github.com/marc0tjevp/Error-Page-Raspberry/raw/develop/preview.png "404 page")

## Usage

### Configure Apache to use custom error documents
You can add the following lines to your Apache config or .htaccess.

More information about handling custom error pages can be found in the [Apache Documentation](https://httpd.apache.org/docs/2.4/custom-error.html)
```
ErrorDocument 403 /error/error.php
ErrorDocument 404 /error/error.php
ErrorDocument ...
```

### Adding status codes
You can add status codes to the page by adding an array to the $codes variable.
``` php
403 => array('403 - Forbidden', 'The page you were trying to reach is absolutely forbidden for some reason.'),
```
The first entry is the title which shows as an h3 tag on the page. The second entry is the description right beneath it.

### Adding buttons
You can also add buttons for specific status codes. You can add the link for this button in the array.

``php
500 => array('500 - Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.', "reportbug.php"),
``

The title of the button is handeled in the style.css file.

``css
.btn-raspberry[data-statuscode*="500"]:after {
    content: "Report a bug";
}
``

### File paths
In the error.php file, change the standard "/error/" in all file paths to your folder. You can also use "$_SERVER['DOCUMENT_ROOT']" if you need to.

# Contributors
- [Bas van Driel](https://www.github.com/basvandriel) ([@bvandriel](https://www.twitter.com/bvandriel))
