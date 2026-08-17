<?php

namespace aintreallydown\DocumentBundle\Service;

use App\Entity\RentalFile;
use Doctrine\ORM\EntityManagerInterface;


class DoctrineDocumentService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function saveDocumentToRentalFile(RentalFile $file, array $document): void
    {
        $file->setExtrafields($document);
        $this->entityManager->flush();
    }
}
