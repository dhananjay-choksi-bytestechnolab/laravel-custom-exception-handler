<?php

namespace BytesTechnolabs\CustomExceptionHandler;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Throwable;
use Illuminate\Support\Str;

class CustomExceptionHandler extends ExceptionHandler
{
    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        // Custom error reporting logic can be added here if needed
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Throwable $exception)
    {
        // Get the class name of the thrown exception
        $exceptionClassName = get_class($exception);

        // Get all custom exception configurations from the Laravel configuration
        $allCustomExceptionsConfigurations = config('custom_exception_handler.exceptions');

        // Check if the exception class is listed in the custom exceptions configurations
        if (in_array($exceptionClassName, $allCustomExceptionsConfigurations)) {
            $allCustomExceptionsConfigurationsMessages = config('custom_exception_handler.exceptions_messages');
            $allCustomExceptionsConfigurationsErrorCodes = config('custom_exception_handler.exceptions_status_codes');
            $allCustomExceptionsConfigurationsCustomData = config("custom_exception_handler.custom_data");
            $defaultExceptionResponseData = config("custom_exception_handler.default_exception_response_data");

            // Initialize the custom response array
            $customResponse = [];

            // Set the HTTP response code
            if (!empty($allCustomExceptionsConfigurationsErrorCodes[$exceptionClassName])) {
                $customResponse['code'] = $allCustomExceptionsConfigurationsErrorCodes[$exceptionClassName];
            } else {
                $defaultExceptionStatusCode = config("custom_exception_handler.default_exception_status_code");
                $customResponse['code'] = !empty($defaultExceptionStatusCode) ? $defaultExceptionStatusCode : 500;
            }

            // Set the response message
            if (!empty($allCustomExceptionsConfigurationsMessages[$exceptionClassName])) {
                $customResponse['message'] = $allCustomExceptionsConfigurationsMessages[$exceptionClassName];
            } else {
                $defaultExceptionsMessages = config("custom_exception_handler.default_exceptions_messages");
                $exceptionHeadline = Str::headline($exceptionClassName);
                $customResponse['message'] = !empty($defaultExceptionsMessages) ? $defaultExceptionsMessages : "{$exceptionHeadline} Exception Occurred.";
            }

            // Set custom data if provided
            $customData = !empty($allCustomExceptionsConfigurationsCustomData[$exceptionClassName]['data']) ? $allCustomExceptionsConfigurationsCustomData[$exceptionClassName]['data'] : $defaultExceptionResponseData;

            // Determine the key for custom data
            $defaultExceptionResponseDataKey = config("custom_exception_handler.default_exception_response_data_key");
            if (!empty($allCustomExceptionsConfigurationsCustomData[$exceptionClassName]['custom_key'])) {
                $customDataKey = $allCustomExceptionsConfigurationsCustomData[$exceptionClassName]['custom_key'];
            } elseif (!empty($defaultExceptionResponseDataKey)) {
                $customDataKey = $defaultExceptionResponseDataKey;
            } else {
                $customDataKey = 'data';
            }

            // Add custom data to the custom response
            $customResponse[$customDataKey] = $customData;

            // Return a JSON response with the custom data
            return new JsonResponse($customResponse);
        }

        // If the exception is not in the custom exceptions list, return the default Laravel response
        return parent::render($request, $exception);
    }
}