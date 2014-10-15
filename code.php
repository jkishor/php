<?php
$inputarray = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
);

$output = "";

if(isset($inputarray) && !empty($inputarray)) {
	$color1 = mt_rand(0,255);
	$color2 = mt_rand(0,255);
	$color3 = mt_rand(0,255);
	$color4 = mt_rand(0,255);
	$output.= "<table cellpadding='5' cellspacing='5' >";
	$output.= "<tr>
				<td style='background: rgb(".$color1.",".$color2.",".$color3."); color:#fff;'>Name</td>
				<td style='background: rgb(".$color2.",".$color3.",".$color4."); color:#fff;'>Color</td>
				<td style='background: rgb(".$color3.",".$color4.",".$color1."); color:#fff;'>Element</td>
				<td style='background: rgb(".$color4.",".$color1.",".$color2."); color:#fff;'>Likes</td>
			";
	foreach($inputarray as $input) {
		if(is_array($input) && !empty($input)) {
			$color1 = mt_rand(0,255);
			$color2 = mt_rand(0,255);
			$color3 = mt_rand(0,255);
			$color4 = mt_rand(0,255);
			$output.= "<tr>";
			$output.= "<tr>
							<td style='background: rgb(".$color1.",".$color2.",".$color3."); color:#fff;'>".$input['Name']."</td>
							<td style='background: rgb(".$color2.",".$color3.",".$color4."); color:#fff;'>".$input['Color']."</td>
							<td style='background: rgb(".$color3.",".$color4.",".$color1."); color:#fff;'>".$input['Element']."</td>
							<td style='background: rgb(".$color4.",".$color1.",".$color2."); color:#fff;'>".$input['Likes']."</td>
						</tr>
					";
		}
	}
}

if($output !="") {
	$output .= "</table>";
	echo $output;
} else {
	echo "oops! There is some problems with input";
}



?>
