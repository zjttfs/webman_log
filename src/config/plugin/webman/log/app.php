<?php
return [
    'enable' => true,
    'exception' => [
        // 是否记录异常到日志
        'enable' => true,
        // 不会记录到日志的异常类
        'dontReport' => [
            support\exception\BusinessException::class
        ]
    ],
    'dontReport' => [
        'app' => [
            'test',
        ],
        'controller' => [
            Test::class,
        ],
        'action' => [
            [Test::class, 'index'],
        ],
        'path' => [
            '/test',
            '/test/echo'
        ]
    ]
];
