<x-guest-layout>
    @auth
        <livewire:add-site-form/>
    @endauth

    @guest()
        Trebuie sa fii autentificat pentru a adauga un site
    @endguest
</x-guest-layout>
