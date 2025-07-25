@use(Afsdarif\FilamentKnowledgeBase\Facades\KnowledgeBase)
<article
    {{ $attributes->class([
        'gu-kb-article',
        '[&_ul]:list-[revert] [&_ol]:list-[revert] [&_ul]:ml-4 [&_ol]:ml-4' => ! KnowledgeBase::panel()->shouldDisableDefaultClasses(),
    ]) }}
    x-ignore
    ax-load
    ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('anchors-component', 'afsdarif/filament-knowledge-base') }}"
    x-data="anchorsComponent()"
>
    {{ $slot }}
</article>
