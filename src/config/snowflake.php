<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Data Center
    |--------------------------------------------------------------------------
    |
    | This value represents the data center that will be used
    | when generating snowflakes.
    |
    */

    'data_center' => 1,

    /*
    |--------------------------------------------------------------------------
    | Worker Node
    |--------------------------------------------------------------------------
    |
    | This value represents the worker node that will be used
    | when generating snowflakes.
    |
    */

    'worker_node' => 1,

    /*
    |--------------------------------------------------------------------------
    | Start Date
    |--------------------------------------------------------------------------
    |
    | This value represents the starting date for generating new timestamps.
    | This should be set to the current date when creating a new application.
    |
    */

    'start_date' => '2022-01-01',
];