@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

    <form class="form-horizontal"  method="POST" action="/update/{{$user->id}}">

     {{csrf_field()}}

      <input type="hidden" name="_method" value="PATCH">




                <div class="panel-body">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>

                            </div>
                        </div>

        

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">email</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->email}}" required autofocus>

                            </div>
                        </div>
           
                  
           

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">address</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->address}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">mobile</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->mobile}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">password</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Put NEW password" value="" required autofocus>

                            </div>
                        </div>

                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    update informations
                                </button>
                            </div>
                        </div>


         </div>
       </div>
    </form>
    </div>
</div>


    @include('layouts.errors')
  </div>
</div>



@endsection