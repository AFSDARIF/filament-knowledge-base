<?php

namespace Afsdarif\FilamentKnowledgeBase\Tests;

use Afsdarif\FilamentKnowledgeBase\FilamentKnowledgeBaseServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Afsdarif\\FilamentKnowledgeBase\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentKnowledgeBaseServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-knowledge-base_table.php.stub';
        $migration->up();
        */
    }
}
