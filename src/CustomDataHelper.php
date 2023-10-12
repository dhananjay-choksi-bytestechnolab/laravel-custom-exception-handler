<?php

namespace BytesTechnolabs\CustomExceptionHandler;

class CustomDataHelper
{
    public static function addCustomDataToConfig($exception, $data = [], $customKey = '')
    {
        $defaultExceptionResponseDataKey = config("custom_exception_handler.default_exception_response_data_key");
        if (empty($customKey) && !empty($defaultExceptionResponseDataKey)) {
            $customKey = $defaultExceptionResponseDataKey;
        } else {
            $customKey = 'data';
        }
        
        // Generate the configuration keys based on the exception class name
        $configKey = 'custom_exception_handler.custom_data.' . get_class($exception) . '.';

        // Define the configuration values
        $config = [
            $configKey . 'custom_key' => $customKey,
            $configKey . 'data' => $data,
        ];

        // Set the custom data dynamically in the Laravel configuration
        config($config);

        return $config; // Return the generated configuration for reference
    }
}
