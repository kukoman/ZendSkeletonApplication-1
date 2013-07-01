<?php

namespace User;

return array(
    'zfcuser' => array(
        'enable_default_entities' => false,
        'user_entity_class' => 'User\Entity\User',
        'enable_display_name' => true,
        'enable_registration' => false,
        'enable_username' => true,
        'auth_identity_fields' => ['email', 'username']
    ),

    // Doctrine config
    'doctrine' => array(
        'driver' => array(
            'zfcuser_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'user' => __DIR__ . '/../view',

            // replace zfcUser templates
            'zfcuser' => __DIR__ . '/../view',
        ),
    ),
);
