<?php

namespace Afsdarif\FilamentKnowledgeBase\Providers;

use Filament\Panel;
use Filament\PanelProvider;
use Afsdarif\FilamentKnowledgeBase\Filament\Panels\KnowledgeBasePanel;

class KnowledgeBasePanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return KnowledgeBasePanel::make();
    }
}
