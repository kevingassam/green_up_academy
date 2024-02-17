@php
    use Illuminate\Support\Facades\Storage;
@endphp

<!-- Votre code HTML ici -->
<div>
    <div class="row p-3">
        <div class="col my-auto">
            <h5 class="card-header">Liste des téléchargements</h5>
        </div>
        <div class="col my-auto">
            <form wire:submit="filtre">
                <div class="input-group mb-3">
                    <input type="date" wire:model="date" class="form-control" id="">
                    <button type="submit" class="btn btn-primary">
                        Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <div>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                <hr>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                <hr>
            @endif
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Date</th>
                        <th>Titre</th>
                        <th>Expeditaire</th>
                        <th>Document</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($telechargements as $item)
                        <tr>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            <td>
                                {{ $item->titre }}
                            </td>
                            <td>
                                @if ($item->id_auteur == Auth::user()->id)
                                    <b>Vous</b>
                                @else
                                    <b> Administration </b>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-sm btn-dark"
                                    onclick="document.location.href='{{ storage::url($item->fichier) }}'">
                                    Télécharger
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-3">
                                Aucune téléchargement.
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>

</div>
