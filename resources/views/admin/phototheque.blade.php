@extends("admin.app")

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">

                @if (Session::has('success'))

                    <div class="container-fluid">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                {{ Session::get('success') }}
                            </strong>
                        </div>

                        <script>
                            $(".alert").alert();
                        </script>
                    </div>

                @endif

                <div class="card">
                    <div class="card-header bg-info text-uppercase" style="color: white">
                        Toutes les photos
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="btn btn-default btn-lg" href="{{ route('app_add_phototheque') }}">
                                <i class="fi-rr-add"></i> Ajouter une photo
                            </a>
                        </h4>
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-responsive-sm table-bordered" id="mydatatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Titre</th>
                                        <th>Date d'ajout</th>
                                        <th width="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($phototheque as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td><img src="{{ asset('images') }}/{{ $row->photo }}" alt=""
                                                style="max-width: 120px;"></td>
                                        <td>{{ $row->titre }}</td>
                                        <?php
                                            $date = date_create($row->date);
                                            ?>
                                            <td>{{ date_format($date, 'd-m-Y') }}</td>
                                        <td>
                                            <form action="{{ route('photo.destroy', $row->id) }}" method="post">

                                                <a class="btn btn-primary btn-sm btn-block"
                                                    href="{{ route('photo.edit', $row->id) }}">
                                                    <i class="fi-rr-edit"></i> Modifier
                                                </a>
                                                <br>
                                                @csrf

                                                @method("DELETE")

                                                <button type="submit" class="btn btn-danger btn-sm btn-block"
                                                    onclick="return confirm('Confirmer la suppression ?');">
                                                    <i class="fi-rr-cross-circle"></i> Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
