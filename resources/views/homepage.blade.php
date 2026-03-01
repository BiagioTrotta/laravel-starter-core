<x-layout.app title="{{ $title }}">
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info mt-4" role="alert">
                    <h4 class="alert-heading">Benvenuto su Laravel-starter-core</h4>

                    <p>
                        Questa è la homepage del template custom Laravel.
                        Da qui puoi iniziare a costruire la tua applicazione aggiungendo nuove funzionalità, pagine e componenti.
                    </p>

                    <hr>

                    <p class="mb-0">
                        Esplora la documentazione di Laravel per scoprire tutte le potenzialità del framework.
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-layout.app>