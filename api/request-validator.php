<?php

// Checks whether the request is valid or not
// Returns an error message if invalid, otherwise returns false when valid
// TODO: Add permssion detection
function IsBadRequest($permission_level, $method, $required_params) {
    
    // Check request method
    
    if (strtolower($_SERVER['REQUEST_METHOD']) === strtolower($method)) {
        // Page requested with correct method
        
        // Check required parameters
        
        $missing_params = [];

        switch (strtolower($method)) {
            case "get":
                foreach ($required_params as $item) {
                    if (!isset($_GET[$item])) {
                        // Required parameter not found
                        
                        // Add parameter to list of missing parameters
                        $missing_params[] = $item;
                    }
                }
                break;
            case "post":
                foreach ($required_params as $item) {
                    if (!isset($_POST[$item])) {
                        // Required parameter not found
                        
                        // Add parameter to list of missing parameters
                        $missing_params[] = $item;
                    }
                }
                break;

        }

        if (count($missing_params) === 0) {
            // Request is valid, so return false
            
            return false;
        } else {
            // There were missing parameters, so return a message containing
            // the expected parameters
            
            return "The following parameters were expected but not found: ".join(", ", $missing_params);
        }
    } else {
        // Wrong request method used
        
        return "Incorrect request method: expected " . $method . " method but found " . $_SERVER['REQUEST_METHOD'];
    }
}