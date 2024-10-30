<?php 

$hac_labels_chart = ['PI Payment', 'Property Tax', 'Insurance', 'PMI', 'HOA', 'Other '];
$hac_def_colors = ["#006aff","#e91e63","#ff9800","#795548","#8bc34a","#9e9e9e"];

for($i=0;$i<sizeof($hac_labels_chart);$i++){
   $html= '

<tr>
<td>'.$hac_labels_chart[$i].' <i class="fas fa-question-circle" title="Set color for <b>'.$hac_labels_chart[$i].'</b> in the pie chart"></i></td>
<td>
<input type="text" class="khyzer color" name="hac-chart-clr-'.($i+1).'" id="hac-chart-clr-'.($i+1).'" value="'.$hac_def_colors[$i].'" style="width:100%;max-width:230px;" required>
<input class="khyzer color-code" id="display-hac-chart-clr-'.($i+1).'" readonly>
</td>
</tr>


   ';

   echo $html;
}

?>


<!-- <tr>
<td>PI Payment <i class="fas fa-question-circle" title="Set color for <b>PI Payment</b> in the pie chart"></i></td>
<td>
<input type="text" class="khyzer color" name="hac-chart-clr-1" id="hac-chart-clr-1" value="#2f7ed8" style="width:100%;max-width:230px;" required>
<input class="khyzer color-code" id="display-hac-chart-clr-1" readonly>
</td>
</tr>
 -->
<!-- 
'PI Payment',
'Property Tax',
'Insurance',
'PMI',
'HOA',
'Other ',
-->