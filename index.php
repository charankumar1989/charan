<?php ?>$item .='<br/>
			
			<fieldset class="fileldset_outer">
        	<legend>Additional Information</legend>
			<table class="gridtable">
			<thead>
				<th class="additionalque"><h1>Personal</h1></th>
			</thead>
			<tbody>
			<tr>
				<td><p>';
			 if ($Additional['personal'])
			  $item .= $Additional['personal'];
			 else
			   $item .= '<p style="text-align:center">-</p>';
			 
				$item .= '</p></td>
			</tr>
				</tbody>
			</thead>
			</table><br/>
			
			<table class="gridtable">
			<thead>
				<th class="additionalque"><h1>Property</h1></th>
			</thead>
			<tbody>
			<tr>
				<td><p>';
			 if ($Additional['property'])
			  $item .= $Additional['property'];
			  else
			  $item .= '<p style="text-align:center">-</p>';
			  $item .= '</p></td>
			</tr>
				</tbody>
			</thead>
			</table><br/><table class="gridtable">
			<thead>
				<th class="additionalque"><h1>Employment</h1></th>
			</thead>
			<tbody>
			<tr>
				<td><p>';
		    if ($Additional['employment'])
			$item .= $Additional['employment'];
			else
			$item .= '<p style="text-align:center">-</p>';
			$item .='</p></td>
			</tr>
				</tbody>
			</thead>
			</table><br/>
			
			<table class="gridtable">
			<thead>
				<th class="additionalque"><h1>Assets</h1></th>
			</thead>
			<tbody>
			<tr>
				<td><p>';
			 if ($Additional['assets'])
			  $item .=  $Additional['assets'];
			  else
			  $item .= '<p style="text-align:center">-</p>';
			  $item .='</p></td>
			</tr>
				</tbody>
			</thead>
			</table><br/>
			
			<table class="gridtable">
			<thead>
				<th class="additionalque"><h1>Insurance</h1></th>
			</thead>
			<tbody>
			<tr>
				<td><p>';
			 if ($Additional['insurance'])
			 $item .= $Additional['insurance'];
			  else
			 $item .= '<p style="text-align:center">-</p>';
			  $item .= '</p></td>
			</tr>
				</tbody>
			</thead>
			</table><br/>
			
			<table class="gridtable">
			<thead>
				<th class="additionalque"><h1>Final</h1></th>
			</thead>
			<tbody>
			<tr>
				<td><p>';
			 if ($Additional['final'])
			 $item .= $Additional['final'];
			 else
			 $item .= '<p style="text-align:center">-</p>';
			 $item .= '</p></td>
			</tr>
				</tbody>
			</thead>
			</table><br/>
		
            </fieldset>';
	