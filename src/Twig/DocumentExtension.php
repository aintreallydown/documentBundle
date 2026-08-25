<?php

namespace aintreallydown\DocumentBundle\Twig;

use aintreallydown\DocumentBundle\Entity\Document;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class DocumentExtension extends AbstractExtension
{
    public function __construct(
        private EntityManagerInterface $em
    ) {}

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_documents', [$this, 'getDocuments']),
        ];
    }

    public function getDocuments(array $criteria = []): array
    {
        return $this->em->getRepository(Document::class)->findBy($criteria);
    }
}
