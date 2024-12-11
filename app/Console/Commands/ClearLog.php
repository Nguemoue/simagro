<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearLog extends Command
{
    protected $signature = 'log:clear';
    protected $description = 'Efface le fichier laravel.log';

    public function handle(): void
    {
        $file = storage_path('logs/laravel.log');

        if (file_exists($file)) {
            file_put_contents($file, '');  // Vider le fichier
            $this->info('Logs effacés avec succès.');
        } else {
            $this->error('Le fichier laravel.log n\'existe pas.');
        }
    }
}
