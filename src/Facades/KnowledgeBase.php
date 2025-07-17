<?php

namespace Afsdarif\FilamentKnowledgeBase\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Afsdarif\FilamentKnowledgeBase\KnowledgeBase
 */
class KnowledgeBase extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Afsdarif\FilamentKnowledgeBase\KnowledgeBase::class;
    }
}
