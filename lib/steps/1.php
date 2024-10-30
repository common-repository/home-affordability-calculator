<div class="hac-heading" data-closet-head="1"><span class="hac-head-disc"> Income</span></div>

<div data-closet-body="1">
<div class="hac-input-div hac-dollar">
	<div id="label-D5">Gross Annual Income (before tax)</div>
	<div><input type="text" class="hac-ti" name="hac-D5" id="hac-D5" placeholder="Enter" value=""></div>
</div>

<div class="hac-input-div hac-perc">
	<div id="label-D6">Maximum Housing Expense %</div>
	<div><input type="text" class="hac-ti" name="hac-D6" id="hac-D6" placeholder="Enter" value=""></div>
</div>


<div class="hac-input-div hac-bottom-spacer-h hac-dollar">
	<div id="label-D7">(M1) Max Monthly Payment Based on Income</div>
	<div><input type="text" class="hac-ti hac-readonly" name="hac-D7" id="hac-D7" placeholder="Enter" value="-" readonly></div>
</div>
</div>


<div class="hac-heading hac-top-spacer-h" data-closet-head="2"><span class="hac-head-disc">Monthly Debts</span></div>
<div data-closet-body="2">
	<p class="hac-show-more" id="hac-show-debt-fields">Show More (+)</p>
<div style="display: none;margin-bottom: 30px;" id="hac-debt-fields">
<?php 

echo WPBOXAFF_appi(['D10','Car Loans','hac-dollar','']); 
echo WPBOXAFF_appi(['D11','Credit-Card Minimums','hac-dollar']); 
echo WPBOXAFF_appi(['D12','Student Loans','hac-dollar']); 
echo WPBOXAFF_appi(['D13','Child Support & Other Obligations','hac-dollar']); 
echo WPBOXAFF_appi(['D14','Other Mortgages','hac-dollar']); 
echo WPBOXAFF_appi(['D15','Other Loans','hac-dollar']); 
?>
</div>

<?php
echo WPBOXAFF_appi(['D16','Current Monthly Debts','hac-dollar',0]); 
echo WPBOXAFF_appi(['D17','Maximum Debt-to-Income Ratio','hac-perc',0]); 
echo WPBOXAFF_appi(['D18','(M2) Max Monthly Payment Based on DTI','hac-dollar',1]); 
echo WPBOXAFF_appi(['D20','Maximum Monthly Payment (lower of M1,M2)','hac-top-spacer-i hac-dollar bold-txt-hac',1]); 


?>
</div>


<div class="hac-heading hac-top-spacer-h" data-closet-head="3"><span class="hac-head-disc">Monthly Housing Expenses</span></div>
<div data-closet-body="3">
<?php 

echo WPBOXAFF_appi(['D23','Property Tax (Monthly)','hac-dollar']); 
echo WPBOXAFF_appi(['D24','Home Owners Insurance (Monthly)','hac-dollar']); 
echo WPBOXAFF_appi(['D25','PMI (private mortgage insurance)','hac-dollar']); 
echo WPBOXAFF_appi(['D26','HOA Fees','hac-dollar']); 
echo WPBOXAFF_appi(['D27','Other (Utilities, Repairs, etc.)','hac-dollar']); 
echo WPBOXAFF_appi(['D28','(M3) Max PI Payment Based on Expenses hac-dollar','',1]); 



?>
</div>

<div class="hac-heading hac-top-spacer-h" data-closet-head="4"><span class="hac-head-disc">Available Funds</span></div>
<div data-closet-body="4">
<?php 

echo WPBOXAFF_appi(['D31','Available Funds','hac-dollar',0]); 
echo WPBOXAFF_appi(['D32','Fixed Closing Costs','hac-dollar',0]); 
echo WPBOXAFF_appi(['D33','Variable Closing Costs (based on price)','hac-perc',0]); 
echo WPBOXAFF_appi(['D34','Minimum Down Payment','hac-perc',0]); 
echo WPBOXAFF_appi(['D35','Maximum Home Price Based on Funds','',1]); 
echo WPBOXAFF_appi(['D36','(M4) Max PI Payment Based on Funds','',1]); 
echo WPBOXAFF_appi(['D38','Maximum PI Payment (lower of M3,M4)','hac-top-spacer-i bold-txt-hac',1]); 
?>
</div>

<div class="hac-heading hac-top-spacer-h" data-closet-head="5"><span class="hac-head-disc">Financing</span></div>
<div data-closet-body="5">
<?php 

echo WPBOXAFF_appi(['D41','Term of Mortgage (years)','',0]); 
echo WPBOXAFF_appi(['D42','Annual Interest Rate','hac-perc',0]); 
echo WPBOXAFF_appi(['D43','Loan Amount Based on Max PI Payment','',1]); 
echo WPBOXAFF_appi(['D44','Down Payment Based on Available Funds','',1]); 
echo WPBOXAFF_appi(['D45','Total Estimated Closing Costs','',1]); 
echo WPBOXAFF_appi(['D46','Maximum Home Price','bold-txt-hac',1]); 

?>
</div>

<div class="hac-heading hac-top-spacer-h" data-closet-head="6"><span class="hac-head-disc">Depreciation</span></div>
<div data-closet-body="6">
<?php 

echo WPBOXAFF_appi(['D49','% of Home Price Depreciable','hac-perc',0]); 
echo WPBOXAFF_appi(['D50','Years to Depreciate','',0]); 
echo WPBOXAFF_appi(['D51','Annual Depreciation (straight-line)','',1]); 

?>
</div>

<script type="text/javascript">
<?php 
$settings = WPBOXAFF_defaults();

foreach ($settings as $key => $value) {

if( hac_detect($key, 'hac-i-v-') ){
$id = explode('hac-i-v-', $key)[1];

echo "
var id = '".$id."';
var val = '".$value."';

";

?>


if($('#hac-'+id).prop('readonly') == true){}else{
	$('#hac-'+id).val(val);

}

<?php
}

}

?>


$( document ).ready(function() {
    $('.hac-perc input').trigger('change');
$('.hac-dollar input').trigger('change');
});
</script>