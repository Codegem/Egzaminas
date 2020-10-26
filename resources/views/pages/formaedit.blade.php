@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center m-2">
            <h1>Edit Forma</h1>
        </div>
    </div>
<form action="/update.{{$imone->id}}" method="POST">
{{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Pavadinimas</label>
      <input type="text" class="form-control" id="inputText" value="{{$imone->pavadinimas}}" name="pavadinimas">
    </div>
    <div class="form-group col-md-6">
      <label for="inputKodas">Kodas</label>
      <input type="number" class="form-control" id="inputKodas" value="{{$imone->kodas}}" name="kodas">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPVM">Pvm Kodas</label>
      <input type="number" class="form-control" id="inputPVM" value="{{$imone->pvm_kodas}}" name="pvm_kodas">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAdresas">Adresas</label>
      <input type="adress" class="form-control" id="inputAdresas" value="{{$imone->adresas}}" name="adresas">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTelefonas">Telefonas</label>
      <input type="number" class="form-control" id="inputTelefonas" value="{{$imone->telefonas}}" name="telefonas">
    </div>
    <div class="form-group col-md-6">
      <label for="inputemail">Email</label>
      <input type="email" class="form-control" id="inputemail" value="{{$imone->elpastas}}" name="elpastas">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputVeikla">Veikla</label>
      <input type="text" class="form-control" id="inputVeikla" value="{{$imone->veikla}}" name="veikla">
    </div>
    <div class="form-group col-md-6">
      <label for="inputVadovas">Vadovas</label>
      <input type="text" class="form-control" id="inputVadovas" value="{{$imone->vadovas}}" name="vadovas">
    </div>
  </div>
  <div class="col-md-12 text-center">
  <button type="submit" class="btn btn-primary">Atnaujinti</button>
  </div>
</form>
</div>
@endsection