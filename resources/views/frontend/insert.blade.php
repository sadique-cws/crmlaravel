@extends('frontend.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('client.store')}}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="">Client Name</label>
                                <input type="text" name="client_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">alt_contact</label>
                                <input type="text" name="alt_contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">service</label>
                                <input type="text" name="service" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-danger w-100">
                            </div>

                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection