<?php

return [
    'exceptions' => [
        [
            'exception_class_name' => 'Exception',
            'custom_response' => [
                'error' => 'Exception',
                'message' => 'An exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'Error',
            'custom_response' => [
                'error' => 'Error',
                'message' => 'An error occurred.',
            ],
        ],
        [
            'exception_class_name' => 'RuntimeException',
            'custom_response' => [
                'error' => 'RuntimeException',
                'message' => 'A runtime exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'InvalidArgumentException',
            'custom_response' => [
                'error' => 'InvalidArgumentException',
                'message' => 'Invalid argument provided.',
                'hi' => 'b'
            ],
        ],
        [
            'exception_class_name' => 'LogicException',
            'custom_response' => [
                'error' => 'LogicException',
                'message' => 'A logic exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'LengthException',
            'custom_response' => [
                'error' => 'LengthException',
                'message' => 'A length exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'OutOfBoundsException',
            'custom_response' => [
                'error' => 'OutOfBoundsException',
                'message' => 'An out-of-bounds exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'RangeException',
            'custom_response' => [
                'error' => 'RangeException',
                'message' => 'A range exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'DomainException',
            'custom_response' => [
                'error' => 'DomainException',
                'message' => 'A domain exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'UnderflowException',
            'custom_response' => [
                'error' => 'UnderflowException',
                'message' => 'An underflow exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'OverflowException',
            'custom_response' => [
                'error' => 'OverflowException',
                'message' => 'An overflow exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'BadFunctionCallException',
            'custom_response' => [
                'error' => 'BadFunctionCallException',
                'message' => 'A bad function call exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'BadMethodCallException',
            'custom_response' => [
                'error' => 'BadMethodCallException',
                'message' => 'A bad method call exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'OutOfBoundsException',
            'custom_response' => [
                'error' => 'OutOfBoundsException',
                'message' => 'An out-of-bounds exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'UnexpectedValueException',
            'custom_response' => [
                'error' => 'UnexpectedValueException',
                'message' => 'An unexpected value exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'PDOException',
            'custom_response' => [
                'error' => 'PDOException',
                'message' => 'A database exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'HttpRuntimeException',
            'custom_response' => [
                'error' => 'HttpRuntimeException',
                'message' => 'An HTTP runtime exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'HttpResponseException',
            'custom_response' => [
                'error' => 'HttpResponseException',
                'message' => 'An HTTP response exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'ModelNotFoundException',
            'custom_response' => [
                'error' => 'ModelNotFoundException',
                'message' => 'A model not found exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'ValidationException',
            'custom_response' => [
                'error' => 'ValidationException',
                'message' => 'A validation exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'AuthenticationException',
            'custom_response' => [
                'error' => 'AuthenticationException',
                'message' => 'An authentication exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'AuthorizationException',
            'custom_response' => [
                'error' => 'AuthorizationException',
                'message' => 'An authorization exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'HttpException',
            'custom_response' => [
                'error' => 'HttpException',
                'message' => 'An HTTP exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'PostTooLargeException',
            'custom_response' => [
                'error' => 'PostTooLargeException',
                'message' => 'A post is too large exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'TooManyRequestsHttpException',
            'custom_response' => [
                'error' => 'TooManyRequestsHttpException',
                'message' => 'Too many requests exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'MaintenanceModeException',
            'custom_response' => [
                'error' => 'MaintenanceModeException',
                'message' => 'Maintenance mode exception occurred.',
            ],
        ],
        [
            'exception_class_name' => 'TokenMismatchException',
            'custom_response' => [
                'error' => 'TokenMismatchException',
                'message' => 'Token mismatch exception occurred.',
            ],
        ],
        // Add more exception configurations as needed
    ],
    // Add more configuration options if required
];
