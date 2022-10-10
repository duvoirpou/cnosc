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
                Modifier la photo
            </div>
            <div class="card-body">
                <h4 class="card-title"><a class="btn btn-default btn-lg" href="{{ route('app_phototheque') }}"><i class="fi-rr-arrow-left"></i> Retour</a></h4>

                <div class="text-center mb-5">
                    <span class="badge badge-pill badge-primary text">{{ $edit->id }}</span>
                </div>

                <form action="{{ route('photo.update', $edit->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    @method("PUT")

                    <div class="col" hidden>
                        <div class="form-group">
                            <label for="">id</label>
                            <input type="text" name="id" id="" class="form-control"
                                value="{{ $edit->id }}" placeholder="titre" aria-describedby="helpId" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Titre</label>
                                <input type="text" name="titre" id="" class="form-control" value="{{ $edit->titre }}"
                                    placeholder="titre" aria-describedby="helpTitre">

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" onchange="previewFile(this)" name="file" id="" class="form-control"
                                    placeholder="titre" aria-describedby="helpImg">
                                    <small id="helpImg" class="text-danger">@error('file')
                                        {{ $message }}
                                    @enderror</small><br>
                                <img alt="" src="{{ asset('images') }}/{{ $edit->photo }}" id="previewImg"
                                    style="max-width:130px; margin-top:20px" />
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
                        </div>
                        <div class="col">
                            <div class="form-group" hidden>
                                <label for="">Date</label>
                                <input type="date" name="date" id="" class="form-control" value="{{ $edit->date }}"
                                    placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col">
                            <button type="submit" class="btn btn-primary"><i class="fi-rr-download"></i> Enrégistrez</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@stop
