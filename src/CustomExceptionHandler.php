<?php

namespace BytesTechnolabs\CustomExceptionHandler;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Throwable;

class CustomExceptionHandler extends ExceptionHandler
{
    public function report(Throwable $exception)
    {
        // Custom error reporting logic, if needed
        // dd('AAAAAAAAAA');
    }

    public function render($request, Throwable $exception)
    {
        // Logic 1
        // $exceptionClassName = get_class($exception);

        // // Get the HTTP response code from the exception
        // $statusCode = $exception->getCode();

        // dd($statusCode);
        // $allCustomExceptionsConfigurations = config('custom_exception_handler.exceptions');

        // // dd($allCustomExceptionsConfigurations);
        // $filteredExceptions = array_filter($allCustomExceptionsConfigurations, function ($configException) use($exceptionClassName) {
        //     if (!empty($configException['exception_class_name']) && ($configException['exception_class_name'] == $exceptionClassName)) {
        //         return true;
        //     }
        // });
        // $filteredExceptions = array_values($filteredExceptions);
        // if (!empty($filteredExceptions[0]['custom_response']) && is_array($filteredExceptions[0]['custom_response'])) {
        //     $currentExceptionConfigurationCustomResponse = $filteredExceptions[0]['custom_response'];
        //     return new JsonResponse($currentExceptionConfigurationCustomResponse);
        // }
        // End Logic 1
        

        // Logic 2

        $exceptionClassName = get_class($exception);
        $allCustomExceptionsConfigurations = config('custom_exception_handler.exceptions');
        
        if (in_array($exceptionClassName, $allCustomExceptionsConfigurations)) {

            $allCustomExceptionsConfigurationsMessages = config('custom_exception_handler.exceptions_messages');
            $allCustomExceptionsConfigurationsErrorCodes = config('custom_exception_handler.exceptions_status_codes');
            $allCustomExceptionsConfigurationsCustomData = config("custom_exception_handler.custom_data");

            

            $customResponse = [];

            if (!empty($allCustomExceptionsConfigurationsErrorCodes[$exceptionClassName])) {
                $customResponse['code'] = $allCustomExceptionsConfigurationsErrorCodes[$exceptionClassName];
            }
            if (!empty($allCustomExceptionsConfigurationsMessages[$exceptionClassName])) {
                $customResponse['message'] = $allCustomExceptionsConfigurationsMessages[$exceptionClassName];
            }
            
            if (!empty($allCustomExceptionsConfigurationsCustomData[$exceptionClassName]['data'])) {
                $customData = $allCustomExceptionsConfigurationsCustomData[$exceptionClassName]['data'];

                $customDataKey = 'data';

                if (!empty($allCustomExceptionsConfigurationsCustomData[$exceptionClassName]['custom_key'])) {
                    $customDataKey =  $allCustomExceptionsConfigurationsCustomData[$exceptionClassName]['custom_key'];
                }

                $customResponse[$customDataKey] = $customData;
            }

            return new JsonResponse($customResponse);            
        }

        return parent::render($request, $exception);
    }
}


// [
//     error => code,
//     "message" => "dc",
//     'data' => []
// ]