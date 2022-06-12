@extends('welcome')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Impiegati</h2>
    <form method="POST" action="store">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Livello</label>
          <input type="number" name="level" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datiImpiegati as $datiImpiegato)
            <tr>
                <th scope="row">{{$datiImpiegato->id}}</th>
                <td>{{$datiImpiegato->name}}</td>
                <td>{{$datiImpiegato->level}}</td>
              </tr>
            @endforeach
        </tbody>
    </table>
    <h2 class="text-center">Clienti</h2>

    <form method="POST" action="{{route('storeClienti')}}">
        @csrf
        <select name="employee_id" id="">
            @foreach ($datiImpiegati as $datiImpiegato)
                <option value="{{$datiImpiegato->id}}">
                    {{$datiImpiegato->name}}
                </option>
            @endforeach
        </select> 
        <div class="form-group">
          <label for="exampleInputEmail1">Cliente</label>
          <input type="text" name="customer" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Data</label>
          <input type="date" name="acquisition-date" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Importo</label>
            <input type="number" name="amount" class="form-control" id="exampleInputEmail1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Id impiegato</th>
            <th scope="col">Cliente</th>
            <th scope="col">Data</th>
            <th scope="col">Importo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datiClienti as $datiCliente)
            <tr>
                <th scope="row">{{$datiCliente->id}}</th>
                <td>{{$datiCliente->employee_id}}</td>
                <td>{{$datiCliente->customer}}</td>
                <td>{{$datiCliente->acquisition_date}}</td>
                <td>{{$datiCliente->amount}}</td>
              </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection