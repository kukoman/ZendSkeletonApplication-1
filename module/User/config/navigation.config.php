<?php

return array(
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'login',
                'route' => 'zfcuser/login',
                'resource' => 'not_logged'
            ),
            array(
                'label' => 'register',
                'route' => 'zfcuser/register',
                'resource' => 'not_logged'
            ),
        ),
    )
);
