<?php

namespace Afsdarif\FilamentKnowledgeBase\Actions;

use Filament\Actions\Action;
use Filament\Facades\Filament;
use Afsdarif\FilamentKnowledgeBase\Contracts\Documentable;
use Afsdarif\FilamentKnowledgeBase\Facades\KnowledgeBase;

class HelpAction extends Action
{
    protected function setUp(): void {}

    public function generic(): HelpAction
    {
        return $this->label(__('filament-knowledge-base::translations.help'))
            ->icon('heroicon-o-question-mark-circle')
            ->iconSize('lg')
            ->color('gray')
            ->button()
        ;
    }

    public static function forDocumentable(Documentable | string $documentable): HelpAction
    {
        $documentable = KnowledgeBase::documentable($documentable);

        return HelpAction::make("help.{$documentable->getId()}")
            ->label($documentable->getTitle())
            ->icon($documentable->getIcon())
            ->when(
                Filament::getPlugin('afsdarif::filament-knowledge-base')->hasModalPreviews(),
                fn (HelpAction $action) => $action
                    ->alpineClickHandler('$dispatch("open-modal", {id: "' . $documentable->getId() . '"})')
                    ->when(
                        Filament::getPlugin('afsdarif::filament-knowledge-base')->hasSlideOverPreviews(),
                        fn (HelpAction $action) => $action->slideOver()
                    ),
                fn (HelpAction $action) => $action->url($documentable->getUrl())
            )
        ;
    }
}
