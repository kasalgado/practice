<?php declare (strict_types=1);

namespace App\Documents;

class DocumentStore
{
    /**
     * @var Document[]
     */
    private $documents = [];
    
    public function __construct(Documentable $document)
    {
        $key = $document->getId();
        $content = $document->getContent();
        $this->documents[$key] = $content;
    }
    
    public function getDocuments(): array
    {
        return $this->documents;
    }
}
