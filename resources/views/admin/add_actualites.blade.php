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
    <div class="text-white card-header bg-info text-uppercase">
        Ajoutez une actualité
    </div>
    <div class="card-body">
        <h4 class="card-title">
            <a class="btn btn-default btn-lg" href="{{ route('app_actualites') }}"><i class="fi-rr-arrow-left"></i> Retour</a>
        </h4>
        {{-- <p class="card-text">Text</p> --}}
        <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Titre</label>
                            <input type="text" name="titre" id="" value="{{ old('titre') }}" class="form-control" placeholder="titre"
                                aria-describedby="helpTitre">
                                <small id="" class="text-danger">@error('titre')
                                    {{ $message }}
                                @enderror</small><br>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Auteur</label>
                            <input type="text" name="auteur" id="" value="{{ old('auteur') }}" class="form-control" placeholder="auteur"
                                aria-describedby="helpAuteur">
                                <small id="helpAuteur" class="text-danger">@error('auteur')
                                    {{ $message }}
                                @enderror</small><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Libellé</label>
                            <textarea name="libelle" id="" value="" class="form-control" cols="30" rows="10">{{ old('libelle') }}</textarea>
                            {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                            <small id="" class="text-danger">@error('libelle')
                                {{ $message }}
                            @enderror</small><br>
                          </div>
                    </div>
                    <div class="col">

                        <div class="form-group">
                            <label for="">Corps</label>
                            <textarea name="corps" id="" value="" class="form-control" cols="30" rows="10">{{ old('corps') }}</textarea>
                            {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                            <small id="" class="text-danger">@error('corps')
                                {{ $message }}
                            @enderror</small><br>
                          </div>


                        <div class="form-group" hidden>
                            <label for="">mois</label>
                            <input type="text" name="mois" id="" value="<?= $mois ?>" class="form-control" placeholder=""
                                aria-describedby="helpMois">

                        </div>
                        <div class="form-group">
                            {{-- <label for="">Categorie</label>
                            <select name="id_categorie" id="" class="form-control" >
                                <option value="" disabled selected></option>
                                @foreach ($categories as $row)
                                    <option value="{{ $row->id_categorie }}">{{ $row->categorie }}</option>
                                @endforeach
                            </select> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group" hidden>
                            <label for="">Heure</label>
                            <input type="text" name="heure" id="" value="<?= $heure . 'h' ?>" class="form-control"
                                placeholder="" aria-describedby="helpHeure">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group" hidden>
                            <label for="">Date</label>
                            <input type="date" name="date" id="" value="{{ $date_en }}" class="form-control" placeholder="date">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" onchange="previewFile(this)" name="file" id="" class="form-control"
                                placeholder="" aria-describedby="helpPhoto">
                                <small id="" class="text-danger">@error('file')
                                    {{ $message }}
                                @enderror</small><br>
                            <img alt="" id="previewImg" style="max-width:130px; margin-top:20px" />
                        </div>

                    </div>
                    <div class="col"></div>
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
