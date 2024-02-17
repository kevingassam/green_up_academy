<div class="row">
    <div class="col-sm-6 mx-auto card">
        <div class="col-12">
            <div class="card mb-4 p-3">
                <h5 class="card-header">Importateur de fichier</h5>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <hr>
                <form wire:submit="send" >
                    <div class="fallback">
                        <input name="file" required type="file" wire:model="fichier" />
                    </div>
                    @error('fichier')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                    <hr>
                    <div class=" mb-3">
                        Email de l'etudiant :
                        <input type="text" wire:model="email" required placeholder="Email de l'etudiant" class="form-control">
                        @error('email')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                        <br>
                        Titre du docuement :
                        <select wire:model="titre" class="form-control" required>
                            <option value="" selected>Choisir le titre du document</option>
                            <option value="Décision d'admission">Décision d'admission</option>
                            <option value="Autre document">Autre document</option>
                        </select>
                        @error('titre')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-primary">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
