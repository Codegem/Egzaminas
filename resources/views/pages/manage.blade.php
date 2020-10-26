@extends ('layouts/app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Imoniu Sarasas</div>

                <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pavadinimas</th>
                                <th scope="col">Kodas</th>
                                <th scope="col">Pvm Kodas</th>
                                <th scope="col">Adresas</th>
                                <th scope="col">Telefonas</th>
                                <th scope="col">El Pastas</th>
                                <th scope="col">Veikla</th>
                                <th scope="col">Vadovas</th>
                                <th scope="col">Management</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($imones as $imone)
                            <tr>
                            <th scope="row">1</th>
                            <td>{{$imone->pavadinimas}}</td>
                            <td>{{$imone->kodas}}</td>
                            <td>{{$imone->pvm_kodas}}</td>
                            <td>{{$imone->adresas}}</td>
                            <td>{{$imone->telefonas}}</td>
                            <td>{{$imone->elpastas}}</td>
                            <td>{{$imone->veikla}}</td>
                            <td>{{$imone->vadovas}}</td>
                            <td><button class="btn btn-primary m-auto">Edit</button></td>
                            <td>
                                <form action="/destroy.{{$imone->id}}" method="POST">
                                            @csrf
                                            <!-- {{method_field('DELETE')}} -->
                                        <button type="submit" class="btn btn-warning">Delete</button>
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

@endsection