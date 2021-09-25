@extends('layout.header')
@section('body')


<!-- section -->

<section class="container-fluid">

    <div class="row b-md" style=" padding: 85px 87px 0 ;">

        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

            <ul class="list-group" id="list-tab" role="tablist">
                <li class="list-group-item settings">Settings</li>

                <li class="list-group-item active settings">
                    <a id="list-home-list" data-toggle="list"
                       role="tab" aria-controls="home" href="Personal%20Information.html">
                        <i class="fa fa-user"></i>
                        &#160;
                        Personal Information
                    </a>

                </li>




                <li class="list-group-item settings">
                    <a href="/home">
                        <i class="fa fa-comment-alt" style="color: #888888;"></i>
                        &#160;
                        Back to messages
                    </a>

                </li>
            </ul>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="card">
                <div class="cord-body">
                    <div class="tab-content" id="nav-tabContent">
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                             aria-labelledby="list-home-list">
                            <form action="/setting/s/{{$info->id}}" method="post">
                                @csrf
                                <h4 style="font-size: 20px">Edit personal information</h4>
                                <hr/>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="Name">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name = 'name'id="Name" value="{{$info->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="email" id="Email"
                                               value="{{$info->email}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="username">Username</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name = 'username'id="username" value="{{$info->username}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-offset-4 col-md-8">
                                        <button type="submit" class="btn btn-primary-outline">Save</button>
                                    </div>
                                </div>
                                @if(session()->has('msg'))
                                <div class="alert alert-success">
                                    {{ session()->get('msg') }}
                                </div>
                                @endif
                                <br/>
                            </form>
                            <br/>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<br/>
<br/>
<!-- footer -->
@endsection
