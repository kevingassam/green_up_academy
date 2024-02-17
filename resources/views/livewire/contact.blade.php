<form wire:submit="contact">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <input class="form-control" required placeholder="Name" wire:model="nom" type="text">
                <span class="alert-error"></span>
            </div>
            @error('nom')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" required placeholder="Email*" wire:model="email" type="email">
                <span class="alert-error"></span>
            </div>
            @error('email')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" required placeholder="Phone" wire:model="telephone" type="tel">
                <span class="alert-error"></span>
            </div>
            @error('telephone')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group comments">
                <textarea class="form-control" required wire:model="message" placeholder="Tell Us About Project *"></textarea>
            </div>
            @error('message')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
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
        <div class="col-lg-12">
            <button type="submit" name="submit" id="submit">
                Envoyer le message <i class="fa fa-paper-plane"></i>
            </button>
        </div>
    </div>
    <!-- Alert Message -->
    <div class="col-lg-12 alert-notification">
        <div id="message" class="alert-msg"></div>
    </div>
</form>
