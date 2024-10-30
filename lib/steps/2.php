<div class="hac-side-strip">


<div class="hac-card">
<div class="est-head">
<p class="hac-estp">
	<span class="hac-ans">You Can Afford A House Up To</span><br>
	<span id="hac-affordibility">$372,080</span>
</p>
</div>

<div style="position: relative;">
<div class="hac-per-month"><span id="hac-monthly">$2,167</span> <br> <span class="hac-month-title-"><small>/ Month</small></span></div>
<div id="wpbox-chart-hac"></div>
</div>

<table style="width: 100%;" class="hac-chart-labels">
<col width="5%"><col width="50%"><col width="45%">	
<tr><td><i class="fas fa-circle hac-label-clr-1"></i></td><td>PI Payment</td><td id="hac-legend-1">-</td></tr>
<tr><td><i class="fas fa-circle hac-label-clr-2"></i></td><td>Property Tax</td><td id="hac-legend-2">-</td></tr>
<tr><td><i class="fas fa-circle hac-label-clr-3"></i></td><td>Insurance</td><td id="hac-legend-3">-</td></tr>
<tr><td><i class="fas fa-circle hac-label-clr-4"></i></td><td>PMI</td><td id="hac-legend-4">-</td></tr>
<tr><td><i class="fas fa-circle hac-label-clr-5"></i></td><td>HOA</td><td id="hac-legend-5">-</td></tr>
<tr><td><i class="fas fa-circle hac-label-clr-6"></i></td><td>Other</td><td id="hac-legend-6">-</td></tr>
</table>


<!-- <div class="hac-side-x">
<p>Loan Amount <br> $333,392</p>		
</div> -->


<div class="est-head">
<p class="hac-estp">
	<span class="hac-ans">Loan Amount</span><br>
	<span id="hac-la">$372,080</span>
</p>
</div>

<div class="est-head">
<p class="hac-estp">
	<span class="hac-ans">Down Payment</span><br>
	<span id="hac-dp">$372,080</span>
</p>
</div>


<div class="est-head">
<p class="hac-estp">
	<span class="hac-ans">Est. Closing Costs</span><br>
	<span id="hac-cc">$372,080</span>
</p>
</div>



<a href="https://wordpress.org/plugins/home-affordability-calculator" class="hac-happs-name">Home Affordibility Calculator - By Hayyat Apps</a>

<!-- ------------------------------------- -->
</div>


<!-- ------------------------------------------------------ -->
<form onsubmit="hac_email();return false;">
<center>
<div class="hac-card" style="margin-top:20px;">
<p class="email-results-text">Get results to your inbox</p>

<div><input type="text" class="hac-ti hac-ei" name="hac-name" id="hac-name" placeholder="Your Name" required></div>
<div style="margin-top: 12px;"><input type="email" class="hac-ti hac-ei" name="hac-email" id="hac-email" placeholder="Your Email Address" required></div>

<input type="hidden" name="hac-email-initiate" value="1">

<div class="loader-hac hac-email-load" style="margin:30px;display: none;"></div>
<p id="msg-email" style="display: none;">Please check your email. If you don't receive our email, check your spam folder.</p>
<div><button type="submit" class="hac-buttons" style="margin-top:20px">Email Results <i class="fas fa-envelope"></i></button></div>


</div>

</center>
</form>
<!-- ----------------------------------------------------------------- -->


</div>







<style type="text/css">
	.hac-side-x{
		text-align: center;
	}

	
	.email-results-text {
    font-size: 18px;
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
}


	.hac-happs-name{
    display: block;
    text-align: center;
    font-size: 12px;
    color: grey;
    text-decoration: underline;
	}

	.hac-email-box{
    margin-top: 20px;
    /* max-width: 480px; */
    float: left;
    width: 75%;
    /*background-color: var(--hac-theme);*/
    /*color: white;*/

	}

	input.hac-ei[type="text"],input.hac-ei[type="email"]{
		max-width: 250px;
		/*background-color: transparent;*/
		/*border: 1px solid white;*/
	}

	.hac-side-strip {
    /* padding: 4px; */
    background-color: white;
    min-height: 800px;
    /* text-align: center; */
    width: 100%;
    max-width: 400px;
    min-width: 300px;

    /*float: right;*/

}

.hac-estp{
	font-size: 23px;
	font-weight: 600;
}

.est-head {
    background-color: #006aff12;
    color: #006aff;
    text-align: center;
    margin-bottom: 20px;
}

.hac-chart-labels{
	font-size: 16px;
}

table.hac-chart-labels,table.hac-chart-labels tr,table.hac-chart-labels td{
border: 0;
}

.hac-chart-labels tr td:nth-child(3){
text-align: center;
}

.hac-per-month {
    position: absolute;
    left: 37%;
    top: 39%;
    font-size: 36px;
    font-weight: bold;
}

.hac-month-title {
    font-size: 24px;
    left: 14%;
    position: absolute;
}


@media screen and (max-width: 600px) {

.hac-per-month {
    left: 32%;
}


}


	
</style>