@php
    use Illuminate\Support\Facades\Storage;
@endphp

<!-- Votre code HTML ici -->
<div>
    <div class="row p-3">
        <div class="col my-auto">
            <h5 class="card-header">Liste des Admissions</h5>
        </div>
        <div class="col my-auto">
            <form wire:submit="filtre">
                <div class="input-group mb-3">
                    <input type="text" wire:model="key" placeholder="email,nom,prenom" class="form-control" id="">
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
                        <th></th>
                        <th>Etudiant</th>
                        <th>Décision</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($admissions as $item)
                        <tr>
                            <td>
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ storage::url($item->photo) }}" alt=""
                                        style="border-radius: 100%" srcset="">
                                </div>
                            </td>
                            <td>
                                <b>{{ $item->user_info->name }}</b> <br>
                                <span class="small"> {{ $item->user_info->email }}</span>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            <td>
                                @if ($item->formulaire)
                                    <button class="btn btn-sm btn-dark m-1"
                                        onclick="document.location.href='{{ storage::url($item->formulaire) }}'">
                                        <i class="tf-icons ti ti-file"></i>
                                        Formulaire
                                    </button>
                                @endif
                                @if ($item->cv)
                                    <button class="btn btn-sm btn-dark m-1"
                                        onclick="document.location.href='{{ storage::url($item->cv) }}'">
                                        <i class="tf-icons ti ti-file"></i>
                                        Cv
                                    </button>
                                @endif
                                @if ($item->lettre)
                                    <button class="btn btn-sm btn-dark m-1"
                                        onclick="document.location.href='{{ storage::url($item->lettre) }}'">
                                        <i class="tf-icons ti ti-file"></i>
                                        Lettre de motivation
                                    </button>
                                @endif
                                @if ($item->portfolio)
                                    <button class="btn btn-sm btn-dark m-1"
                                        onclick="document.location.href='{{ storage::url($item->portfolio) }}'">
                                        <i class="tf-icons ti ti-file"></i>
                                        Portfolio
                                    </button>
                                @endif
                                @if ($item->passport)
                                    <button class="btn btn-sm btn-dark m-1"
                                        onclick="document.location.href='{{ storage::url($item->passport) }}'">
                                        <i class="tf-icons ti ti-file"></i>
                                        passport
                                    </button>
                                @endif
                                @if ($item->releves)
                                    <button class="btn btn-sm btn-dark m-1"
                                        onclick="document.location.href='{{ storage::url($item->releves) }}'">
                                        <i class="tf-icons ti ti-file"></i>
                                        rélévés de notes
                                    </button>
                                @endif
                                @if ($item->attestation)
                                    <button class="btn btn-sm btn-dark m-1"
                                        onclick="document.location.href='{{ storage::url($item->attestation) }}'">
                                        <i class="tf-icons ti ti-file"></i>
                                        Attestation de langue
                                    </button>
                                @endif
                                @if ($item->photo)
                                    <button class="btn btn-sm btn-dark m-1"
                                        onclick="document.location.href='{{ storage::url($item->photo) }}'">
                                        <i class="tf-icons ti ti-file"></i>
                                        photo
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-3">
                                Aucune dossier enregistrée pour le moment.
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>

</div>
