<tr>
   <td>Depreciation</td>
   <td><input type="text" class="khyzer" name="hac-heading-6" id="hac-heading-6" value="Depreciation" required></td>
   <td></td>
   <td>
      <select type="text" class="khyzer" name="show-hac-heading-6" id="show-hac-heading-6" required>
         <option value="1">Show</option>
         <option value="0">Hide</option>
      </select>
   </td>
</tr>

<?php 
$hac_labels = [
  "   % of Home Price Depreciable    ",
 " Years to Depreciate   ",
 " Annual Depreciation (straight-line)  ",

];

$hac_values = [
 " 60.0%  ",
 "  27.5     ",
 "     ",

];



for($i=0;$i<sizeof($hac_values);$i++){

   $html = '
<tr>
   <td>'.$hac_labels[$i].'</td>
   <td><input type="text" class="khyzer" value="'.trim($hac_labels[$i]).'" required></td>
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


