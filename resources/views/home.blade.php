
@Section('body')
<section class="container-fluid p-t-md">
    <div class="row text-center">


        <div class="col-12">
            <!-- card -->
            @extends('layout.header')

            <div class="card d-c-c">
                <div class="card-body d-c-b">
                    @if(session()->has('msg'))
<div class="alert alert-success">
    {{ session()->get('msg') }}
</div>
@endif
                    <img src="assets/img/avatar.png " name="image" data-toggle="modal" data-target="#exampleModal" width="95"
                         height="95" class="i-m-g img-fluid">
                    <h6 class="c-h-6">
                        <a href="">
                            <i class="fas fa-cog" style="font-size:16px;"></i>
                        </a>
                        {{Auth::user()->name}}
                    </h6>



                    <a class="link-color" style="font-size: 18px; color: #0da39c" href="/s/{{Auth::user()->username}}" target="_blank">
                        http://sarahahclone.herokuapp.com/s/{{Auth::user()->username}}
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- pills -->



    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-body ">
                    <ul class="nav nav-pills" id="pills-tab" >

                        <li class="nav-item">
                            <a class="nav-link active p-l-c" id="pills-Recceived-tab" data-toggle="pill"

                               role="tab" aria-controls="pills-Recceived"
                               aria-selected="true">Recceived</a>  <br>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Recceived" role="tabpanel"
                             aria-labelledby="pills-Recceived-tab">
<style>
    .d-i-vp-oborder-top-none{


        text-align: center
    }
    li{
        margin: 0 auto
    }
</style>
                            <div class="d-i-vp-oborder-top-none">

                                <span class="s-pan"> @forelse ($messages as $message)
                                     Message {{$loop->index+1}} <br>
                                 <h3>   {{$message->body}}</h3>
                                    <form action="/del_msg/{{$message->id}}" method="post">
                                        @csrf
                                <button  class="btn btn-danger btn-vsm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                    <br>
                                    <p class="text-muted mt-0 py-0 ml-2">
                                        {{$message->created_at}}

                                    </p>
                                        <hr>


                                    @empty
                                         <h2>You don't have any messages...Share your profile! </h2>
                                    @endforelse</span>
                                <br/>


                            </div>

                            </div>


                        </div>


                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</section>


@endsection
<!-- section -->
