<div>
    <form wire:submit.prevent="save">
        <div class="mb-3">
            <label class="form-label">Titre de fla formation</label>
            <input type="text" class="form-control" required wire:model="titre" />
            @error('titre')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Réference de la formation</label>
            <input class="form-control" required type="text" wire:model="reference" />
            @error('reference')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Type de formation</label>
            <select class="form-select" required wire:model="type">
                <option value="" selected>Veuillez choisir la catégorie</option>
                <option value="academique">Academique</option>
                <option value="professionnelle">Professionnelle</option>
            </select>
            @error('type')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Fichier pdf</label>
            <input class="form-control" required type="file" wire:model="document" />
            @error('document')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Image de couverture</label>
            <input class="form-control" required type="file" wire:model="couverture" />
            @error('couverture')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label class="form-label">Description</label>

            <textarea class="form-control" required wire:model="description" rows="4"></textarea>
            @error('description')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label class="form-label">Conditions d'amission</label>
            <textarea class="form-control" required wire:model="condition" rows="4"></textarea>
            @error('condition')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
        <br>
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
        <div class="text-center">
            <button type="submit" class="btn  btn-primary">
                Enregistrer
                <span wire:loading>
                    <img src="/assets/img/loading.gif"  alt="loading" height="20" width="20">
                </span>
            </button>
        </div>
    </form>
</div>
