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
                <th>type</th>
                <th>Titre</th>
                <th>reference</th>
                <th>statut</th>
                <th>publication</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @forelse ($formations as $item)
                <tr>
                    <td>
                        {{ $item->type }}
                    </td>
                    <td> {{ $item->titre }} </td>
                    <td>{{ $item->reference }}</td>
                    <td><span class="badge bg-label-warning me-1">{{ $item->statut }}</span></td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"
                                    wire:click ="delete({{ $item->id }})">
                                    <i class="ti ti-trash me-1"></i>
                                    Supprimer
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="p-3">
                        Aucune formation enregistrée pour le moment.
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>

</div>
