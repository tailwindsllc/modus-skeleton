<?php

/**
 *
 * Example:
 *
 * "some_route" => [
 *          "path" => "/a/b/{c}{format}",
 *          "values" => [
 *              'action' => 'Application\Controller\Index',
 *              'responder' => 'Application\Responder\Index',
 *              'method' => 'index',
 *              "format" => 'html' // a default param value for format
 *      ],
 *      "params" => ['c' => '\d+', 'format' => '(\.[^/]+)?',],
 *      "secure" => false,
 *      "request" => "GET|POST"
 * ],
 **/
return array(

    "some_route" => [
        "path" => "/a/b/{c}{format}",
        "values" => [
            'action' => 'Application\Controller\Index',
            'responder' => 'Application\Responder\Index',
            'method' => 'index',
            "format" => 'html' // a default param value for format
        ],
        "params" => ['c' => '\d+', 'format' => '(\.[^/]+)?',],
        "secure" => false,
        "request" => "GET|POST"
    ],

    "route_groups" => [
    ]
);