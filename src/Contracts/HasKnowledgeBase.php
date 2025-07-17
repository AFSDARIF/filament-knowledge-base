<?php

namespace Afsdarif\FilamentKnowledgeBase\Contracts;

interface HasKnowledgeBase
{
    public static function getDocumentation(): array | string;
}
