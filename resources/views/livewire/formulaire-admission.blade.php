<div class="alert">
    <div class="alert alert-warning">
        <div class="row">
            <div class="col-sm-8">
                <h5>
                    <b>ATTENTION</b>
                </h5>
                <P>
                    Avant d'entamer la procédure d'admission, nous vous invitons cordialement à créer votre compte
                    MY-GUA. Ce compte vous permettra de bénéficier d'un accès sécurisé à notre portail, où vous pourrez
                    recevoir toutes les informations importantes et échanger avec nous en toute confidentialité. C'est
                    un moyen efficace pour faciliter la communication et garantir que vous restiez informé à chaque
                    étape du processus d'admission.
                </P>

            </div>
            <div class="col-sm-4 my-auto mx-auto text-center">
                <button class="btn btn-md btn-gradient" onclick="document.location.href='/register'">
                    Créer mon compte MY-GUA
                </button>
            </div>
        </div>
    </div>
    <br><br>
    <hr>
    <form wire:submit.prevent="save">
        <h5 class="btn-gradient">
            <b>FORMULAIRE D'ADMISSION / </b> APPLICATION FORM SUBMISSION
        </h5>
        <div class="row">
            <div class="col-sm-6">
                <div>
                    <b>SCAN DU FORMULAIRE D'ADMISSION</b> <br>
                    <i class="text-muted">(SCAN OF THE ADMISSION FORM)</i>
                    <strong class="text-danger">*</strong>
                    <input type="file" class="form-control" accept=".pdf" required wire:model="formulaire">
                    @error('formulaire')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <div>
                    <b>UN CV</b> <br>
                    <i class="text-muted">(A RESUME)</i>
                    <strong class="text-danger">*</strong>
                    <input type="file" class="form-control" accept=".pdf" required wire:model="cv">
                    @error('cv')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <div>
                    <b>UNE LETTRE DE MOTIVATION </b> <br>
                    <i class="text-muted">(A COVER LETTER)</i>
                    <strong class="text-danger">*</strong>
                    <input type="file" class="form-control" accept=".pdf" required wire:model="lettre">
                    @error('lettre')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <div>
                    <b>ATTESTATION DU NIVEAU DE LANGUE FRANÇAISE</b> <br>
                    <i class="text-muted"> (OFFICIAL FRENCH LANGUAGE CERTIFICATE)</i>
                    <strong class="text-danger">*</strong>
                    <input type="file" class="form-control" accept=".pdf" required wire:model="attestation">
                    @error('attestation')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <div>
                    <b>PHOTOGRAPHIE D’IDENTITÉ</b> <br>
                    <i class="text-muted"> (PHOTO ID)</i>
                    <strong class="text-danger">*</strong>
                    <input type="file" class="form-control" required wire:model="photo">
                    @error('photo')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div>
                    <b>UN PORTFOLIO DE TRAVAUX</b> <br>
                    <i class="text-muted"> (A PORTFOLIO)</i>
                    <strong class="text-danger">*</strong>
                    <input type="file" class="form-control" accept=".pdf" required wire:model="portfolio">
                    @error('portfolio')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <div>
                    <b>COPIE DU PASSEPORT OU DE LA CARTE D’IDENTITÉ </b> <br>
                    <i class="text-muted">(PHOTOCOPY OF PASSPORT OR ID CARD)</i>
                    <strong class="text-danger">*</strong>
                    <input type="file" class="form-control" accept=".pdf" required wire:model="passport">
                    @error('passport')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <div>
                    <b>COPIE CERTIFIÉE DES DIPLÔMES OU RELEVÉS DE NOTES ET CRÉDITS - POUR LES ÉTUDIANTS EN COURS DE
                        CURSUS</b> <br>
                    <i class="text-muted">(CERTIFIED COPY OF DIPLOMA OR DEGREE + RECORD OR A COPY OF YOUR 2 LATEST
                        TRANSCRIPTS OF YOUR
                        CURRENT STUDIES IF YOU HAVE NOT GRADUATED)</i>
                    <strong class="text-danger">*</strong>
                    <br>
                    <i class="text-danger">Veuillez joindre en un fichier</i>
                    <input type="file" class="form-control" accept=".pdf" required wire:model="releves">
                    @error('releves')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <br>
            </div>
        </div>
        <br><br>
        <h5 class="btn-gradient">
            <b>MON COMPTE GUA / </b> MY GUA ACCOUNT
        </h5>
        <div>
            <b>VEUILLEZ ENTRER VOTRE IDENTIFIANT DE COMPTE MY-GUA POUR POUVOIR TERMINER VOTRE PROCEDURE</b> <br>
            <i class="text-muted"> (PLEASE ENTER YOUR MY-GUA ACCOUNT ID TO BE ABLE TO COMPLETE YOUR PROCEDURE)</i>
            <strong class="text-danger">*</strong>
            <input type="text" class="form-control" required wire:model="code" placeholder="*************">
            @error('code')
                <span class="text-danger small">{{ $message }}</span>
            @enderror
            <br>
            je veux obtenir mon code
            <a href="/register">
                <b>
                    OUVRIR MON COMPTE MY-GUA
                </b>
            </a>
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
        <br>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-sm btn-gradient">
                    <i class="fa fa-paper-plane"></i>
                    Envoyer mon dossier
                </button>
            </div>
            <div class="col my-auto">

            </div>
        </div>
    </form>

</div>
