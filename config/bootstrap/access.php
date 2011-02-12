<?php
use li3_access\security\Access;
Access::config(array(
    'rule_based' => array(
        'adapter' => 'Rules',
        // optional filters applied to check() method
        'filters' => array(
            function($self, $params, $chain) {
                // any config can define filters to do some stuff
                return $chain->next($self, $params, $chain);
            }
        )
    )
));