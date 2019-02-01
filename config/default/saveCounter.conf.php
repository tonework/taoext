<?php

return new oat\oatbox\log\LoggerService(array(
    'logger' => new \oat\oatbox\log\LoggerAggregator(
        array(

            new oat\oatbox\log\logger\TaoLog(array(
                'appenders' => array(
                    array(
                        'class' => 'UDPAppender',
                        'host' => '127.0.0.1',
                        'port' => 5775,
                        'threshold' => 0,
                        'prefix' => 'tao'
                    )
                )
            )),
        )
    )
));
