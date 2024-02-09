<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\MarkdownEditor;

class ProfileForm extends Component implements HasForms
{
    use InteractsWithForms;

    protected function getFormSchema(): array
    {
        return [
            MarkdownEditor::make('content')->required(),
            
        ];
    }

    public function render(): string
    {
        return <<<'blade'
        <form wire:submit.prevent="submit">
            <h2 class="text-2xl font-semibold text-gray-900">Edit profile</h2>
            <p class="text-md text-gray-900 mb-4">Tailoring Your Identity: Edit Your Profile</p>

            {{ $this->form }}
        </form>
        blade;
    }
}
