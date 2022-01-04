<html>
   <head>
      <title>VEERA</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
      <style>
         @media (max-width:480px) {
         .container {
         width: 98% !important;
         }
         }
         .container {
         margin: auto;
         width: 25%;
         padding: 10px;
         border: 1px solid #f2f2f2;
         -webkit-box-shadow: 1px 1px 4px 0px rgba(176, 176, 176, 1);
         -moz-box-shadow: 1px 1px 4px 0px rgba(176, 176, 176, 1);
         box-shadow: 1px 1px 4px 0px rgba(176, 176, 176, 1);
         background-color: #fff;
         height: 450px;
         background-color: #F8F8F8;
         }
         .header {
         background-color: lightgrey;
         padding: 10px;
         color: black;
         text-align: center;
         }
         .row::after {
         content: "";
         clear: both;
         display: table;
         }
         .col-6 {
         width: 50%;
         }
         .first_section {
         display: grid;
         grid-template-columns: 1fr 1fr 1fr;
         }
         .web_title {
         margin-left: 1%;
         font-weight: bold;
         }
         .flexx {
         flex: 1;
         }
         .main_section {
         display: flex;
         flex-wrap: wrap;
         }
         .sub_section {
         width: 50%;
         text-align: center;
         }
         .upper_margin {
         margin-top: 10px;
         }
		 .font_color{
			 color:lightgrey;
		 }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="header">
            <div class="first_section">
               <div class="flexx">
                  <img src="logo/logo.jpg" width="50" height="50">
               </div>
               <div class="web_title flexx">
                  Veera Jewellary Creations
               </div>
            </div>
         </div>
         <hr>
         <div class="main_section">
            <div class="sub_section">
               Dia. wt.
            </div>
            <div class="sub_section">
               Dia. Price
            </div>
         </div>
         <div class="main_section">
            <div class="sub_section">
               <input type="number" tabindex="1" id="dia_wt" onkeyup="global_calc()">
            </div>
            <div class="sub_section">
               <input type="number" tabindex="2" id="dia_price" onkeyup="global_calc()">
            </div>
         </div>
         <div class="main_section upper_margin">
            <div class="sub_section">
               Dia. Value
            </div>
            <div class="sub_section">
               <input type="number" class="font_color" id="dia_val" readonly>
            </div>
         </div>
         <hr>
         <div class="main_section">
            <div class="sub_section">
               Gross wt.
            </div>
            <div class="sub_section">
               Net Wt.
            </div>
         </div>
         <div class="main_section">
            <div class="sub_section">
               <input type="number" tabindex="3" id="gross_wt" onkeyup="global_calc()">
            </div>
            <div class="sub_section">
               <input type="number" class="font_color" id="net_wt" readonly>
            </div>
         </div>
         <div class="main_section upper_margin">
            <div class="sub_section">
               Gold R.
            </div>
            <div class="sub_section">
               Lbr R.
            </div>
         </div>
         <div class="main_section">
            <div class="sub_section">
               <input type="number" tabindex="4" id="gold_rate" onkeyup="global_calc()">
            </div>
            <div class="sub_section main_section">
               <select style="width:30%;" tabindex="5" id="type_of_lbr_rate" onchange="chng_lbr()">
                  <option value="Per Gram">Per Gram</option>
                  <option value="Fix">Fix</option>
               </select>
               <input type="number" tabindex="6" id="lbr_rate_manual" onkeyup="global_calc()" style="width:70%;display:none;">
			   <select style="width:70%;" tabindex="6" id="lbr_rate_drop" onchange="global_calc()">
                  <option value="650">650</option>
                  <option value="700">700</option>
                  <option value="750">750</option>
                </select>
			   
			   
            </div>
         </div>
         <div class="main_section upper_margin">
            <div class="sub_section">
               Kt.
            </div>
            <div class="sub_section">
               Gold Value
            </div>
         </div>
         <div class="main_section">
            <div class="sub_section">
               <select id="karat" tabindex="7" onchange="global_calc()">
				<option value="14 KT">14 KT</option>
				<option value="18 KT">18 KT</option>
               </select>
            </div>
            <div class="sub_section">
               <input type="number" id="gold_value" class="font_color" readonly>
            </div>
         </div>
         <hr>
         <div class="main_section upper_margin">
            <div class="sub_section">
               Lbr Charge
            </div>
            <div class="sub_section">
               Certi Charge
            </div>
         </div>
         <div class="main_section">
            <div class="sub_section">
               <input type="number" id="lbr_charge" class="font_color" readonly>
            </div>
            <div class="sub_section main_section">
               <select style="width:30%;" tabindex="8" id="certi_type" onchange="chng_cert_charge()">
                  <option value="I">I</option>
                  <option value="E">E</option>
               </select>
               <!--<select style="width:70%;" id="certi_charge" >
                  <option value="800">800</option>
                  <option value="400">400</option>
               </select>-->
			   <input type="number" style="width:70%;" id="certi_charge" class="font_color" readonly>
            </div>
         </div>
         <div class="main_section upper_margin">
            <div class="sub_section">
               Total Price
            </div>
            <div class="sub_section">
               <input type="number" id="total" class="font_color" readonly>
            </div>
         </div>
         <hr>
		 <div class="main_section upper_margin">
			<button style="width:100%;" onclick="reset()">RESET</button>
		 </div>
      </div>
   </body>
</html>
<script>
function global_calc()
{
	var dia_wt = $("#dia_wt").val();
	var dia_price = $("#dia_price").val();
	var dia_val = dia_wt * dia_price;
	
	if(dia_wt != "" && dia_price != "")
	{
		$("#dia_val").val(Math.round(dia_val));
	}
	
	var gross_wt = $("#gross_wt").val();
	var net_wt = gross_wt - (dia_wt/5);
	if(gross_wt != "" && net_wt != "")
	{
		$("#net_wt").val(Math.round(net_wt).toFixed(2));
	}
	
	var gold_rate = $("#gold_rate").val();
	var karat = $("#karat").val();
	var karat_val = 0.76;
	 if(karat == "14 KT")
	 {
		 karat_val = 0.60;
	 }
	 if(gold_rate != "")
	 {
		var gold_val = net_wt * karat_val * gold_rate;
		$("#gold_value").val(Math.round(gold_val));
	 }
	 
	 var type_of_lbr_rate = $("#type_of_lbr_rate").val();
	if(type_of_lbr_rate == "Per Gram")
	{
		$("#lbr_rate_drop").css('display','block');
		$("#lbr_rate_manual").css('display','none');
		
		var lbr_rate = $("#lbr_rate_drop").val();
	}
	else
	{
		$("#lbr_rate_manual").css('display','block');
		$("#lbr_rate_drop").css('display','none');
		
		var lbr_rate = $("#lbr_rate_manual").val();
	}
	
	var lbr_charge = net_wt * lbr_rate;
	$("#lbr_charge").val(Math.round(lbr_charge));
	
	var certi_type = $("#certi_type").val();
	if(certi_type == "I")
	{
		var certi_chrge = 800 * dia_wt;
	}
	else
	{
		var certi_chrge = 400 * dia_wt;
	}
	$("#certi_charge").val(Math.round(certi_chrge));
	
	var total =  parseInt(dia_val) + parseInt(gold_val) + parseInt(lbr_charge) + parseInt(certi_chrge);
	$("#total").val(total);
}
function chng_lbr()
{
	var type_of_lbr_rate = $("#type_of_lbr_rate").val();
	if(type_of_lbr_rate == "Per Gram")
	{
		$("#lbr_rate_drop").css('display','block');
		$("#lbr_rate_manual").css('display','none');
		
		var lbr_rate = $("#lbr_rate_drop").val();
	}
	else
	{
		$("#lbr_rate_manual").css('display','block');
		$("#lbr_rate_drop").css('display','none');
		
		var lbr_rate = $("#lbr_rate_manual").val();
	}
	
	var lbr_charge = net_wt * lbr_rate;
	$("#lbr_charge").val(Math.round(lbr_charge));
	global_calc();
}
function chng_cert_charge()
{
	var certi_type = $("#certi_type").val();
	var dia_wt = $("#dia_wt").val();
	if(certi_type == "I")
	{
		var certi_chrge = 800 * dia_wt;
	}
	else
	{
		var certi_chrge = 400 * dia_wt;
	}
	$("#certi_charge").val(Math.round(certi_chrge));
	global_calc();
}
function reset()
{
	location.reload();
}
</script>