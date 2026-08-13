<?php

namespace aintreallydown\DocumentBundle\Twig;

use App\Entity\Document; 
use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class DocumentExtension extends AbstractExtension
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_documents', [$this, 'getDocuments']),
            new TwigFunction('get_document', [$this, 'getDocument']),
        ];
    }

    public function getDocuments(array $criteria = []): array
    {
        return $this->entityManager->getRepository(Document::class)->findBy($criteria);
    }

    public function getDocument(int $id): ?Document
    {
        return $this->entityManager->getRepository(Document::class)->find($id);
    }
}