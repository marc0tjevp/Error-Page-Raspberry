# Error-Page-Raspberry
Custom error page for Apache2, with a Raspberry look and feel.

## Usage

### Add errorpage to Apache Config.
You can add the following lines to your Apache config or .htaccess.

More information about handling custom error pages can be found in the [Apache Documentation](https://httpd.apache.org/docs/2.4/custom-error.html)
```
ErrorDocument 403 /error/error.php
ErrorDocument 404 /error/error.php
ErrorDocument ...
```

### Adding status codes.
You can add status codes to the page by adding a array to the $codes variable.
``` php
403 => array('403 - Forbidden', 'The page you were trying to reach is absolutely forbidden for some reason.'),
```
The first entry is the title which shows as an h3 tag on the page. The second entry is the description right beneath it.

### File paths
In the error.php file, change the standard "/error/" in all file paths to your folder. You can also use "$_SERVER['DOCUMENT_ROOT']" if you need to.
