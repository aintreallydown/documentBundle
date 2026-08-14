<?php

namespace aintreallydown\DocumentBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DocumentBundle extends Bundle
{
    public function build(ContainerBuilder $container) : void
    {
        parent::build($container);
    }
}

