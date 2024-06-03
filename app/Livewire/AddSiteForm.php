<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Site;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class AddSiteForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Titlu pentru site'),

                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('site')
                    ->label('Imagine')
                    ->maxFiles(1),

                TextInput::make('url')
                    ->label('URL')
                    ->prefix('https://'),

                Textarea::make('description'),

                Select::make('category_id')
                    ->label('Categorie')
                    ->options(Category::all()->pluck('name', 'id'))->relationship('category', 'name'),


            ])
            ->statePath('data')
            ->model(Site::class);
    }

    public function create(): void
    {

        $this->validate();

        $data = $this->form->getState();

        $record = Site::create($data);
        $this->redirectRoute('home');
        $this->form->model($record)->saveRelationships();
    }

    public function render(): View
    {
        return view('livewire.add-site-form');
    }
}
