<!-- COPYRIGHT-->
<section class="p-t-60 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright" style="padding: 0;">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END COPYRIGHT-->

<!-- Jquery JS-->
<script src="{{asset('adminAssets')}}/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{asset('adminAssets')}}/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{asset('adminAssets')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="{{asset('adminAssets')}}/vendor/slick/slick.min.js">
</script>
<script src="{{asset('adminAssets')}}/vendor/wow/wow.min.js"></script>
<script src="{{asset('adminAssets')}}/vendor/animsition/animsition.min.js"></script>
<script src="{{asset('adminAssets')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{asset('adminAssets')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{asset('adminAssets')}}/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{asset('adminAssets')}}/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{asset('adminAssets')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{asset('adminAssets')}}/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{asset('adminAssets')}}/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="{{asset('adminAssets')}}/js/main.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

<script>
    var del = document.getElementById('delete');
    del.addEventListener('click',function(e){
        e.preventDefault();
    });
</script>

    <script>
        ClassicEditor
                .create( document.querySelector( '#about-text' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#contact-text' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#references-text' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );

                
    </script>

<script>
    ClassicEditor
            .create( document.querySelector( '#detail' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>