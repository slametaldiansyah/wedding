<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Wedding Of D&A</title>
<link rel="icon" href="favicon.png" type="image/png">
{{-- <link href="{{asset('assets/v1/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('assets/v1/')}}/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="{{asset('assets/v1/')}}/css/style.css" rel="stylesheet" type="text/css">
<link href="{{asset('assets/v1/')}}/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="{{asset('assets/v1/')}}/css/animate.css" rel="stylesheet" type="text/css">
<link href="{{asset('assets/custom/')}}/border1.css" rel="stylesheet" type="text/css">
<link href="{{asset('assets/custom/')}}/loadingSpinner.css" rel="stylesheet" type="text/css">
<link href="{{asset('assets/custom/')}}/cardphoto.css" rel="stylesheet" type="text/css">
<link href="{{asset('assets/v1/')}}/fontawesome/css/all.css" rel="stylesheet" type="text/css">
<link href="{{asset('assets/animation/')}}/loading/loading-book.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/v1/')}}/css/component.css" />
<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800|Clicker+Script' rel='stylesheet' type='text/css'>


</head>
<body onload="myFunction()">
{{-- <div id="loader"></div> --}}
<div id="loader-book" class="book">
    <div class="book__page"></div>
    <div class="book__page"></div>
    <div class="book__page"></div>
    <div class="book__page"></div>
    <div class="book__page"></div>
    <div class="book__page"></div>
    <div class="book__page"></div>
    <div class="book__page"></div>
  </div>
<div style="display:none;" id="myDiv" class="animate-bottom">
<div id="intros" class="demo-2">
	<div class="content">
		<div id="large-header" class="large-header">
			<canvas id="demo-canvas"></canvas>
			<div class="main-title">
			<h1><span> Welcome</span></h1>
			  <div class="top_left_cont zoomIn wow animated">
            <h4>Our Wedding</h4>
	  <h2><strong>Deby & Aldi</strong></h2>
	  <h3>August 06 2022,  <a href="https://maps.app.goo.gl/aGMSGAX4tPYegYd97" style="color: #aefffc;">VIEW MAPS</a></h3>
            <div class="btn-maps-view row">
                <button type="button" class="btn btn-lg btn-card-donation" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target=".bd-rekening-modal-sm"> <i class="fas fa-credit-card"></i></i> Gift Or Donation</button>
            </div>
    </div>
	</div>
		</div>
	</div>

</div>
<!-- /container -->

@include('layouts.v1.content.header')

@include('layouts.v1.content.about_us')


@include('layouts.v1.content.our_special')




{{-- <section class="page_section team" id="team">
  <div class="container">
    <h2>Our Family</h2>
    <h6>Turut mengundang Saudara </h6>

		<div id="team" name="team">
  <div class="container">
    <div class="row centered">

      <div class="col-md-3 centered"> <img class="img img-circle" src="{{asset('assets/v1/')}}/img/user1.png" height="120px" width="120px" alt="">
        <h4><strong>Rosy Illue</strong></h4>
        <p>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum gravida tortor.</p><br/> </div>
      <div class="col-md-3 centered"> <img class="img img-circle" src="{{asset('assets/v1/')}}/img/team02.jpg" height="120px" width="120px" alt="">
        <h4><b>Chrislke</b></h4>
        <p>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum gravida tortor.</p><br/> </div>
      <div class="col-md-3 centered"> <img class="img img-circle" src="{{asset('assets/v1/')}}/img/team03.jpg" height="120px" width="120px" alt="">
        <h4><b>Mike Reiln</b></h4>
        <p>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum gravida tortor.</p><br/> </div>
      <div class="col-md-3 centered"> <img class="img img-circle" src="{{asset('assets/v1/')}}/img/team04.jpg" height="120px" width="120px" alt="">
        <h4><b>Dennisel</b></h4>
        <p>Lorem ipsum dolor sit amet, consectetur Morbi sagittis, sem quisci ipsum gravida tortor.</p><br/>
        </div>

    </div>
  </div>
  <!-- row -->
</div>
	</div>
	</div>
</section> --}}
<!--/Team-->
<!--Footer-->
{{-- @include('layouts.v1.v_footer') --}}

{{-- <script type="text/javascript" src="{{asset('assets/v1/')}}/js/jquery-1.11.0.min.js"></script> --}}
{{-- <script type="text/javascript" src="{{asset('assets/v1/')}}/js/bootstrap.min.js"></script> --}}
<script type="text/javascript" src="{{asset('assets/v1/')}}/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="{{asset('assets/v1/')}}/js/jquery.nav.js"></script>
<script type="text/javascript" src="{{asset('assets/v1/')}}/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="{{asset('assets/v1/')}}/js/jquery.isotope.js"></script>
<script src="{{asset('assets/v1/')}}/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets/v1/')}}/js/wow.js"></script>
 {{-- <script src="{{asset('assets/v1/')}}/contact/jqBootstrapValidation.js"></script> --}}
<script src="{{asset('assets/v1/')}}/js/rAF.js"></script>
<script src="{{asset('assets/v1/')}}/js/demo-2.js"></script>
 {{-- <script src="{{asset('assets/v1/')}}/contact/contact_me.js"></script> --}}
{{-- <script type="text/javascript" src="{{asset('assets/v1/')}}/js/custom.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var myVar;

function myFunction() {
      myVar = setTimeout(showPage, 3500);
}

function showPage() {
  document.getElementById("loader-book").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
//   $(".bd-alertdialog-modal-sm").modal('show');
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-maps-view',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: '',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            showClass: {
                popup: 'zoomIn wow animated'
            },
            hideClass: {
                popup: 'zoomIn wow animated'
            }
        })
}
</script>
@include('layouts.v1.card.v_card_rekening')

</body>
</html>
