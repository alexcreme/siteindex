<div>
    <form wire:submit="create">
        {{ $this->form }}

        <button type="submit"
                class="btn btn-success bg-red-600 rounded-md my-4 w-full px-20 text-white text-xl font-bold">
            Trimite linkul catre verificare
        </button>
    </form>

    <x-filament-actions::modals/>
</div>
