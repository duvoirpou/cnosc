@extends("admin.app")
@section('content')

    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col col-md-offset-3">
                <h4>Profile</h4>
                <hr>
                <table class="table table-hover">
                    <thead>
                        <th>Nom</th>
                        <th>Email</th>
                        {{-- <th></th> --}}
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $LoggedUserInfo->name }}</td>
                            <td>{{ $LoggedUserInfo->email }}</td>
                            {{-- <td><a href="logout">Déconnexion</a></td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
