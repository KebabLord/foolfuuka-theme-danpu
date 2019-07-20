<?php

namespace Foolz\FoolFuuka\Theme\Danpu\Partial;

class Plugin extends \Foolz\FoolFuuka\View\View
{
    public function toString()
    {
        echo $this->getParamManager()->getParam('content');
    }
}
