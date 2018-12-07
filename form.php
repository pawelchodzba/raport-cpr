

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Centrum Powiadamiania Ratunkowego</title>
	<meta name="author" content="Pawel Chodzba">

<style type="text/css">

#all{
	
display:flex;
background-color:#9B9EBB;	
}
#form_all{
width:50%;
height:58cm;

}
#title{
display:flex;
justify-content:center;
text-align:center;
}
#tab{
	width:100%;

}
#tab table{
border-collapse:collapse;
}
#tab table tr th,#tab table tr td{
border:1px solid black;
background-color:white;
}

#tab table th:nth-child(1){
	width:5%;
}
#tab table th:nth-child(2){
	width:40%;
}
#tab table th:nth-child(3){
	width:10%;
}
#tab table th:nth-child(4){
	width:10%;
}
#tab table th:nth-child(5){
	width:40%;
}
#tab table th:nth-child(6){
	width:30%;
	display:none;
}

.class_tr:hover{
	
background-color:red
}
.class_tr input{
font-size:18px;
border:none;
width:100%;
height:22px;

}
@media all and (max-width:900px){ 
	.class_tr input,#tab table tr th{
	font-size:12px;	
	}

}	
@media all and (max-width:770px){ 
	.class_tr input,#tab table tr th{
	font-size:10px;	
	}	

}
.class_tr>td:nth-child(5n+2)>input{


}
.class_tr>td:nth-child(5n+2)>input:hover {
 cursor:pointer;
 background-color:#C35050;
 color:white;
}

.class_tr>td:nth-child(5n+3)>input{

text-align:center;

}
.class_tr>td:nth-child(5n+4)>input{

text-align:center;
}

.class_tr>td:nth-child(5n+4)>input:hover{
 cursor:pointer;
 background-color:#4C8849;
 color:white;
}

.class_tr>td:nth-child(5n+5)>input{
text-align:center;
}
.class_tr>td:nth-child(5n+6)>div{
width:100px;
display:none;
}

.wraper_list>ul,#wrap_dyzurny>ul{
list-style:none;
position:absolute;
transform:translate(-40px,-20px);
}
.wraper_list>ul>li,#wrap_dyzurny>ul>li{
border-bottom:1px solid black;
background-color:white;
letter-spacing:1px;
padding:3px 2px;
width:200px;
}

.wraper_list>ul>li:nth-child(2n+1),#wrap_dyzurny>ul>li:nth-child(2n+1){
background-color:#DEDFDB;
}
.wraper_list>ul>li:hover,#wrap_dyzurny>ul>li:hover{
color:white;
background-color:brown;
cursor:pointer;
}
#dyzurny{
	border:none;
}
#wrap_dyzurny>ul{
transform:translate(70px,-15px);
}

.koordynator{
display:flex;
justify-content:space-around;
}
	
#print,#anuluj button{
	width:100%;	
	font-size:18px;
	letter-spacing:1px;
	}
	
#print:hover,#anuluj  button:hover{
background-color:#B8B8B8;	
cursor:pointer;
	}	
	
	
/*////////////////////////////svg/////////////////*/
#svg{

width:50%;
height:50%;
}
svg{
	position:relative;
	top:180px;
background:-webkit-radial-gradient(circle ,#211E51 1%,#302D65 50%,#47438D);
}


.main_stan{
fill:#5E5C7A;
color:black;
}
.main_stan:hover{
fill:#211E51;
cursor:pointer;
}
.activ_svg{
fill:#51540A;
}
.main_stan text {
	fill:white;
}
.main_stan ellipse,.main_stan rect{
	//fill:white;
	stroke:white;
}

/*//////////////////////////window info////////////////*/
#window_info{
position:relative;
top:188px;
width:100%;
height:10mm;
background:-webkit-radial-gradient(circle ,#211E51 1%,#302D65 50%,#47438D);;
text-align:center;
border-bottom:1px solid white;
font-size:26px;
color:white;
z-index:222;
padding:1px 0;
}

@media all and (max-width:900px){ 
		#window_info{
			height:7mm;
			font-size:14px}
}
/*//////////////////////////print////////////////*/
@media print{
	#svg{
		display:none;
	}	
	#all{
	width:20cm;
	background-color:white;	
	}	
	#form_all{
width:20cm;
}
#tab table th:nth-child(6){
	width:40%;
	display:table-cell;
}
#tab table th:nth-child(5){
	width:10%;
	
}
#tab table th:nth-child(2){
	width:30%;
	
}
	#anuluj{
		display:none;
	}
#print{
		display:none;
	}	
}
</style>	
		
</head>
<body>
<div id="all">
	
	
	

	<div id="form_all">
		<div id="title">
			<p><span  id="nr_r"></span><br>
					Z DYŻURU OPERATORA NUMERÓW ALARMOWYCH W CENTRUM<br>
					POWIADAMIANIA RATUNKOWEGO W RZESZOWIE<br>
					<span id="date"></span>
			</p>
		</div>
			<p>ZK - IV.0444.2.<span id="month">1</span>.2018</p>
			<p>1. Osoby pełniące dyżur:</p>
		
		<div id="tab">
			<table>
				<tbody>
					<tr><th>Lp.</th> <th>Nazwisko Imię</th>  <th>Numer <br>operatora</th>  <th>Numer <br>konsoli<br> dyspozytorskiej<br> (KD)</th>  <th>Godziny<br> pełnienia<br> dyżuru</th>  <th>Podpis operatora</th></tr>
				</tbody>
				
			</table>
			<button id="print">Drukuj</button>
			<div id="anuluj"></div>
			<p>2. Informacja o ilości przyjętych zgłoszeń na numer alarmowy 112.</p>
			<p>2.1. Raporty sporządzane za dany miesiąc przez operatorów pełniących funkcje  koordynatora.</p>
			<p>2.1.1. Raport1_RZE_Zgłoszenia_PR </p> 
			<p>2.1.2. Raport2_RZE_Zgłoszenia_obsł_PR</p>
			<p>2.1.3. Raport3_RZE_Zdarzenia_PR</p>
			<p>2.1.4. Raport4_RZE_Czasy_PR</p>
			<p>2.1.5. Statystyka zbiorcza za dany rok dla CPR (styczeń – grudzień) uzupełniana przez koordynatora na bieżąco co miesiąc według załączonego wzoru - forma elektroniczna.</p>
			<p>2.2. Raporty 2.1.1-2.1.1.4 za poprzedni miesiąc koordynator zmiany sporządza 1 – go dnia danego miesiąca po godz. 13.00 (aktualizacja danych).</p>
			<p>	3. Dane dotyczące  zaistniałych zdarzeń podczas pełnionego dyżuru.</p>
			<p>	3.1. Awarie dotyczące sprzętu na stanowisk operatorskich oraz awarie serwera DGT odnotowujemy w przeznaczonym do tego dzienniku awarii.</p>
			<p>	3.2. Ilość kart do logowania podczas zmiany dyżuru<input value="(stan 57)– 57"/></p>
			<p>3.3. Ilość telefonów komórkowych podczas zmiany dyżuru ( telefony 4, ładowarki 2) – 4/2</p>
			<p>3.4. Sprawdzenie działania i stanu naładowania baterii telefonów komórkowych (każdy piątek do godz.12.00) –</p>
			<p>3.5. Karta dla operatorów numerów alarmowych do wejścia do serwerowni CPR w KM PSP w Rzeszowie <input value="(stan 1) – 1"/></p>
			<p>3.6. Czy wykonano restarty zestawów operatorskich?- tylko zmiana nocna –</p>
			<p>3.7. Zastępstwo podczas dyżuru – nazwisko i imię zastępującego, nazwisko i imię zastępowanego, godziny zastępstwa, przyczyna zastępstwa.</p>
			<p>______________________________________________________________________________________</p>
			<p>______________________________________________________________________________________</p>
			<p>______________________________________________________________________________________</p>
			<p>3.9. Inne zdarzenia – opis.</p>
			<p>______________________________________________________________________________________</p>
			<p>______________________________________________________________________________________</p>
			<p id="wrap_dyzurny">3.10 dyżurny zmiany:<input type="text" id="dyzurny"></p>
			<p>4. Stan słowników wyrazów obcych (ogólna liczba 8 szt.) -  8</p>
			<p>5. Informacje dotyczące brakującego wyposażenia.</p>
			<p>______________________________________________________________________________________</p>
			<p>______________________________________________________________________________________</p>
			<p>______________________________________________________________________________________</p>
			
			<div class="koordynator">
					<p>Operator realizujący zadania  <br>                                                                     
							koordynatora zmianowego  <br>                                           
							(zdający)
							 <br> <br> ______________________
					</p>   

					<p> Operator realizujący zadania	<br>      
							koordynatora zmianowego<br>      
							(przyjmujący)
							<br> <br> _______________________
					</p>
			</div>
	</div>
	
	</div>
	
	
	<div id="svg">
	<div id="window_info"></div>
		<svg   width="100%"   height="20%"   viewBox="0 0 1052.3622 744.09448"  >
		  
			<text 
				 y="80.28064"
				 x="120.069498"
				  style="font-style:normal;fill:white;font-weight:normal;font-size:32.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:1px;word-spacing:1px;fill-opacity:1;stroke:none;stroke-width:3px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 
				 >Centrum Powiadamiania Ratunkowego w Rzeszowie</text>
		  <g
			
			 transform="translate(0,-308.26772)">
			 
			<g  class="main_stan"
			   id="s_18">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-56.57481"
				 x="526.0686"
				 height="53.149605"
				 id="rect3336-3-7"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227028,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620"
				 y="580.28064"
				 x="12.069498"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:3px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="580.28064"
				   x="12.069498"
				   id="tspan3622"
				   sodipodi:role="line">18</tspan></text>
			</g>
			
			
			<g class="main_stan"
				id="s_14">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-137.02626"
				 x="769.28082"
				 height="53.149605"
				 id="rect3336-3-40"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-7"
				 y="818.76971"
				 x="95.793488"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="818.76971"
				   x="95.793488"
				   id="tspan3622-8"
				   sodipodi:role="line">14</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_10">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-190.19591"
				 x="769.19153"
				 height="53.149605"
				 id="rect3336-3-055"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-8"
				 y="820.22815"
				 x="151.3336"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="820.22815"
				   x="151.3336"
				   id="tspan3622-86"
				   sodipodi:role="line">10</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_12">
			  <rect
				 width="124.01575"
				 y="893.24274"
				 x="12.947476"
				 height="53.149605"
				 id="rect3336-3-05"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-73"
				 y="902.87109"
				 x="63.909351"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="902.87109"
				   x="63.909351"
				   id="tspan3622-6"
				   sodipodi:role="line">12</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_11">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-190.10663"
				 x="893.25403"
				 height="53.149605"
				 id="rect3336-3-1"
				 style="fill-rule:evenodd;stroke-opacity:1" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-5"
				 y="936.41443"
				 x="152.105"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="936.41443"
				   x="152.105"
				   id="tspan3622-4"
				   sodipodi:role="line">11</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_9">
			  <rect
				 width="124.01575"
				 y="844.47821"
				 x="323.12085"
				 height="53.149605"
				 id="rect3336-3-3"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-4"
				 y="855.29443"
				 x="390.7634"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="855.29443"
				   x="390.7634"
				   id="tspan3622-0"
				   sodipodi:role="line">9</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_5">
			  <rect
				 width="124.01575"
				 y="844.48389"
				 x="570.18024"
				 height="53.149605"
				 id="rect3336-3-37"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-83"
				 y="854.60693"
				 x="648.21832"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="854.60693"
				   x="648.21832"
				   id="tspan3622-69"
				   sodipodi:role="line">5</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_7">
			  <rect
				 width="123.02901"
				 y="897.64136"
				 x="447.13623"
				 height="52.16288"
				 id="rect3336"
				 style="fill-rule:evenodd;stroke-width:0.98672509;stroke-opacity:1" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-2"
				 y="907.88812"
				 x="511.49084"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="907.88812"
				   x="511.49084"
				   id="tspan3622-9"
				   sodipodi:role="line">7</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_8">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-447.13675"
				 x="897.64008"
				 height="53.149605"
				 id="rect3336-3-09"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-732"
				 y="938.82556"
				 x="422.76343"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="938.82556"
				   x="422.76343"
				   id="tspan3622-08"
				   sodipodi:role="line">8</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_6">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-623.32031"
				 x="897.65308"
				 height="53.149605"
				 id="rect3336-3-8"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-6"
				 y="936.76306"
				 x="604.21826"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="936.76306"
				   x="604.21826"
				   id="tspan3622-2"
				   sodipodi:role="line">6</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_13">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-394.1691"
				 x="623.56653"
				 height="53.149605"
				 id="rect3336-3-38"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-71"
				 y="675.51349"
				 x="360.21786"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="675.51349"
				   x="360.21786"
				   id="tspan3622-64"
				   sodipodi:role="line">13</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_17">
			  <rect
				 transform="scale(-1,-1)"
				 width="124.01575"
				 y="-623.57037"
				 x="-394.15912"
				 height="53.149605"
				 id="rect3336-3"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-55"
				 y="589.23242"
				 x="331.49057"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="589.23242"
				   x="331.49057"
				   id="tspan3622-88"
				   sodipodi:role="line">17</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_15">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-678.45483"
				 x="623.56653"
				 height="53.149605"
				 id="rect3336-3-4"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-0"
				 y="669.0401"
				 x="651.96594"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="669.0401"
				   x="651.96594"
				   id="tspan3622-28"
				   sodipodi:role="line">15</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_16">
			  <rect
				 transform="scale(-1,-1)"
				 width="124.01575"
				 y="-623.55487"
				 x="-749.31866"
				 height="53.149605"
				 id="rect3336-3-4-3"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-62"
				 y="589.3139"
				 x="691.04974"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="589.3139"
				   x="691.04974"
				   id="tspan3622-06"
				   sodipodi:role="line">16</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_3">
			  <rect
				 width="124.01575"
				 y="831.89948"
				 x="766.99664"
				 height="53.149605"
				 id="rect3336-3-0"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-26"
				 y="845.021"
				 x="847.38489"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="845.021"
				   x="847.38489"
				   id="tspan3622-1"
				   sodipodi:role="line">3</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_2">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-944.15808"
				 x="760.99677"
				 height="53.149605"
				 id="rect3336-3-9"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-57"
				 y="809.04706"
				 x="934.80914"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="809.04706"
				   x="934.80914"
				   id="tspan3622-97"
				   sodipodi:role="line">2</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_4">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-891.01361"
				 x="884.99512"
				 height="53.149605"
				 id="rect3336-3-33"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-3"
				 y="933.49762"
				 x="878.24048"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="933.49762"
				   x="878.24048"
				   id="tspan3622-27"
				   sodipodi:role="line">4</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_1">
			  <rect
				 width="124.01575"
				 y="885.00299"
				 x="890.99841"
				 height="53.149605"
				 id="rect3336-3-5"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-34"
				 y="893.63452"
				 x="975.94995"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="893.63452"
				   x="975.94995"
				   id="tspan3622-7"
				   sodipodi:role="line">1</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="szkoleniowe_19">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-1023.7177"
				 x="461.7829"
				 height="53.149605"
				 id="rect3336-3-7-0"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.93740973,1.0667694)"
				 sodipodi:linespacing="125%"
				 id="text3620-47"
				 y="493.25537"
				 x="1046.7433"
				 style="font-style:normal;font-weight:normal;font-size:20.31489754px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="493.25537"
				   x="1046.7433"
				   id="tspan3622-3"
				   sodipodi:role="line">szk</tspan></text>
			</g>
		  </g>
		</svg>
		
		
	</div>
	
	
	
</div>
<script>
document.getElementById('print').onclick=function(){
	window.print();
};


const Input=(function(){
	function Input(select_el,controll,delault_v){
			this.select_el=select_el;
			this.controll=controll;
			this.delault_v=delault_v;
			this.input;
			this.values;
			this.Tr;
			this.Html;
			this.last_inp;
			this.last_id_inp;
			}

	Input.prototype.init_focus=function(){
		
			let inputs =this.select_el.querySelectorAll('#tab tr>td:nth-child(5n+2)>input');
				for(el of inputs){
					el.addEventListener('focus',this.activInput.bind(this));
					}
			this.last_id_inp=el.id;
	}
	
	Input.prototype.init_dyz=function(){
	this.select_el.addEventListener('focus',this.activInput.bind(this));
		}
	Input.prototype.activInput=function(e){
	console.log()
		if(this.input==e.target)return;//cls mullti call
			this.input=e.target;
			this.add_obj_();
			e.target.addEventListener('keyup',this.getValue.bind(this));
		this.Html.select_el(this.input);
		}
	Input.prototype.cls_tr_go=function(e){
		if(!this.Tr)return;
			else{
			this.Tr.tab_refere();
		}
	}
	Input.prototype.set_Html=function(Html){
		this.Html=Html;
	}
	Input.prototype.no_duble=function(arr_duble){
		this.controll.no_duble(arr_duble);
	}
	Input.prototype.add_obj_=function(){//console.log(this.input)
		if(this.input.value){this.controll.add_obj(this.input.value);
		}else{ return;}
		
	}
	Input.prototype.getValue=function(e){
		this.controll.fetch_value(this.values=e.target.value); //ajax.execute({v:this.value});
	}
	Input.prototype.setValue=function(value_target){
			if(typeof value_target =='string'){
				return	this.input.value=value_target;
			}else {
				this.input.value='';
			}
		
	};
	
	return Input;
})();





const Controll=(function(){
	function Controll(obj_array,html,char_len){
		this.obj_array=obj_array;
		this.html=html;
		this.char_len=char_len;
		this.string;
		this.Obj_duble_start={};
		this.constans_data;
		}
		
		
	Controll.prototype.switch_=function(){
		if(Array.isArray(this.obj_array)){
					const serch_array=this.Serch_array();
				}else{
					this.search_obj()
			}
		}
	Controll.prototype.default_duble=function(obj_duble_start){
			let name_arr=obj_duble_start.map((obj)=>{	return obj.name;})
			this.no_duble(name_arr)
			}
	Controll.prototype.no_duble=function(arr_duble){
			let arr_filter=[];
			 for(let i in this.obj_array.ona){
				 if(arr_duble.indexOf(this.obj_array.ona[i].name)==-1) arr_filter.push(this.obj_array.ona[i])
				 }
			this.obj_array.ona=arr_filter;
		}
	Controll.prototype.constans_data=function(constans_data){this.constans_data=constans_data;}	
	Controll.prototype.add_obj=function(name){
		 for(let i in this.constans_data.ona){
				 if(this.constans_data.ona[i].name===name) this.obj_array.ona.push(this.constans_data.ona[i]);
		}
	}
			
	Controll.prototype.search_obj=function(){
		let array_result=[];
		let label_result=[];
		let reg_exp=new RegExp(this.string,"gi");
		
			for(let i in this.obj_array.ona){
				if(reg_exp.exec(this.obj_array.ona[i].name)){
					
				array_result.push(this.obj_array.ona[i].name);
				label_result.push(this.obj_array.ona[i].nr_g);
					}
				}
		
				this.send_array(array_result,label_result);
		}
	Controll.prototype.fetch_value=function(string){
		this.string=string;
		this.switch_();
	}
	
	Controll.prototype.Serch_array=function(){
			let array_result=this.obj_array.filter(function(v){
				if(this.string.length>=this.char_len){
				let reg_exp=new RegExp(this.string,"gi");
			return reg_exp.exec(v);	
			}else{return}
			//return v.indexOf(this.string)==0;
			}.bind(this));
		
			this.send_array(array_result,null);
		
	}
			function Serch_obj(){console.log('obj'),send_array(array_result);}////object
	
	Controll.prototype.send_array=function(array,label_result){
			this.html.dowland(array,label_result);
	
	}
	return Controll;
})()

const Create_html=(function(){
	function Get_ele(id){
		this.wraper;
		this.list;
		this.Inp;
		this.Search;
		this.Row
		this.result_value;
		this.nr_row;
		this.no_duble=[];
		this.Raport_;
	
	}
	Get_ele.prototype.select_el=function(wraper){
				this.nr_row=wraper.id;
				this.wraper=document.querySelector('#wrap_'+this.nr_row);
			
			}
	
	Get_ele.prototype.dowland=function(array,label_result){
		this.behavior_list(array,label_result);
	}
	
	Get_ele.prototype.behavior_list=function(array,label_result){
		
		if(array.length){
				     if(this.list){
					this.list.remove();
					this.create(array,label_result);
				  }else if(!this.list){
				     this.create(array,label_result);
				   }else return;
		}else if(!array.length)
					if(this.list){
						this.list.remove()
						}
					else if(!this.list)return;
		
	}

	Get_ele.prototype.create=function(array,label_result){
		
			let ul=document.createElement('ul');
			array.map(function(v,i){
				let li=document.createElement('li');
				let span=document.createElement('span');
				span.textContent=(label_result[i]);
				li.appendChild(span)
				li.textContent=(v);
				ul.appendChild(li);
			})
			this.list=ul;
			this.show();
		};
		
	Get_ele.prototype.show=function(){
		 this.wraper.appendChild(this.list);
		 this.Events_list();
	}
	
	Get_ele.prototype.Events_list=function(){
		this.list.addEventListener('click',this.mouseClick.bind(this));
		this.list.addEventListener('mouseover',this.mouseOver.bind(this));
		this.list.addEventListener('mouseleave',this.mouseLeave.bind(this));
	}
	Get_ele.prototype.removeEvent=function(e){
		this.list.removeEventListener('mouseover',this.mouseOver);
		this.list.removeEventListener('click',this.mouseClick);
		this.list.removeEventListener('mouseleave',this.mouseLeave);
		}
	
	Get_ele.prototype.get_obj_inp=function(Input){
		this.Inp=Input;
	
	}
	Get_ele.prototype.get_Raport_=function(Raport){
		if(!Raport)return;
		this.Raport_=Raport;
	}
	Get_ele.prototype.get_obj_search=function(Search){
		if(!Search)return;
		this.Search=Search;
	}
	
	Get_ele.prototype.next_row=function(Row){
		if(!Row)return;
		this.Row=Row;
	}
	Get_ele.prototype.mouseClick=function(e){
		this.fixt_value(e);
		this.removeEvent();
		this.clear_list();
		this.rewind_search();
		this.create_row();
		this.set_no_duble(e)
		if(this.Raport_) this.Raport_.count_ona();
		}
		
	Get_ele.prototype.mouseOver=function(e){this.fixt_value(e)}
	Get_ele.prototype.mouseLeave=function(){this.Inp.setValue(this.Inp.values);this.removeEvent();this.clear_list();
	}
	Get_ele.prototype.fixt_value=function(e){
		if(e.target.matches('li'))this.result_value=this.Inp.setValue(e.target.textContent);
		}
	
	Get_ele.prototype.set_no_duble=function(e){
		this.no_duble.push(e.target.textContent);
		this.Inp.no_duble(this.no_duble);
	}
	
	
	Get_ele.prototype.rewind_search=function(){
		if(this.Search)this.Search.string_get(this.result_value,this.nr_row);
		return;
	}
	Get_ele.prototype.create_row=function(){
		if(this.Inp.last_id_inp==this.nr_row) this.Row.one_row(this.nr_row,null);
		
		}
	
	Get_ele.prototype.clear_list=function(){
		this.list.remove();
		}	
	return Get_ele
		
})();


const Search=(function(){
	
	function Search(data,index_result){
		this.data=data;
		this.index_result=index_result;
		this.owners_s_default=[];
		this.arr_result_obj=[];
		this.string;
		this.Date;
	}
	
	Search.prototype.string_get=function(string,nr_row){
		this.string=string;
		this.nr_row=nr_row;
		this.search_result();
			
	}
	Search.prototype.search_result=function(){
			let night=this.Date.get_nigth();
			if(night){night=1}else{night=0};	
			for(let i in this.data.ona){
				if(this.data.ona[i].name==this.string){
				let{name,nr_o,godz,nr_g,char_g,default_s}=this.data.ona[i];
					this.set_result(godz[night],nr_o);
					break;
				}
			}
	}
	Search.prototype.set_result=function(godz,nr_o){
		let tr=document.querySelector('#tr_'+this.nr_row);
		tr.querySelector('#nr_o_'+this.nr_row).value=nr_o;
		tr.querySelector('#godz_'+this.nr_row).value=godz;
		tr.querySelector('#nr_s_'+this.nr_row).dataset.nr_o=nr_o;
	}
	Search.prototype.search_zmiany=function(Date){
		let zmiana=Date.get_zmiana_activ()
		for(let i in this.data.ona){
			if(this.data.ona[i].nr_g==zmiana){
				this.arr_result_obj.push(this.data.ona[i]);
				if(this.data.ona[i].default_s)this.owners_s_default.push(this.data.ona[i]);	
			
				};
			  }
		return this.arr_result_obj;
	}
	Search.prototype.result_array=function(Date,Create_row){
			this.Date=Date;
	
			let array_obj_result=this.search_zmiany(Date)
			let night=Date.get_nigth();
			let last_i;
		for(let i in array_obj_result){
			if(night){night=1}else{night=0};
			let {name,nr_o,godz,default_s}=array_obj_result[i];
			Create_row.one_row(i,[name,nr_o,godz[night],default_s]);
			last_i=i;
					
		}
		Create_row.one_row(+last_i+1,null);
	}
		
	Search.prototype.owners_s=function(){ return this.owners_s_default; }
	Search.prototype.get_ona_now=function(){return  this.arr_result_obj;}
	
	return Search;
})();

const Create_row=(function(){
	
	function Create_row(el){
	this.el=el;	
	this.Inp;
	}
		
		Create_row.prototype.one_row=function(count,array_result){
			let name="",nr_o="",nr_s='',godz='';
			if(!count){count=0}
		if(array_result){
				name=array_result[0],nr_o=array_result[1],nr_s=array_result[3],godz=array_result[2];
				}
			count++;
			let row='<td>'+count+'</td><td id="wrap_'+count+'" class="wraper_list"><input id="' +count+'" value="'+name+'"></td><td><input  id="nr_o_'+count+'" value="'+nr_o+'" disabled="true" ></td><td><input  id="nr_s_'+count+'" disabled="true" value="'+nr_s+'" data-nr_o="'+nr_o+'"></td> <td><input  id="godz_' +count+'" value="'+godz+'"></td><td><div></div></td>';
			this.fixt_row(row,count,nr_o);
		}
		
		Create_row.prototype.fixt_row=function(row,count,nr_o){
			let tr=document.createElement("tr");
				tr.id='tr_'+count;
				tr.classList.add('class_tr');
				tr.innerHTML=row;
			this.el.appendChild(tr);
			this.Inp.init_focus();
			
			}
		Create_row.prototype.refresch=function(Inp){
			this.Inp=Inp;
			}
	
	return Create_row;
})();


const Date_work =(function(){
	function Date_work(){
		
		this.date=new Date();
		this.year=this.date.getFullYear();
		this.day=this.date.getDate();
		this.month=this.date.getMonth()+1;
		//this.yesterday=new Date();
		
		
		this.zmiana_activ;
		this.night;
		this.nr_raport;
		
		}
	 Date_work.prototype.iteratio=function(){
		 
		 let data_start=new Date(2018,2,30,7,30);
		 let start=data_start.getTime();
		 let counter=-1;
		 let count_raport=176;
		 let zmiany=['1','2','3','1','4','3','5','4','2','5']; 
		 
			 while(start<=this.date.getTime()){
				 count_raport++;
				 counter++;
				if(counter>=zmiany.length)counter=0;
				start+=43200000;//12h
				this.zmiana_activ=zmiany[counter];
				}
		 if(counter % 2!==0)this.night=true;
		this.nr_raport=count_raport; 
		
		
		this.show_nr_r();
		this.show_date();
	 }
	 
	 
	 Date_work.prototype.get_zmiana_activ=function(){return this.zmiana_activ;}
	 Date_work.prototype.get_nigth=function(){return this.night;}
	
	 
	 Date_work.prototype.show_nr_r=function(){
		document.querySelector('#nr_r').textContent=('RAPORT '+this.nr_raport+'/'+this.year)
	 }	
	
	Date_work.prototype.show_date=function(){
		let date_string;
		
		
		if(this.night){
			let yesterday=new Date(new Date().setDate(new Date().getDate()-1));
			let tomorow=new Date(new Date().setDate(new Date().getDate()+1));
			let hours=this.date.getHours();
				if(hours<19){
					date_string='W DNIU '+yesterday.getDate()+'/'+this.day+'.'+(yesterday.getMonth()+1)+'.'+yesterday.getFullYear()+' r.';
					}else{
					date_string='W DNIU '+this.day+'/'+tomorow.getDate()+'.'+this.month+'.'+this.year+' r.';
				}
			
		}else{
			date_string='W DNIU '+this.day+'.'+this.month+'.'+this.year+' r.';
		}
			document.querySelector('#date').textContent=(date_string);
			document.querySelector('#month').textContent=this.month;
	}	 

		
	return Date_work;
})();



let data={"ona":[
{"name":"Nowak Magdalena","nr_o":"9","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"H","default_s":""}, 
{"name":"Kowalski Krzysztof","nr_o":"10","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"B","default_s":""}, 
{"name":"Wiśniewski Gotkowski","nr_o":"52","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"J","default_s":""}, 
{"name":"Dąbrowski Krzysztof","nr_o":"21","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"D","default_s":""}, 
{"name":"Lewandowski Ewelina","nr_o":"1","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"A","default_s":""}, 
{"name":"Wójcik Sabina","nr_o":"22","godz":['7:30-19:30','19:30-7:30'],"nr_g":"0","char_g":"0","default_s":""}, 
{"name":"Kamiński Paweł","nr_o":"23","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"C","default_s":""}, 
{"name":"Kowalczyk Mateusz","nr_o":"70","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"L","default_s":"3"}, 
{"name":"Zieliński Karolina","nr_o":"59","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"C","default_s":""}, 
{"name":"Szymański Mateusz","nr_o":"58","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"C","default_s":""}, 
{"name":"Woźniak Małgorzata","nr_o":"25","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"F","default_s":""}, 
{"name":"Kozłowski Joanna","nr_o":"26","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"D","default_s":""}, 
{"name":"Jankowski Przemysław","nr_o":"31","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"F","default_s":""}, 
{"name":"Wojciechowski Tomasz","nr_o":"27","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"E","default_s":""}, 
{"name":"Kwiatkowski Elżbieta","nr_o":"48","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"I","default_s":""}, 
{"name":"Kaczmarek Łukasz","nr_o":"15","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"E","default_s":""}, 
{"name":"Mazur Magdalena","nr_o":"60","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"K","default_s":""}, 
{"name":"Krawczyk Agata","nr_o":"2","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"A","default_s":""}, 
{"name":"Piotrowski Aneta","nr_o":"64","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"M","default_s":""}, 
{"name":"Grabowski Anna","nr_o":"11","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"G","default_s":""}, 
{"name":"Nowakowski Grzegorz","nr_o":"28","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"F","default_s":""}, 
{"name":"Pawłowski Anna","nr_o":"29","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"F","default_s":"6"}, 
{"name":"Michalski Wiktor","nr_o":"30","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"G","default_s":""}, 
{"name":"Nowicki Paweł","nr_o":"62","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"L","default_s":""}, 
{"name":"Adamczyk Mateusz","nr_o":"32","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"D","default_s":""}, 
{"name":"Dudek Piotr","nr_o":"3","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"A","default_s":""}, 
{"name":"Zając Klaudia","nr_o":"35","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"D","default_s":""}, 
{"name":"Wieczorek Artur","nr_o":"18","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"C","default_s":""}, 
{"name":"Jabłoński Jakub","nr_o":"61","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"Ł","default_s":""}, 
{"name":"Król Natalia","nr_o":"34","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"H","default_s":""}, 
{"name":"Majewski Kamil","nr_o":"51","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"H","default_s":""}, 
{"name":"Olszewski Monika","nr_o":"4","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"B","default_s":""}, 
{"name":"Jaworski Ewelina","nr_o":"36","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"G","default_s":""}, 
{"name":"Wróbel Karol","nr_o":"12","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"Ł","default_s":""}, 
{"name":"Malinowski Marcin","nr_o":"37","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"E","default_s":""}, 
{"name":"Pawlak Karolina","nr_o":"17","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"C","default_s":""}, 
{"name":"Witkowski Maria","nr_o":"5","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"B","default_s":""}, 
{"name":"Walczak Tomasz","nr_o":"6","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"A","default_s":""}, 
{"name":"Stępień Daniel","nr_o":"65","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"F","default_s":""}, 
{"name":"Górski Katarzyna","nr_o":"56","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"K","default_s":""}, 
{"name":"Rutkowski Paweł","nr_o":"53","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"K","default_s":""}, 
{"name":"Michalak Monika","nr_o":"19","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"H","default_s":""}, 
{"name":"Sikora Grzegorz","nr_o":"7","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"A","default_s":""}, 
{"name":"Ostrowski Jakub","nr_o":"66","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"B","default_s":""}, 
{"name":"Baran Aneta","nr_o":"39","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"E","default_s":""}, 
{"name":"Duda Wojciech","nr_o":"57","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"L","default_s":""}, 
{"name":"Szewczyk Marek","nr_o":"41","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"I","default_s":""}, 
{"name":"Tomaszewski Wojciech","nr_o":"40","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"I","default_s":""}, 
{"name":"Pietrzak Ewelina","nr_o":"67","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"L","default_s":""}, 
{"name":"Marciniak Mariusz","nr_o":"42","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"H","default_s":"5"}, 
{"name":"Wróblewski Magdalena","nr_o":"20","godz":['7:30-19:30','19:30-7:30'],"nr_g":"0","char_g":"0","default_s":""}, 
{"name":"Zalewski Aneta","nr_o":"63","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"G","default_s":""}, 
{"name":"Jakubowski Szymon","nr_o":"49","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"I","default_s":"7"}, 
{"name":"Jasiński Cezary","nr_o":"16","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"J","default_s":""}, 
{"name":"Zawadzki Krzysztof","nr_o":"8","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"B","default_s":"1"}, 
{"name":"Sadowski Sabina","nr_o":"43","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"J","default_s":""}, 
{"name":"Bąk Dorota","nr_o":"44","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"E","default_s":""}, 
{"name":"Chmielewski Tomasz","nr_o":"45","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"G","default_s":""}, 
{"name":"Włodarczyk Żaneta","nr_o":"72","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"K","default_s":""}, 
{"name":"Borkowski Marcin","nr_o":"73","godz":['7:30-19:31','19:30-7:31'],"nr_g":"2","char_g":"I","default_s":""}

]}
function copyData(obj){return JSON.parse(JSON.stringify(obj))}
const Data_copy=copyData(data);


let array=function(){
	 let tab=[];
	for(let i in data.ona){
		tab.push(data.ona[i].name)
			}
			return tab;
}	


	 
const date=new Date_work();
date.iteratio();	 
//date.show_nr_r();	 
//date.show_date();	 
	 
let search=new Search(data,[0,2]);
let row_= new  Create_row(document.querySelectorAll('#tab>table>tbody')[0]);

let html=new Create_html(document.querySelector('#tab'));
let html_dyz=new Create_html(document.querySelector('#wrap_dyzurny'));

let controll=new Controll(data,html,1);
let controll_dyz=new Controll(Data_copy,html_dyz,1);

let inp=new Input(document.querySelector('#form_all'),controll,'pierwszy');
let inp_dyz=new Input(document.querySelector('#dyzurny'),controll_dyz,'pierwszy');
inp_dyz.init_dyz();

inp.set_Html(html);
inp_dyz.set_Html(html_dyz);

html.get_obj_inp(inp);
html_dyz.get_obj_inp(inp_dyz);

html.get_obj_search(search);
html.next_row(row_);

row_.refresch(inp);
search.result_array(date,row_);
controll.default_duble(search.get_ona_now());
controll.constans_data(Data_copy);


inp.init_focus();



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

const Raport_=(function(){///obserwowany
	function Raport_(){
		this.subscribers=[];
		this.tbody=document.querySelectorAll('#tab>table>tbody')[0];
		this.input;
		this.btn= document.createElement('button');
		this.Row;
		this.name;
		
	}
	Raport_.prototype.addObserwer=function(subscriber){
		this.subscribers.push(subscriber);
	}	
	Raport_.prototype.send_remove_owner=function(nr_s,name){
		this.subscribers.map((subscriber)=>{
			subscriber.remove_owner(nr_s,name);
			})
	}
	Raport_.prototype.execute_send=function(){
		this.subscribers.map((subscriber)=>{
			subscriber.onMessagePosted(this);
			//console.log(this.subscribers[1].Owners)
		})
	}
	Raport_.prototype.addClick=function(){
		this.tbody.addEventListener('click',this.chenge_obj_inp.bind(this))
	
		}

	Raport_.prototype.get_nr_op=function(){
	let nr_os=this.tbody.querySelectorAll('tr>td:nth-child(5n+2)>input');
		let arr_nr_o=[];
		for(nr_o of nr_os){
			if(nr_o.value){
			arr_nr_o.push(nr_o.value);
			}
		}
		return arr_nr_o;
	}	
	Raport_.prototype.chenge_obj_inp=function(e){//console.log(this)
			let target=e.target;
			let Raport=this.subscribers[0].Raport;
			let id;
			let id_s =target.id.split('_')[2] || null;
			let id_name =Number.isInteger(parseInt(target.id)) || null;
			if(id_s)id=id_s;else if(id_name)id=target.id;else{return}
			let inp_val=this.tbody.querySelectorAll('#tr_'+id+' input')[0].value || null;
				
			if(!Raport && inp_val && target.dataset.nr_o){
					this.input=target;
					this.name=inp_val;
					this.inputs_disabled(true);
					this.input.disabled=false;
					this.anuluj();
					this.execute_send();
					
			}else if(!Raport&&id_name){
				this.input=target;
				let tr_s=this.tbody.querySelector('#tr_'+this.input.id)
				let trs= tr_s.querySelectorAll('input');
				let nr_s=trs[2].value;
		
				if(trs[0].value&&tr_s.querySelectorAll('td')[0].textContent){
				
				 this.send_remove_owner(nr_s,trs[0].value);
				tr_s.remove();
				
				}
				//if(nr_s) this.send_remove_owner(nr_s,);
				
				
				//this.get_input_all();
				this.count_ona();
			}else{return}
	}
	Raport_.prototype.count_ona=function(){
		let counter_ona=this.tbody.querySelectorAll('tr>td:first-child');
		Array.prototype.map.call(counter_ona,(ona,i)=>ona.innerHTML=i+1);
		counter_ona[counter_ona.length-1].innerHTML='';
	}
	
	Raport_.prototype.get_input_all=function(){
		this.iteratio_input_all(this.tbody.querySelectorAll('tr>td>input'));
	}
	Raport_.prototype.iteratio_input_all=function(trs){
		let arr_value=[];
		for(i=0;i<trs.length;i=i+4){
				 arr_value.push([trs[i].value,trs[i+1].value,trs[i+2].value,trs[i+3].value]);
		}
		//console.log(arr_value);
	}
	Raport_.prototype.inputs_disabled=function(flag){
		let inputs=this.tbody.querySelectorAll('input');
			for(input of inputs){
				input.disabled=flag;
			}
	}
	Raport_.prototype.add_disabled=function(){
		let nr_ss=this.tbody.querySelectorAll('tr>td:nth-child(5n+4)>input');
		let nr_os=this.tbody.querySelectorAll('tr>td:nth-child(5n+3)>input');
		this.iteratio_disabled(nr_ss);
		this.iteratio_disabled(nr_os);
	}
	Raport_.prototype.iteratio_disabled=function(inputs){
		for(input of inputs){input.disabled=true;}
	}
	Raport_.prototype.anuluj=function(){
		
			this.btn.addEventListener('click',()=>{
				this.inputs_disabled(false);
				this.add_disabled();
				this.anuluj_cls();
				this.subscribers[0].Raport=null;
				this.subscribers[2].show_info('');
			})
			this.btn.textContent=('Anuluj');
			let div=document.querySelector("#anuluj");
			div.appendChild(this.btn);
	}	
	Raport_.prototype.anuluj_cls=function(){
			this.btn.remove();
			}
	
	
	
	return Raport_ ;
})();

const Controll_ =(function(){/////oberwator
	function Controll_(constans_data){
		this.constans_data=constans_data
		this.Owners={};
		this.Raport;
		this.default_s;
	}
	Controll_.prototype.onMessagePosted=function(Raport){
		this.Raport=Raport;
	}
	Controll_.prototype.set_default_own=function (owners_default){
		this.Owners.ona=owners_default;
	}
	Controll_.prototype.foward_nr_s=function (nr_s){
		
		this.owner_if_exist();
		this.add_owner(nr_s);
	
		this.Raport.input.value=nr_s;
		this.Raport.input=false;
		this.Raport.anuluj_cls();
		this.Raport=false;
		//this.default_s=false;
		//console.log('liczba przypisanych do stanowiska ona: '+this.Owners.ona.length+': (koniec kontekstu wykonawczego)');
	}
	Controll_.prototype.add_owner=function (nr_s){
		
			for(let i in this.constans_data.ona){
				if(this.constans_data.ona[i].nr_o==this.Raport.input.dataset.nr_o) {
					let index_owner=this.Owners.ona.push(this.constans_data.ona[i]);
					this.Owners.ona[index_owner-1].default_s=nr_s;
				}
			}
	}
	Controll_.prototype.owner_if_exist=function(){
				
		for(let i in this.Owners.ona){
			if(this.Owners.ona[i].nr_o==this.Raport.input.dataset.nr_o){
				this.set_default_s(this.Owners.ona[i].default_s)
				this.Owners.ona.splice(i,1);
			}
		}
	}
	Controll_.prototype.get_default_s=function (){
				return this.default_s;
	}
	Controll_.prototype.set_default_s=function (nr_s){
		this.default_s=nr_s;
	}
	Controll_.prototype.iteratio_Owners=function (nr_s){
			for(let i in this.Owners.ona){
					if(this.Owners.ona[i].default_s===nr_s){
						let{name,nr_o,godz,nr_g,char_g,default_s}=this.Owners.ona[i];
						let arr=[name,nr_o,godz,nr_g,char_g,default_s];
						return arr;
					}
			}
	}
	Controll_.prototype.remove_owner=function(nr_s,name){
		if(!nr_s)return;
			 this.Owners.ona.map((obj_ona,i)=>{
				if(obj_ona.default_s==nr_s)this.Owners.ona.splice(i,1);
		    })
	///console.log(this.Owners.ona.length+'  przypisanych do stanowiska po filtrowaniu z raportu')
	}	
		
	return  Controll_;
})();

const Window_info_=(function(){/////oberwator
	function Window_info_(){}
		Window_info_.prototype.onMessagePosted=function(Raport){
			this.show_info('Przypisz stanowisko dla: '+Raport.name)
		}
		Window_info_.prototype.remove_owner=function(nr_s,name){
			this.show_info('Wypisano operatora: '+name);
			setTimeout(()=>{this.show_info('')},2000);
		
		}
		Window_info_.prototype.show_info=function(info){
			document.querySelector('#window_info').textContent=info;
		}
	
	return  Window_info_;
})();


const SVG_ =(function(){/////oberwator

	function SVG_(Controll_,Window_info_){
		this.Raport;
		this.Controll_=Controll_;
		this.Window_info_=Window_info_;
		this.svg_el= document.querySelectorAll('svg g g');
		
		}
		
		SVG_.prototype.onMessagePosted=function(Raport){
			this.Raport=Raport;
		}
		SVG_.prototype.start=function(){
			this.action();
			this.MouseClick();
		
		}
		SVG_.prototype.check_busy=function(nr_s){
			let arr=this.Controll_.iteratio_Owners(nr_s);
			return arr;
		}
		
		SVG_.prototype.action=function(){
			for(let sv_g of this.svg_el){
				let nr_s=sv_g.id.split('_')[1];
				let arr=this.check_busy(nr_s);
					if(arr){
						this.mouseOver(sv_g,nr_s);
						this.mouseLeave(sv_g);
						this.chenge_fill(arr[5]);
					}else{}
				}
			}
		
		SVG_.prototype.mouseOver=function(g,nr_s){
			g.addEventListener('mouseover',()=>{
			let arr_result=this.Controll_.iteratio_Owners(nr_s);
				if(arr_result&&!this.Controll_.Raport)this.Window_info_.show_info(arr_result[0]);
				else{return};
			})
		}
		SVG_.prototype.mouseLeave=function(g){
			g.addEventListener('mouseleave',()=>{
			if(!this.Controll_.Raport)this.Window_info_.show_info('');
			})
		}
		SVG_.prototype.chenge_fill=function(nr_s){
			document.querySelector('#s_'+nr_s).classList.add('activ_svg');
		}
		SVG_.prototype.remove_fill=function(nr_s){
			document.querySelector('#s_'+nr_s).classList.remove('activ_svg');
		}
		
		SVG_.prototype.MouseClick=function(){
	
			Array.from(this.svg_el,sv_g=>sv_g.addEventListener('click',()=>{
					let nr_s=sv_g.id.split('_')[1];
				if(this.check_busy(nr_s))return;
				else{
						if(this.Controll_.Raport){
							this.Controll_.foward_nr_s(nr_s);
							if(this.Controll_.get_default_s())this.remove_fill(this.Controll_.get_default_s());
								this.Raport.inputs_disabled(false);
								this.Raport.add_disabled();
								this.action();
						}
				}
			}))
		  }
		SVG_.prototype.remove_owner=function(nr_s,name){
			if(!nr_s)return;
					this.remove_fill(nr_s);
					this.action(false);
		}
		
	return SVG_;
	
})();

const control=new Controll_(Data_copy);
control.set_default_own(search.owners_s());
const window_info=new Window_info_();
const svg=new SVG_(control, window_info);
svg.start();


const raport=new Raport_();
raport.addObserwer(control);
raport.addObserwer(svg);
//raport.new_row(row_);

raport.addObserwer(window_info);
raport.addClick();
html.get_Raport_(raport);
</script>

</body>
</html>


