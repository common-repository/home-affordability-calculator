<tr>
   <td>Income</td>
   <td><input type="text" class="khyzer" name="hac-heading-1" id="hac-heading-1" value="Income" required></td>
   <td></td>
   <td>
      <select type="text" class="khyzer" name="show-hac-heading-1" id="show-hac-heading-1" required>
         <option value="1">Show</option>
         <option value="0">Hide</option>
      </select>
   </td>
</tr>

<?php 
$hac_labels = [
 " Gross Annual Income (before tax)  ",
 " Maximum Housing Expense %   ",
 " (M1) Max Monthly Payment Based on Income   ",
];

$hac_values = [
  "    65,000.00   ",
  " 40%    "
];



for($i=0;$i<sizeof($hac_values);$i++){

   $html = '
<tr>
   <td>'.$hac_labels[$i].'</td>
   <td><input type="text" class="khyzer"  value="'.trim($hac_labels[$i]).'" required></td>
   <td><input type="text" class="khyzer"  value="'.trim($hac_values[$i]).'" ></td>
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


