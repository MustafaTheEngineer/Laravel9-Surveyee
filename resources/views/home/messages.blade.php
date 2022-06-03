@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block d-flex justify-content-center">
        <button type="button" class="close" data-dismiss="alert" style="border: 0; align-self:flex-start; background-color:inherit">x</button>
        <strong style="align-self: center;">{{$message}}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
        <span class="badge badge-pill badge-danger">Success</span>
            {{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block d-flex justify-content-center">
        <button type="button" class="close" data-dismiss="alert" style="border: 0; align-self:flex-start; background-color:inherit">x</button>
        <strong style="align-self: center;">{{$message}}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block d-flex justify-content-center">
        <button type="button" class="close" data-dismiss="alert" style="border: 0; align-self:flex-start; background-color:inherit">x</button>
        <strong style="align-self: center;">{{$message}}</strong>
    </div>
@endif

<script>
    const msg = document.querySelectorAll('button.close');
    msg.forEach(function(element) {
        element.addEventListener('click',function(){
            element.parentElement.remove();
        });
    });

    console.log(msg);
</script>