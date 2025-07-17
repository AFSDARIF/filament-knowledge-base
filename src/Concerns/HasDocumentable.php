<?php

namespace Afsdarif\FilamentKnowledgeBase\Concerns;

use Afsdarif\FilamentKnowledgeBase\Contracts\Documentable;

trait HasDocumentable
{
    protected Documentable $documentable;

    public function documentable(Documentable $documentable): static
    {
        $this->documentable = $documentable;

        return $this;
    }

    public function getDocumentable(): Documentable
    {
        return $this->documentable;

    }
}
