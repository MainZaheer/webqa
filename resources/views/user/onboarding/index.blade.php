<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="font-sans antialiased">

        <div class="content-wrapper d-flex">
            <div class="sidebar">
                <a class="sidebar-logo" href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/logo-dashboard.png') }}" alt="Logo">
                </a>

            </div>
            <div class="content">
                <div class="content-header">
                    <button class="button-toggle">
                        <div class="icon-toggle"></div>
                    </button>
                    <div class="content-header-right d-flex align-items-center">
                            <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle rounded-ten" type="button" id="dropdown_menu_button2" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->email }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu dropdown-menu-custom" aria-labelledby="dropdown_menu_button2">
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- content -->
                <div class="content-inner">
                    <div class="content-inner-header">
                        <h2 class="content-title">OnBoarding</h2>
                        <p>Create a new project before running a test</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card-custom">
                                <div class="card-body py-5">
                                    <form>
                                        <div class="row mb-3">
                                            <label for="name" class="col-5 col-md-3 text-end col-form-label label-custom">Project Name</label>
                                            <div class="col">
                                                <input type="text" class="form-control custom-input" id="name" name="name">
                                            </div>
                                            <div class="col-md-3 d-none d-md-block"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-5 col-md-3 text-end col-form-label label-custom">Website Homepage</label>
                                            <div class="col">
                                                <input type="text" class="form-control custom-input" id="homepage" name="homepage">
                                            </div>
                                            <div class="col-md-3 d-none d-md-block"></div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email" class="col-5 col-md-3 text-end col-form-label label-custom">List of urls</label>
                                            <div class="col">
                                                <textarea type="email" class="form-control custom-input" id="urlsList" name="urlsList"></textarea>
                                            </div>
                                            <div class="col-md-3 d-none d-md-block"></div>
                                        </div>
                                        <div class="row mb-3">
                                        <div class="col-md-3 d-none d-md-block"></div>

                                        <div class="col">
                                        <button type="button" class="btn btn-orange btn-custom" id="createProject">Create</button>
                                        </div>
                                        <div class="col-md-3 d-none d-md-block"></div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            $( document ).ready(function() 
{
    function buildAlert(txt){
        const span = document.createElement("div")
        span.innerHTML = txt
        span.classList.add("feedback")
        return span
    }

    function clearAlerts(){
      $(`.alert`).remove()
      $(`.feedback`).remove()
    }

    function validate(data){
        let state
        if(data.status === 0){
            state = false
            for (const key in data.msg) {
                const msg = data.msg[key]
                const alert = buildAlert(msg)
                if($(`#${key}`)[0]){
                  $(`#${key}`)[0].parentElement.appendChild(alert)
                }else{
                  console.log($(`[name=${key}]`))
                  $(`[name=${key}]`)[0].parentElement.parentElement.prepend(alert)
                }
            }
        }else{
            state = true
        }
        return state
    }
    

    function displayAlert(type, msg){
        let className
        if(type === "success"){
            className = ["alert", "alert-success",  "alert-success-custom",  "alert-dismissible", "fade", "show"]
        }else{
            className = ["alert", "alert-success",  "alert-success-custom",  "alert-dismissible", "fade", "show"]
        }
        const div = document.createElement("div")
        div.setAttribute("role", "alert")
        className.forEach(val=>{
            div.classList.add(val)
        })
        div.innerHTML = 
        `<span>${msg}</span>
        <button type="button" class="btn"></button>
        `

        $(".content-inner")[0].prepend(div)
    }


    $("#createProject").on( "click", function() {
        clearAlerts()
        const name = $("#name")
        const homepage = $("#homepage")
        const urlsList = $("#urlsList")

        $.ajax({
            url : `/projects`,
            type : 'POST',
            data: {
                "name": name.val(),
                "homepage": homepage.val(),
                "urlsList": urlsList.val(),
                "_method": 'POST',
                "_token": $('meta[name="csrf-token"]').attr('content'),
			},       
            success : function(data) {
                if(validate(data)){
                    window.location = "/dashboard"
                }
            }
        });
    });


});
        </script>
    </body>
</html>
