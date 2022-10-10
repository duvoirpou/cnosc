@extends("admin.app")

@section('content')
    @if (Session::has('success'))
        <div class="container mt-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong><i class="fa fa-check-circle" aria-hidden="true"></i> {{ Session::get('success') }}</strong>
            </div>
        </div>
    @endif



    @if ($errors->any())
        <div class="container mt-5">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Whoops ! </strong> There where some problems with your input. <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <?php
    $tab_mois = ['', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre'];
    $date_jour = date('d') . '-' . $tab_mois[date('n')] . '-' . date('Y');
    $mois = $tab_mois[date('n')];
    $d = date('j') . ' ' . $mois . ' ' . date('Y') . ' ' . date('H') . 'h ' . date('i') . 'm ' . date('s') . 's ';
    $date_en = date('Y') . '-' . date('m') . '-' . date('j');
    $annee = date('Y');
    $heure = date('H');

    ?>

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header bg-info text-uppercase text-white">
                Ajoutez une video
            </div>
            <div class="card-body">
                <h4 class="card-title">
                    <a class="btn btn-default btn-lg" href="/video"><i class="fi-rr-arrow-left"></i> Retour</a>
                </h4>
                {{-- <p class="card-text">Text</p> --}}
                <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="container mt-5">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Titre</label>
                                    <input type="text" name="titre" id="" value="{{ old('titre') }}" class="form-control"
                                        placeholder="titre" aria-describedby="helpTitre">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Lien</label>
                                    <input type="text" name="lien" id="" value="{{ old('lien') }}" class="form-control"
                                        placeholder="lien" aria-describedby="helpLien">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group" hidden>
                                    <label for="">Date</label>
                                    <input type="date" name="date" id="" value="{{ $date_en }}" class="form-control"
                                        placeholder="date" aria-describedby="helpDate">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group" hidden>
                                    <label for="">Heure</label>
                                    <input type="text" name="heure" id="" value="<?= $heure . 'h' ?>" class="form-control"
                                        placeholder="" aria-describedby="helpHeure">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary"><i class="fi-rr-download"></i> Enrégistrez</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

