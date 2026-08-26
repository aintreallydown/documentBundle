<?php

namespace aintreallydown\DocumentBundle\Controller\Admin;

use aintreallydown\DocumentBundle\Entity\Document;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DocumentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Document::class;
    }
}
