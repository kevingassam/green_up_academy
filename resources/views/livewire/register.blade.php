<form wire:submit="save">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input class="form-control" placeholder="Nom*" type="text" required wire:model="nom">
            </div>
            @error('nom')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input class="form-control" placeholder="Prénom*" type="text" required wire:model="prenom">
            </div>
            @error('prenom')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <i class="fas fa-envelope-open"></i>
                <input class="form-control" placeholder="Email*" type="email" required wire:model="email">
            </div>
            @error('email')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <i class="fas fa-envelope-open"></i>
                <input class="form-control" placeholder="Confirmation de l'email*" type="email" required
                    wire:model="email2">
            </div>
            @error('email2')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
    </div>
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
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <button type="submit">
                M"inscrire
                <span wire:loading>
                    <img src="/assets/img/loading.gif"  alt="loading" height="20" width="20">
                </span>
            </button>
        </div>
    </div>
</form>
