<div class="shadow font" id="WPBOX-UPDATE" style="margin-top: 20px;margin-right: 10px;display:none;">
</div>

<form method="post" action="" autocomplete="off">
<div class="shadow font" style="margin-top: 20px;margin-right: 10px;position: relative;" id="main-WPBOX-manage-sheet-page">
<h1 id="update-add-msg">Settings <a href="?page=WPBOXAFF_gopro" class="hac-pro">(Pro Features)</a></h1>

<table style="width: 800px;">
   <tr>
      <td>Enter Currency Symbol <i class="fas fa-question-circle" title="you can select your own currency symbol ($ / € / £)"></i></td>
      <td>
         <input type="text" class="khyzer" name="wpbox_currency" id="wpbox_currency" placeholder="$" value="$" list="wpbox_curr_list" required>
         <datalist id="wpbox_curr_list">
            <option value="$">$</option>
            <option value="€">€</option>
            <option value="£">£</option>
            <option value="AED">AED</option>
            <option value="CHF">CHF</option>
         </datalist>
      </td>
   </tr>


   <tr style="display:none;">
      <td>Number Format <i class="fas fa-question-circle" title="English / US format uses comma (,) as a thousand seperator while Europian format uses period (.) as thousand seperator. <br><br> <u>For Example:</u> 1000.32 in US format will display as 1,000.32 while in Europian format, it will display as 1.000,02"></i></td>
      <td><select type="text" class="khyzer" name="wpbox_no_format" id="wpbox_no_format" required>
         <option value="1">English / US  </option>
         <option value="0">Europian </option>
      </select></td>
   </tr>
   
   
<tr style="height:20px;"><td colspan="2"></td></tr>
<tr><td colspan="2"><h1>Design Customization <a href="?page=WPBOXAFF_gopro" class="hac-pro">(Pro Features)</a></h1></td></tr>

   <tr>
      <td>Set Theme Color <i class="fas fa-question-circle" title="This will effect input borders color & button color."></i></td>
      <td>
         <input type="text" class="khyzer color" name="wpbox_theme_color" id="wpbox_theme_color" value="#efa41c" style="width:100%;max-width:230px;" required>
         <input class="khyzer color-code" id="display-wpbox_theme_color" readonly>
      </td>
   </tr>

   <tr>
      <td>Apply Shadow to Calculator Area <i class="fas fa-question-circle" title="Use Shadow for calculator area. <br><br> If you don't need shadow, set this to 'No'"></i></td>
      <td><select type="text" class="khyzer" name="wpbox_calc_shadow" id="wpbox_calc_shadow" required>
         <option value="1">Yes</option>
         <option value="0">No</option>
      </select></td>
   </tr>

    


<tr style="height:20px;"><td colspan="2"></td></tr>
<tr><td colspan="2"><h1>Customize Chart Colors <a href="?page=WPBOXAFF_gopro" class="hac-pro">(Pro Features)</a></h1></td></tr>
<?php include __DIR__.'/customize/c-graph.php'; ?>

</table>

<table style="width: 100%;border-collapse: collapse;">
<thead>
<tr style="height:60px;"><td colspan="3"></td></tr>
<tr><td colspan="3"><h1>Customize Labels & Set Default values <a href="?page=WPBOXAFF_gopro" class="hac-pro">(Pro Features)</a></h1></td></tr>
<tr style="height:20px;"><td colspan="3"></td></tr>
</thead>
<tbody style="text-align: center;">

<tr><td colspan="4"><h1 style="text-align:left;color: #e91e63;">> Income</h1></td></tr>
<tr style="text-align: center;border-bottom: 1px solid black;">
   <td>Default Label</td>
   <td>New Label</td>
   <td>Default Value</td>
   <td>Show / Hide this input on calculator</td>
</tr>
<?php include __DIR__.'/customize/1-income.php'; ?>


<tr><td colspan="4"><h1 style="text-align:left;color: #e91e63;margin:40px 0 20px 0">> Monthly Debts</h1></td></tr>
<?php echo hac_get_head();include __DIR__.'/customize/2-m-debts.php'; ?>


<tr><td colspan="4"><h1 style="text-align:left;color: #e91e63;margin:40px 0 20px 0">> Monthly Housing Expenses</h1></td></tr>
<?php echo hac_get_head();include __DIR__.'/customize/3-m-h-expense.php'; ?>

<tr><td colspan="4"><h1 style="text-align:left;color: #e91e63;margin:40px 0 20px 0">> Available Funds</h1></td></tr>
<?php echo hac_get_head();include __DIR__.'/customize/4-funds.php'; ?>


<tr><td colspan="4"><h1 style="text-align:left;color: #e91e63;margin:40px 0 20px 0">> Financing</h1></td></tr>
<?php echo hac_get_head(); include __DIR__.'/customize/5-finance.php'; ?>


<tr><td colspan="4"><h1 style="text-align:left;color: #e91e63;margin:40px 0 20px 0">> Depreciation</h1></td></tr>
<?php include __DIR__.'/customize/6-deprec.php'; ?>

</tbody>  
</table>


<div style="height:20px;"></div>
<div style="margin: 10px;">



</div>



<button type="button"  class="kzr-btn kzr-green " style="margin-top: 20px;display: none_;" title="Go Pro now to customize the calculator" onclick="window.open('?page=WPBOXAFF_gopro','_self')"> Update Settings <i class="fas fa-sync"></i></button>


</div>
</form>

<?php include __DIR__.'/refer-add.php'; ?>


<style type="text/css">
  

   .tooltip{
    background-color:black;
    color: white;
    font-size: 11px;
    border: 1px solid black;
    font-family: Century Gothic;
    border-radius: 4px;
    text-align: left;
  }

  .ui-widget.ui-widget-content {
    border: 1px solid #000000;
    text-align: left;
}

.ui-widget-shadow {
     -webkit-box-shadow: 0px 0px 0px #666666; 
     box-shadow: 0px 0px 0px #666666; 
}

.hac-pro {
    color: #e91e63;
    font-size: 17px;
}
</style>


