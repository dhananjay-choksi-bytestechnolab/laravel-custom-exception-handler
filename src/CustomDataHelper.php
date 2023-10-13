<?php

namespace BytesTechnolabs\CustomExceptionHandler;

class CustomDataHelper
{
    /**
     * Add custom data to Laravel configuration based on an exception.
     *
     * @param \Exception $exception The exception for which custom data is being added.
     * @param array $data Additional data to be associated with the exception.
     * @param string $customKey The key to store the custom data in the configuration.
     * @return array The generated configuration for reference.
     */
    public static function addCustomDataToConfig($exception, $data = [], $customKey = '')
    {
        // Get the default key for exception response data from Laravel configuration.
        $defaultExceptionResponseDataKey = config("custom_exception_handler.default_exception_response_data_key");

        // Determine the key to store the custom data based on input and configuration.
        if (empty($customKey) && !empty($defaultExceptionResponseDataKey)) {
            $customKey = $defaultExceptionResponseDataKey;
        } elseif (empty($defaultExceptionResponseDataKey)) {
            $customKey = 'data';
        }

        // Generate the configuration keys based on the exception class name.
        $configKey = 'custom_exception_handler.custom_data.' . get_class($exception) . '.';

        // Define the configuration values to be set.
        $config = [
            $configKey . 'custom_key' => $customKey,
            $configKey . 'data' => $data,
        ];

        // Set the custom data dynamically in the Laravel configuration.
        config($config);

        // Return the generated configuration for reference.
        return $config;
    }
}
