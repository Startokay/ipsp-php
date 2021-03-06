<?php

namespace Ipsp\Resource;

use Ipsp\Resource;

/**
 * Class Ipsp_Resource_Refund
 */
class Reports extends Resource{

    protected $path   = '/reports';
    protected $fields = array(
        'merchant_id'=>array(
            'type'    => 'string',
            'required'=> TRUE
        ),
        'date_from'=>array(
            'type'     => 'string',
            'format'   => '',
            'required' => TRUE
        ),
        'date_to' => array(
            'type'    => 'string',
            'format'  => '' ,
            'required'=> TRUE
        ),
        'signature' => array(
            'type' => 'string',
            'required'=>TRUE
        ),
        'version' => array(
            'type' => 'string',
            'required'=>FALSE
        )
    );

}