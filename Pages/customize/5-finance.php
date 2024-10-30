<tr>
   <td>Financing</td>
   <td><input type="text" class="khyzer" name="hac-heading-5" id="hac-heading-5" value="Financing" required></td>
   <td></td>
   <td>
      <select type="text" class="khyzer" name="show-hac-heading-5" id="show-hac-heading-5" required>
         <option value="1">Show</option>
         <option value="0">Hide</option>
      </select>
   </td>
</tr>

<?php 
$hac_labels = [
  "   Term of Mortgage (years)    ",
 " Annual Interest Rate  ",
 " Loan Amount Based on Max PI Payment  ",
 " Down Payment Based on Available Funds   ",
 " Total Estimated Closing Costs  ",
 " Maximum Home Price    ",



];

$hac_values = [
  "    30    ",
 " 4.000%    ",
 "     ",
 "     ",
 "     ",
 "     ",


];



for($i=0;$i<sizeof($hac_values);$i++){

   $html = '
<tr>
   <td>'.$hac_labels[$i].'</td>
   <td><input type="text" class="khyzer"  value="'.trim($hac_labels[$i]).'" required></td>
   <td><input type="text" class="khyzer"  value="'.trim($hac_values[$i]).'"></td>
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


