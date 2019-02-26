<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    |
    | Laravel's queue API supports an assortment of back-ends via a single
    | API, giving you convenient access to each back-end using the same
    | syntax for every one. Here you may define a default connection.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'redis'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => 0,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'region' => env('AWS_REGION', 'us-east-1'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'queues',
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => null,
        ],

        'redis-long-running' => [
            'driver' => 'redis',
            'connection' => 'queues',
            'queue' => 'default',
            'retry_after' => 1200,
            'block_for' => null,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

    'tubes' =>

    [
        'prioritised' => [
            'urgent' => env('Q_PR_URGENT', 'pr_urgent'),
            'high' => env('Q_PR_HIGH', 'pr_high'),
            'medium' => env('Q_PR_MEDIUM', 'pr_medium'),
            'low' => env('Q_PR_LOW', 'pr_low'),
        ],

        'qos' => [
            'user_interactive' => env('Q_QOS_USER_INTERACTIVE', 'qos_user_interactive'), //Work that is interacting with the user, refreshing the user interface
            'user_initiated' => env('Q_QOS_USER_INITIATED', 'qos_user_initiated'), //Work that the user has initiated and requires immediate results, creating a pdf document 
            'utility' => env('Q_QOS_UTILITY', 'qos_utility'), //Work that may take some time to complete and doesn’t require an immediate result, sending an email
            'background' => env('Q_QOS_BACKGROUND', 'qos_background'), //Work that operates in the background and isn’t visible to the user, such as indexing, synchronizing, and backups. 
        ],

        'serialised' => env('Q_SERIAL', 'serial'),

        'long-running' => env('Q_LONG_RUNNING', 'long_running'),
        
    ],

];
