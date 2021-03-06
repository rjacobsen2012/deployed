@extends('layouts.default')

@section('content')
<div class="container-fluid" style="position:absolute; top:52px; z-index:-1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                   <div class="panel-body">
                        @if ($errors != '')
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> {{$errors}}<br><br>

                        </div>
                    @endif

                       <form class="form-horizontal" role="form" method="POST" action="/login">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <label class="col-md-4 control-label">UserName</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="username" value="{{ $username }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password" value="">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                     <button type="submit" class="btn btn-primary">
                                          Submit
                                     </button>
                                     @if($reset == 'yes')
                                        <input name="Reset" class="btn btn-primary pull-right" type="submit" value="Reset Password">
                                     @endif
                                </div>
                            </div>
                       </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection