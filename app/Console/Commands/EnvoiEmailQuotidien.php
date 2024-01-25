<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;

class EnvoiEmailQuotidien extends Command
{
    protected $signature = 'app:envoi-email-quotidien';
    protected $description = 'Envoie un e-mail tous les jours à une heure spécifique';
    public function handle()

    {
        Mail::raw('Ceci est le corps de l\'e-mail quotidien.', function ($message) {
            $message->to('destinataire@example.com');
            $message->subject('E-mail Quotidien');
        });

        $this->info('E-mail quotidien envoyé avec succès.');
    }
}

