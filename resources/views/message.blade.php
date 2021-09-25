

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/Messages.css">
    <link rel="icon" type="logo" href="assets/img/logo.png" sizes="16x16">
    <title> Sarahah</title>
</head>
<section class="container se-md">
    <div class="row">
        @if(session()->has('msg'))
<div class="alert alert-success">
    {{ session()->get('msg') }}
</div>
@endif
        <div class="col-12">
            <div class="card">
                <div style="background-color: #bbecea" class="card-body">
                    <form action="/home" method = 'POST'>
                        @csrf
                    <div class="pull-right">

                    </div>
                    <div class="text-center">


                    </div>
                    <h5 class="panel-title">
                <span class="text-center" style="margin-right: 15px">
                    <h2>Send message To {{$name->name}}</h2> </span>
                    </h5>
                    <div  class="textarea-container ">
                        <textarea
                            style=" direction: rtl;"
                               name="body"
                                id="message"
                                class="form-control"
                                  style="resize: none; background: none; height: auto;"
                                  rows="5"
                                  placeholder="اجعل رسالتك بناءة :)"
                                  ></textarea>
                    </div>
                    <input type="hidden" name="user_id" value="{{$name->id}}">
                        <br/>
                        <div class="float-left" style="margin-left: 55px ">

                        </div>
                        <br/>

                    <div class="text-center">
                        <input type="submit"  class="btn btn-primary" value="صارح">
                    </div>
                        <br/>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>






<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<style>

