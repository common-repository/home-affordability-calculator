<tr>
   <td>Monthly Debt</td>
   <td><input type="text" class="khyzer" name="hac-heading-2" id="hac-heading-2" value="Monthly Debt" required></td>
   <td></td>
   <td>
      <select type="text" class="khyzer" name="show-hac-heading-2" id="show-hac-heading-2" required>
         <option value="1">Show</option>
         <option value="0">Hide</option>
      </select>
   </td>
</tr>

<?php 
$hac_labels = [
  "   Car Loans    ",
 " Credit-Card Minimums  ",
 " Student Loans   ",
 " Child Support & Other Obligations    ",
 " Other Mortgages    ",
 " Other Loans  ",
 " Maximum Debt-to-Income Ratio   ",
 " (M2) Max Monthly Payment Based on DTI   ",
 " Maximum Monthly Payment (lower of M1,M2)   ",

];

$hac_values = [
   "   300.00   ",
 "  100.00   ",
 "     ",
 "     ",
 "     ",
 "     ",
 " 49%    ",
 "     ",
 "     ",

];



for($i=0;$i<sizeof($hac_values);$i++){

   $html = '
<tr>
   <td>'.$hac_labels[$i].'</td>
   <td><input type="text" class="khyzer"  value="'.trim($hac_labels[$i]).'" required></td>
   <td><input type="text" class="khyzer"  value="'.trim($hac_values[$i]).'" ></td>
   <td>
      <select type="text" class="khyzer"  required>
         <option value="1">Show</option>
         <option value="0">Hide</option>
      </select>
   </td>
</tr>

   ';

echo $html;
}


?>


