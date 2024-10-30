<tr>
   <td>Available Funds</td>
   <td><input type="text" class="khyzer" name="hac-heading-4" id="hac-heading-4" value="Available Funds" required></td>
   <td></td>
   <td>
      <select type="text" class="khyzer" name="show-hac-heading-4" id="show-hac-heading-4" required>
         <option value="1">Show</option>
         <option value="0">Hide</option>
      </select>
   </td>
</tr>

<?php 
$hac_labels = [
  "   Available Funds    ",
 " Fixed Closing Costs   ",
 " Variable Closing Costs (based on price)    ",
 " Minimum Down Payment  ",
 " Maximum Home Price Based on Funds    ",
 " (M4) Max PI Payment Based on Funds   ",
 " Maximum PI Payment (lower of M3,M4)  ",


];

$hac_values = [
   "   50,000.00   ",
 "  150.00   ",
 " 3.00%  ",
 " 0.00%  ",
 "  1,661,666.67   ",
 "     ",
 "     ",

];



for($i=0;$i<sizeof($hac_values);$i++){

   $html = '
<tr>
   <td>'.$hac_labels[$i].'</td>
   <td><input type="text" class="khyzer" value="'.trim($hac_labels[$i]).'" required></td>
   <td><input type="text" class="khyzer" value="'.trim($hac_values[$i]).'"></td>
   <td>
      <select type="text" class="khyzer" required>
         <option value="1">Show</option>
         <option value="0">Hide</option>
      </select>
   </td>
</tr>

   ';

echo $html;
}


?>


