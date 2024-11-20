<?php

// Class to handle project-specific dependencies (extending Emeset\Container).
class ProjectContainer extends \Emeset\Container {

    // Constructor receives the configuration array and initializes the database connection.
    public function __construct($config) {
        // Initialize the database connection using the provided configuration.
        $this->sql = new Db($config);
        
        // Store the configuration for future use if needed.
        $this->config = $config;
    }

    public function songs(){
        return new songs($this->sql->get());
    }
    
   
};
