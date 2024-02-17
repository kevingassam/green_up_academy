<form wire:submit="connexion">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <i class="fas fa-envelope-open"></i>
                <input class="form-control" placeholder="E-mail*" required wire:model="email" type="email">
            </div>
            @error('email')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input class="form-control" placeholder="Mot de passe*" required wire:model="password" type="password">
            </div>
            @error('password')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
    </div>{{--
    <div class="row">
        <div class="col-lg-12">
            <div class="link align-right">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div> --}}
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
                Connexion
                <span wire:loading>
                    <img src="/assets/img/loading.gif"  alt="loading" height="20" width="20">
                </span>
            </button>
        </div>
    </div>
</form>
