<!DOCTYPE html>
<html lang="en">
<head>
    <link id="ticket_animation" rel="stylesheet" type="text/css" href="{{asset('assets/animation/ticket/')}}/styleTicket.css">
    <link id="ticket_animation" rel="stylesheet" type="text/css" href="{{asset('assets/animation/ticket/')}}/btn-ticket.css">
    <link id="welcome_animation" rel="stylesheet" type="text/css" href="{{asset('assets/animation/welcome/')}}/style.css">
    <title>Wedding of D&A</title>
</head>
<body onload="myFunction()">
<div id="welcome">
<div class="background background0"></div>
<div class="background background1"></div>
<div class="background background2"></div>
<div class="background background3"></div>
<div class="background background4"></div>
<div class="background background5"></div>
<div class="background background6"></div>
<div class="background background7"></div>
<div class="criterion">
    <div class="text text0">W</div>
    <div class="text text1">e</div>
    <div class="text text2">d</div>
    <div class="text text3">d</div>
    <div class="text text4">i</div>
    <div class="text text5">n</div>
    <div class="text text6">g</div>
    <div class="text text7">: )</div>
    <div class="frame frame0"></div>
    <div class="frame frame1"></div>
    <div class="frame frame2"></div>
    <div class="frame frame3"></div>
    <div class="frame frame4"></div>
    <div class="frame frame5"></div>
    <div class="frame frame6"></div>
    <div class="frame frame7"></div>
    <div class="particle particle00"></div>
    <div class="particle particle01"></div>
    <div class="particle particle02"></div>
    <div class="particle particle03"></div>
    <div class="particle particle04"></div>
    <div class="particle particle05"></div>
    <div class="particle particle06"></div>
    <div class="particle particle07"></div>
    <div class="particle particle08"></div>
    <div class="particle particle09"></div>
    <div class="particle particle010"></div>
    <div class="particle particle011"></div>
    <div class="particle particle10"></div>
    <div class="particle particle11"></div>
    <div class="particle particle12"></div>
    <div class="particle particle13"></div>
    <div class="particle particle14"></div>
    <div class="particle particle15"></div>
    <div class="particle particle16"></div>
    <div class="particle particle17"></div>
    <div class="particle particle18"></div>
    <div class="particle particle19"></div>
    <div class="particle particle110"></div>
    <div class="particle particle111"></div>
    <div class="particle particle20"></div>
    <div class="particle particle21"></div>
    <div class="particle particle22"></div>
    <div class="particle particle23"></div>
    <div class="particle particle24"></div>
    <div class="particle particle25"></div>
    <div class="particle particle26"></div>
    <div class="particle particle27"></div>
    <div class="particle particle28"></div>
    <div class="particle particle29"></div>
    <div class="particle particle210"></div>
    <div class="particle particle211"></div>
    <div class="particle particle30"></div>
    <div class="particle particle31"></div>
    <div class="particle particle32"></div>
    <div class="particle particle33"></div>
    <div class="particle particle34"></div>
    <div class="particle particle35"></div>
    <div class="particle particle36"></div>
    <div class="particle particle37"></div>
    <div class="particle particle38"></div>
    <div class="particle particle39"></div>
    <div class="particle particle310"></div>
    <div class="particle particle311"></div>
    <div class="particle particle40"></div>
    <div class="particle particle41"></div>
    <div class="particle particle42"></div>
    <div class="particle particle43"></div>
    <div class="particle particle44"></div>
    <div class="particle particle45"></div>
    <div class="particle particle46"></div>
    <div class="particle particle47"></div>
    <div class="particle particle48"></div>
    <div class="particle particle49"></div>
    <div class="particle particle410"></div>
    <div class="particle particle411"></div>
    <div class="particle particle50"></div>
    <div class="particle particle51"></div>
    <div class="particle particle52"></div>
    <div class="particle particle53"></div>
    <div class="particle particle54"></div>
    <div class="particle particle55"></div>
    <div class="particle particle56"></div>
    <div class="particle particle57"></div>
    <div class="particle particle58"></div>
    <div class="particle particle59"></div>
    <div class="particle particle510"></div>
    <div class="particle particle511"></div>
    <div class="particle particle60"></div>
    <div class="particle particle61"></div>
    <div class="particle particle62"></div>
    <div class="particle particle63"></div>
    <div class="particle particle64"></div>
    <div class="particle particle65"></div>
    <div class="particle particle66"></div>
    <div class="particle particle67"></div>
    <div class="particle particle68"></div>
    <div class="particle particle69"></div>
    <div class="particle particle610"></div>
    <div class="particle particle611"></div>
    <div class="particle particle70"></div>
    <div class="particle particle71"></div>
    <div class="particle particle72"></div>
    <div class="particle particle73"></div>
    <div class="particle particle74"></div>
    <div class="particle particle75"></div>
    <div class="particle particle76"></div>
    <div class="particle particle77"></div>
    <div class="particle particle78"></div>
    <div class="particle particle79"></div>
    <div class="particle particle710"></div>
    <div class="particle particle711"></div>
</div>
</div>
<div style="display:none;" id="myDiv" class="ticket">
	<div class="left">
		<div class="image">
			<p class="admit-one">
				<span>ALDI DEBY</span>
				<span>ALDI DEBY</span>
				<span>ALDI DEBY</span>
			</p>
			<div class="ticket-number">
				<p>
					#000001
				</p>
			</div>
		</div>
		<div class="ticket-info">
			<p class="date">
				<span>SATURDAY</span>
				<span class="june-29">NOVEMBER 27TH</span>
				<span>2022</span>
			</p>
			<div class="show-name">
				<h1><p id="name"></p></h1>
				<h2><p id="pasangan"></p></h2>

			</div>
			<div class="time">
				<p>10:00 AM <span>TO</span> 3:00 PM</p>
				{{-- <p>DOORS <span>@</span> 7:00 PM</p> --}}
			</div>
			<p class="location"><span>Kandang Besar-</span>
				<span class="separator"><i class="far fa-smile"></i></span><span>Ujung Menteng, Jakarta Timur</span>
			</p>
		</div>
	</div>
	<div class="right">
		<p class="admit-one">
			<span>ALDI DEBY</span>
			<span>ALDI DEBY</span>
			<span>ALDI DEBY</span>
		</p>
		<div class="right-info-container">
			<div class="show-name">
				<h1>Wedding Of</h1>
			</div>
			<div class="show-name">
				<h1>Aldi</h1>
				<h1>Deby</h1>
			</div>
			{{-- <div class="time">
                <div class="card">
                    <p>Aldi</p>
                    <p>Deby</p>
                </div>
			</div> --}}
			<div class="barcode">
				<img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code">
			</div>
			<p class="ticket-number">
				#000001
			</p>
		</div>
	</div>
	</div>
    <div id="show-ticket" class="body-ticket" style="display:none;">
		{{-- <a href="/home"> OPEN TICKET </a> --}}
        <div id="btn-action" class="btn"><a href="/mengundang/show"> OPEN TICKET </a>
            <div class="btn2"></div>
          </div>
	</div>
{{-- </div> --}}

<script>
var myVar;

function myFunction() {
  document.getElementById("btn-action").style.display = "none";
  document.getElementById("ticket_animation").disabled = true;
  myVar = setTimeout(showPage, 7000);
}

function showPage() {
  document.getElementById("welcome").style.display = "none";
  document.getElementById("welcome_animation").disabled = true;
  document.getElementById("ticket_animation").disabled = false;
  document.getElementById("myDiv").style.display = "block";
  document.getElementById("show-ticket").style.display = "block";
  document.getElementById("btn-action").style.display = "block";
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    var link = window.location.hash;
    var data = link.split("#");
    var nameU = data[1].split("=")[1].replace(/%22/g," ").replace(/%20/g," ");
    var pasanganU = data[2].split("=")[1].replace(/%22/g," ").replace(/%20/g," ");
    console.log(nameU);
    $("#name").text(nameU);
    if (pasanganU == "1") {
        $("#pasangan").text("& Partner");
    }else{
        $("#pasangan").text("& Wife");

    }
</script>

</body>
</html>
