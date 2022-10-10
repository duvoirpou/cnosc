@extends("admin.app")


@section('content')



    @if ($errors->any())
        <div class="container">
            <div class="alert alert-danger" role="alert">
                <strong>Whoops ! </strong> There where some problems with your input. <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>


    @endif

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header bg-info text-uppercase text-white">
                Modifier l'actualité
            </div>
            <div class="card-body">
                <h4 class="card-title"><a class="btn btn-default btn-lg" href="{{ route('app_actualites') }}"><i
                            class="fa fa-long-arrow-left" aria-hidden="true"></i> Retour</a></h4>

                <div class="text-center mb-5">
                    <span class="badge badge-pill badge-primary text">{{ $edit->id_actualite }}</span>
                </div>

                <form action="{{ route('news.update', $edit->id_actualite) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    @method("PUT")

                    <div class="col" hidden>
                        <div class="form-group">
                            <label for="">id_actualite</label>
                            <input type="text" name="id_actualite" id="" class="form-control"
                                value="{{ $edit->id_actualite }}" placeholder="titre" aria-describedby="helpId" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Titre</label>
                                <input type="text" name="titre" id="" class="form-control" value="{{ $edit->titre }}"
                                    placeholder="titre" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Auteur</label>
                                <input type="text" name="auteur" id="" class="form-control" value="{{ $edit->auteur }}"
                                    placeholder="auteur" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="form-group" hidden>
                                <label for="">Heure</label>
                                <input type="text" name="heure" id="" class="form-control" value="{{ $edit->heure }}"
                                    placeholder="heure" aria-describedby="helpId" readonly>
                            </div>

                            <div class="form-group">
                                <label for="">Libellé</label>
                                <textarea name="libelle" id="" value="{{ $edit->libelle }}" class="form-control" cols="30"
                                    rows="10">{{ $edit->libelle }}</textarea>
                                {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Corps</label>
                                <textarea name="corps" id="" value="" class="form-control" cols="30"
                                    rows="10">{{ $edit->corps }}</textarea>
                                {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" onchange="previewFile(this)" name="file" id="" class="form-control"
                                    placeholder="titre" aria-describedby="helpId">
                                <img alt="" src="{{ asset('images') }}/{{ $edit->photo }}" id="previewImg"
                                    style="max-width:130px; margin-top:20px" />
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group" hidden>
                                <label for="">Date</label>
                                <input type="date" name="date" id="" class="form-control" value="{{ $edit->date }}"
                                    placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" hidden>
                                <label for="">Mois</label>
                                <input type="text" name="mois" id="" class="form-control" value="{{ $edit->mois }}"
                                    placeholder="mois" aria-describedby="helpId">
                            </div>
                            {{-- <div class="form-group">
                            <label for="">Categorie</label>
                            <select name="id_categorie" id="" class="form-control">
                                <option value="{{ $edit->id_categorie }}" selected></option>
                                @foreach ($categories as $row)
                                    <option value="{{ $row->id_categorie }}">{{ $row->categorie }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-circle-down"
                                    aria-hidden="true"></i> Enrégistrez</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@stop
