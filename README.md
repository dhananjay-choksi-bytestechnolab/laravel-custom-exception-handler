Certainly, here's a sample README file for your Laravel package, the Custom Exception Handler:

```markdown
# Custom Exception Handler for Laravel

The **Custom Exception Handler for Laravel** is a package designed to provide custom exception handling within your Laravel application. It allows you to specify how different types of exceptions should be handled, set custom HTTP response codes, define error messages, and even provide custom data to be included in the response.

## Installation

You can easily install the package via Composer:

```shell
composer require bytestechnolabs/custom-exception-handler
```

## Configuration

After installation, you can configure the Custom Exception Handler by publishing the configuration file. This file enables you to define which exceptions to handle and how they should be handled.

To publish the configuration file, run the following command:

```shell
php artisan vendor:publish --provider="BytesTechnolabs\CustomExceptionHandler\CustomExceptionHandlerServiceProvider"
```

## Usage

### Custom Exception Handling

The Custom Exception Handler allows you to handle specific exceptions differently. You can customize:

- Error messages
- HTTP response codes
- Custom data to include in the response

Here is an example of how to handle a `CustomException`:

1. Add the exception class name to the configuration:

```php
'exceptions' => [
    // ... Other exception classes
    'CustomException',
],
```

2. Set the desired error message, HTTP status code, and custom data for the `CustomException`:

```php
'exceptions_messages' => [
    // ... Other exception messages
    'CustomException' => 'A custom exception occurred.',
],

'exceptions_status_codes' => [
    // ... Other exception status codes
    'CustomException' => 400,
],

'custom_data' => [
    'CustomException' => [
        'custom_key' => 'custom_data_key',
        'data' => ['custom' => 'data'],
    ],
],
```

### Dynamic Custom Data

You can also add custom data dynamically during exception handling by using the `CustomDataHelper` class provided by the package:

```php
use BytesTechnolabs\CustomExceptionHandler\CustomDataHelper;

try {
    // Code that may throw an exception
} catch (\Exception $exception) {
    // Add custom data to the response
    CustomDataHelper::addCustomDataToConfig($exception, ['custom' => 'data'], 'custom_data_key');

    // Rethrow the Exception
    throw $exception;
}
```

## Support and Issues

If you encounter any issues or have questions about the **Custom Exception Handler for Laravel**, please [report them on GitHub](https://github.com/bytestechnolabs/custom-exception-handler/issues).

## License

This package is open-source software licensed under the [MIT License](https://github.com/bytestechnolabs/custom-exception-handler/blob/master/LICENSE).

## Author

- [Dhananjay Choksi](mailto:dhananjay.choksi@bytestechnolab.com)

## Version

The current version of the package is 1.6.0.

## Changelog

For release notes and changes, please refer to the [GitHub releases](https://github.com/bytestechnolabs/custom-exception-handler/releases).

We hope you find the **Custom Exception Handler for Laravel** useful. If you have any suggestions or improvements for this package, feel free to contribute to the project on GitHub.
```

You can copy and paste this README into your project's README.md file and make any necessary adjustments to reflect your package's specifics.