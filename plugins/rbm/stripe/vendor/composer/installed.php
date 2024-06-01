<?php return array(
    'root' => array(
        'name' => 'rbm/stripe-plugin',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'e9744df28e036892751b53ad87709876299f07bc',
        'type' => 'october-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'rbm/stripe-plugin' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'e9744df28e036892751b53ad87709876299f07bc',
            'type' => 'october-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'stripe/stripe-php' => array(
            'pretty_version' => 'v14.9.0',
            'version' => '14.9.0.0',
            'reference' => '7165f64ec1b19cb0ce288d553909cd68d8e6a3b1',
            'type' => 'library',
            'install_path' => __DIR__ . '/../stripe/stripe-php',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
