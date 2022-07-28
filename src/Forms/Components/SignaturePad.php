<?php

namespace Alvleont\FilamentSignaturepad\Forms\Components;

use Filament\Forms\Components\Field;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\ViewRecord;

class SignaturePad extends Field
{
    protected string $view = 'filament-signaturepad::forms.components.signature-pad';
 
    public function isViewRecord(): bool {
        return $this->getLivewire() instanceof ViewRecord;
    }

   
}

