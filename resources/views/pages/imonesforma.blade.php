@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center m-2">
            <h1>Naujos Imones Ivedimas</h1>
        </div>
    </div>
<form action="/submit" method="POST">
{{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Pavadinimas</label>
      <input type="text" class="form-control" id="inputText" placeholder="Pavadinimas" name="pavadinimas">
        @error('pavadinimas')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputKodas">Kodas</label>
      <input type="number" class="form-control" id="inputKodas" placeholder="Kodas" name="kodas">
      @error('kodas')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPVM">Pvm Kodas</label>
      <input type="number" class="form-control" id="inputPVM" placeholder="Pvm Kodas" name="pvm_kodas">
        @error('pvm_kodas')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputAdresas">Adresas</label>
      <input type="adress" class="form-control" id="inputAdresas" placeholder="Adresas" name="adresas">
      @error('adresas')
            <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTelefonas">Telefonas</label>
      <input type="number" class="form-control" id="inputTelefonas" placeholder="Telefonas" name="telefonas">
      @error('telefonas')
            <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputemail">Email</label>
      <input type="email" class="form-control" id="inputemail" placeholder="Email" name="elpastas">
      @error('email')
            <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputVeikla">Veikla</label>
      <input type="text" class="form-control" id="inputVeikla" placeholder="Veikla" name="veikla">
      @error('veikla')
            <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputVadovas">Vadovas</label>
      <input type="text" class="form-control" id="inputVadovas" placeholder="Vadovas" name="vadovas">
      @error('vadovas')
            <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
  </div>
  <div class="col-md-12 text-center">
  <button type="submit" class="btn btn-primary">Sukurti</button>
  </div>
</form>
</div>
@endsection