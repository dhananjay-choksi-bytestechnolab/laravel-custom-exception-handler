<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Custom Exception Classes
    |--------------------------------------------------------------------------
    | List of exception class names to be handled.
    | Add more exception class names as needed.
    |
    */

    'exceptions' => [
        'Exception',
        'Error',
        'RuntimeException',
        'InvalidArgumentException',
        'LogicException',
        'LengthException',
        'OutOfBoundsException',
        'RangeException',
        'DomainException',
        'UnderflowException',
        'OverflowException',
        'BadFunctionCallException',
        'BadMethodCallException',
        'OutOfBoundsException',
        'UnexpectedValueException',
        'PDOException',
        'HttpRuntimeException',
        'HttpResponseException',
        'ModelNotFoundException',
        'ValidationException',
        'AuthenticationException',
        'AuthorizationException',
        'HttpException',
        'PostTooLargeException',
        'TooManyRequestsHttpException',
        'MaintenanceModeException',
        'TokenMismatchException',
        'DivisionByZeroError',
        // Add more exception class names as needed
    ],

    /*
    |--------------------------------------------------------------------------
    | Exception Messages
    |--------------------------------------------------------------------------
    | Messages for different exception types.
    | Add more exception messages as needed.
    |
    */

    'exceptions_messages' => [
        'Exception' => 'An exception occurred.',
        'Error' => 'An error occurred.',
        'RuntimeException' => 'A runtime exception occurred.',
        'InvalidArgumentException' => 'Invalid argument provided.',
        'LogicException' => 'A logic exception occurred.',
        'LengthException' => 'A length exception occurred.',
        'OutOfBoundsException' => 'An out-of-bounds exception occurred.',
        'RangeException' => 'A range exception occurred.',
        'DomainException' => 'A domain exception occurred.',
        'UnderflowException' => 'An underflow exception occurred.',
        'OverflowException' => 'An overflow exception occurred.',
        'BadFunctionCallException' => 'A bad function call exception occurred.',
        'BadMethodCallException' => 'A bad method call exception occurred.',
        'OutOfBoundsException' => 'An out-of-bounds exception occurred.',
        'UnexpectedValueException' => 'An unexpected value exception occurred.',
        'PDOException' => 'A database exception occurred.',
        'HttpRuntimeException' => 'An HTTP runtime exception occurred.',
        'HttpResponseException' => 'An HTTP response exception occurred.',
        'ModelNotFoundException' => 'A model not found exception occurred.',
        'ValidationException' => 'A validation exception occurred.',
        'AuthenticationException' => 'An authentication exception occurred.',
        'AuthorizationException' => 'An authorization exception occurred.',
        'HttpException' => 'An HTTP exception occurred.',
        'PostTooLargeException' => 'A post is too large exception occurred.',
        'TooManyRequestsHttpException' => 'Too many requests exception occurred.',
        'MaintenanceModeException' => 'Maintenance mode exception occurred.',
        'TokenMismatchException' => 'Token mismatch exception occurred.',
        'DivisionByZeroError' => 'Divide by zero error.'
        // Add more exception messages as needed
    ],

    /*
    |--------------------------------------------------------------------------
    | HTTP Status Codes
    |--------------------------------------------------------------------------
    | HTTP status codes for different exception types.
    | Add more exception status codes as needed.
    |
    */

    'exceptions_status_codes' => [
        'Exception' => 500,                     // Internal Server Error
        'Error' => 500,                         // Internal Server Error
        'RuntimeException' => 500,              // Internal Server Error
        'InvalidArgumentException' => 400,     // Bad Request
        'LogicException' => 500,                // Internal Server Error
        'LengthException' => 500,               // Internal Server Error
        'OutOfBoundsException' => 500,          // Internal Server Error
        'RangeException' => 500,                // Internal Server Error
        'DomainException' => 500,               // Internal Server Error
        'UnderflowException' => 500,            // Internal Server Error
        'OverflowException' => 500,             // Internal Server Error
        'BadFunctionCallException' => 400,      // Bad Request
        'BadMethodCallException' => 400,        // Bad Request
        'OutOfBoundsException' => 500,          // Internal Server Error
        'UnexpectedValueException' => 500,      // Internal Server Error
        'PDOException' => 500,                  // Internal Server Error
        'HttpRuntimeException' => 500,           // Internal Server Error
        'HttpResponseException' => 500,         // Internal Server Error
        'ModelNotFoundException' => 404,        // Not Found
        'ValidationException' => 422,           // Unprocessable Entity
        'AuthenticationException' => 401,       // Unauthorized
        'AuthorizationException' => 403,        // Forbidden
        'HttpException' => 500,                // Internal Server Error
        'PostTooLargeException' => 413,         // Payload Too Large
        'TooManyRequestsHttpException' => 429,  // Too Many Requests
        'MaintenanceModeException' => 503,      // Service Unavailable
        'TokenMismatchException' => 419,       // Authentication Timeout
        'DivisionByZeroError' => 500
        // Add more exception status codes as needed
    ],

    'custom_data' => [

        /*
        |--------------------------------------------------------------------------
        | Custom Data
        |--------------------------------------------------------------------------
        | Custom data for specific exceptions.
        | Example for 'DivisionByZeroError':
        | 'DivisionByZeroError' => [
        |     'custom_key' => 'your_expected_key',  // Custom data key
        |     'data' => [
        |         // Your custom data (can be an array, object, or any data)
        |     ]
        | ]
        |
        | To add custom data dynamically, you can use the config function as shown below:
        |
        | config([
        |     'custom_exception_handler.custom_data.DivisionByZeroError.custom_key' => 'your_expected_key', // string
        |     'custom_exception_handler.custom_data.DivisionByZeroError.data' => "Your data" // array, object
        | ]);
        |
        */
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Exception Messages
    |--------------------------------------------------------------------------
    | Default message for unhandled exceptions.
    |
    */

    'default_exceptions_messages' => "Something went wrong",

    /*
    |--------------------------------------------------------------------------
    | Default Exception Status Code
    |--------------------------------------------------------------------------
    | Default HTTP status code for unhandled exceptions.
    |
    */

    'default_exception_status_code' => 500,

    /*
    |--------------------------------------------------------------------------
    | Default Exception Response Data Key
    |--------------------------------------------------------------------------
    | The default key under which custom data is included in the exception
    | response. This key can be used to distinguish and access custom data
    | within the exception response.
    |
    */

    'default_exception_response_data_key' => 'data',

    /*
    |--------------------------------------------------------------------------
    | Default Exception Response Data
    |--------------------------------------------------------------------------
    | The default custom data that is included in the exception response.
    | This data is included using the 'default_exception_response_data_key'
    | configuration setting. When set as an empty array, no default custom
    | data will be included in the response by default.
    |
    */

    'default_exception_response_data' => []
];