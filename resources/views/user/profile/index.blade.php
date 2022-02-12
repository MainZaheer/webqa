@extends('layouts.app')
@section("content")

<div class="content-inner">
    <div class="content-inner-header">
    <h2 class="content-title">Profile</h2>
    </div>
    <div class="row">
    <div class="col">
        <div class="card-custom">
        <div class="card-body py-5">
            <form>
            <div class="row mb-3">
                <label for="name" class="col-5 col-md-3 text-end col-form-label label-custom">Full Name</label>
                <div class="col">
                <input type="text" class="form-control custom-input" id="name" name="name" value="{{ $user->name }}" disabled>
                </div>
                <div class="col-md-3 d-none d-md-block"></div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-5 col-md-3 text-end col-form-label label-custom">Email Address</label>
                <div class="col">
                <input type="email" class="form-control custom-input" id="email" value="{{ $user->email }}" name="email" disabled>
                <input id="userId" value="{{ $user->id }}" hidden>
                </div>
                <div class="col-md-3 d-none d-md-block"></div>
            </div>
            

            </form>
        </div>
        </div>
    </div>
    </div>

    <div class="content-inner-header mt-4">
    <h2 class="content-title">Update Password</h2>
    </div>
    <div class="row">
    <div class="col">
        <div class="card-custom">
        <div class="card-body py-5">
            <form id="updatePassForm">
            <div class="row mb-3">
                <label for="current_password" class="col-5 col-md-3 text-end col-form-label label-custom">Current Password</label>
                <div class="col">
                <input type="password" class="form-control custom-input" id="current_password" name="current_password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <div class="col-md-3 d-none d-md-block"></div>
            </div>
            <div class="row mb-3">
                <label for="new_password" class="col-5 col-md-3 text-end col-form-label label-custom">New Password</label>
                <div class="col">
                <input type="password" class="form-control custom-input" id="new_password" name="new_password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <div class="col-md-3 d-none d-md-block"></div>
            </div>
            <div class="row mb-3">
                <label for="confirm_password" class="col-5 col-md-3 text-end col-form-label label-custom">Confirm Password</label>
                <div class="col">
                <input type="password" class="form-control custom-input" id="c_new_password" name="c_new_password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <div class="col-md-3 d-none d-md-block"></div>
            </div>

            <div class="row">
            <div class="col">
                        <button type="button" class="btn btn-orange btn-custom" id="updatePass">Update Password</button>
                </div>

                </div>
            </form>
        </div>
        </div>
    </div>
    </div>

    <div class="content-inner-header mt-4">
    <h2 class="content-title">Delete Account</h2>
    </div>
    <div class="row">
    <div class="col">
        <div class="card-custom">
        <div class="card-body py-5 px-4">
            <div class="card-alert">
            <div class="card-body">
                <div class="row">
                <div class="col-auto">
                    <div class="alert-icon text-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                    </div>
                </div>
                <div class="col">
                    <h5 class="alert-title">Please Note</h5>
                    <p class="text-alert">After deleting your account, you will not be able to use our service. Your subscription will be canceled and your content, saved reports and other personal information will be erased.</p>
                </div>
                </div>
            </div>
            </div>
            <button class="btn btn-delete" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete Account</button>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="example_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-custom">
      <div class="modal-header modal-header-custom">
        <p class="modal-title" id="example_modal_label">Confirm Delete Account</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal-account">
        <h6 class="label-bold mb-3">Why are you leaving?</h6>
        <div class="form-check mb-12">
          <input class="form-check-input" type="radio" value="Needed more features" name="reason" id="flex_radio_default2">
          <label class="form-check-label check-label-custom" for="flex_radio_default2">
            Needed more features
          </label>
        </div>
        <div class="form-check mb-12">
          <input class="form-check-input" type="radio" value="There were too many bugs and technical issues" name="reason" id="flex_radio_default3">
          <label class="form-check-label check-label-custom" for="flex_radio_default3">
            There were too many bugs and technical issues
          </label>
        </div>
        <div class="form-check mb-12">
          <input class="form-check-input" type="radio" value="I have decided to use another tool" name="reason" id="flex_radio_default4">
          <label class="form-check-label check-label-custom" for="flex_radio_default4">
            I have decided to use another tool
          </label>
        </div>
        <div class="form-check mb-12">
          <input class="form-check-input" type="radio" value="Did not meet my requirement" name="reason" id="flex_radio_default5">
          <label class="form-check-label check-label-custom" for="flex_radio_default5">
            Did not meet my requirement
          </label>
        </div>
        <div class="form-check mb-12">
          <input class="form-check-input" type="radio" value="Results were inaccurate" name="reason" id="flex_radio_default6">
          <label class="form-check-label check-label-custom" for="flex_radio_default6">
            Results were inaccurate
          </label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" type="radio" value="Other reason" name="reason" id="flex_radio_default8">
          <label class="form-check-label check-label-custom" for="flex_radio_default8">
            Other reason
          </label>
        </div>

        <h6 class="label-bold mb-12">Custom Message</h6>
        <textarea class="form-control custom-input textarea-custom" maxlength="2000" id="message" placeholder="Write your custom message"></textarea>
        <p class="text-end max-length">0/2000</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-rounded btn-grey" data-bs-dismiss="modal">Don't Delete</button>
        <button type="button" class="btn btn-orange" id="deleteAccount">Confirm Delete Account</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section("js")
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


    $("#updatePass").on( "click", function() {
        clearAlerts()
        const id = $("#userId").val()
        const currentPass = $("#current_password")
        const newPassword = $("#new_password")
        const cNewPassword = $("#c_new_password")

        $.ajax({
            url : `/profile/${id}`,
            type : 'POST',
            data: {
                "current_password": currentPass.val(),
                "new_password": newPassword.val(),
                "c_new_password": cNewPassword.val(),
                "_method": 'PUT',
                "_token": $('meta[name="csrf-token"]').attr('content'),
			},       
            success : function(data) {
                if(validate(data)){
                    displayAlert("success", "Password updated successfully.")
                    currentPass.val("")
                    newPassword.val("")
                    cNewPassword.val("")
                }
            }
        });
    });

    $("#deleteAccount").on( "click", function() {
        clearAlerts()

        const id = $("#userId").val()
        const reason = $("[name='reason']:checked");
        const message = $("#message")

        $.ajax({
            url : `/profile/${id}`,
            type : 'POST',
            data: {
                "reason": reason.val(),
                "message": message.val(),
                "_method": 'DELETE',
                "_token": $('meta[name="csrf-token"]').attr('content'),
			},       
            success : function(data) {
                if(validate(data)){
                    window.location = window.location.origin
                }
            }
        });
    });
});
</script>
@endsection