<?php

$config['component']['resolvers']=array_merge_recursive($config['component']['resolvers'],[
    'before'=>[
        'core'=>[
            'type'=>'file',
            'options'=>[
                'source' => $config['component']['core'],
                'target' => "return MODX_CORE_PATH . 'components/';",
            ]
        ],
        'assets'=>[
            'type'=>'file',
            'options'=>[
                'source' => $config['component']['assets'],
                'target' => "return MODX_ASSETS_PATH . 'components/';",
            ]
        ],
    ],
    'after'=>[]
]);