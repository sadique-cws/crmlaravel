@extends('frontend.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>contact</th>
                        <th>alt_contact</th>
                        <th>service</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                    @foreach ($clients as $client)
                        <tr>
                            <th>{{$client->id}}</th>
                            <th>{{$client->client_name}}</th>
                            <th>{{$client->contact}}</th>
                            <th>{{$client->alt_contact}}</th>
                            <th>{{$client->service}}</th>
                            <th>{{$client->email}}</th>
                            <th>
                                <form action="{{route('client.destroy',['client'=>$client->id])}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">X</button>
                                </form>
                                <a href="" class="btn btn-danger">edit</a>
                            </th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection