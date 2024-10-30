<tr>
   <td>Monthly Housing Expenses</td>
   <td><input type="text" class="khyzer" name="hac-heading-3" id="hac-heading-3" value="Monthly Housing Expenses" required></td>
   <td></td>
   <td>
      <select type="text" class="khyzer" name="show-hac-heading-3" id="show-hac-heading-3" required>
         <option value="1">Show</option>
         <option value="0">Hide</option>
      </select>
   </td>
</tr>

<?php 
$hac_labels = [
  "   Property Tax (Monthly)   ",
 " Home Owners Insurance (Monthly)   ",
 " PMI (private mortgage insurance)  ",
 " HOA Fees  ",
 " Other (Utilities, Repairs, etc.)  ",
 " (M3) Max PI Payment Based on Expenses   ",

];

$hac_values = [
  "    500.00   ",
 "  75.00    ",
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


