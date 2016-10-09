<?php
        
	$source = $_POST['code'];
	$source = array_values(array_filter(preg_split('/ /', $source)));
	
	
	$chain = array(0);
	$cell = 0;
	$brackets = 0;
	for($i=0; $i<count($source); ++$i) {
		switch(strtoupper($source[$i])) {
			case "PTN": 
			// &#1091;&#1074;&#1077;&#1083;&#1080;&#1095;&#1080;&#1074;&#1072;&#1077;&#1084; &#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1090;&#1077;&#1082;&#1091;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1080; &#1085;&#1072; 10
			$chain[$cell] = $chain[$cell] + 10;
			break;
case "MOV":
$chain[$cell] = $chain[$chain[$cell]];
break;
			case "MTN":
			// &#1091;&#1084;&#1077;&#1085;&#1100;&#1096;&#1072;&#1077;&#1084; &#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1090;&#1077;&#1082;&#1091;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1080; &#1085;&#1072; 10
			$chain[$cell] = $chain[$cell] - 10;
			break;
case "PFV":
$chain[$cell] = $chain[$cell] + 5;
break;
case "MFV":
$chain[$cell] = $chain[$cell] - 5;
break;
case " ":

break;
case ' ':
break;
			case "OUTU":
			print htmlspecialchars(chr($chain[0]));
			break;
			case "PUTU":
			print htmlspecialchars($chain[0]);
			break;
			case "NOP":
			
			break;
case "OCL":
print htmlspecialchars($cell);
break;
case "GCL":
$chain[$cell] = $cell;
break;
			case "CLR":
			$chain[$cell] = 0;
			break;
                        case "CLRU":
                        $chain[0] = 0;
                        break;
case "GTO":
$cell = $chain[$cell];
break;
			case "PUT":
			print htmlspecialchars($chain[$cell]);
			break;
			case "MLT":
			if( $chain[0] != 0 and $chain[1] != 0 ){
				$chain[$cell] = $chain[0] * $chain[1];
			} else {
				$chain[$cell] = 0;
			}
			break;
			case "DIV":
			if( $chain[0] != 0 and $chain[1] != 0 ){
				$chain[$cell] = $chain[0] / $chain[1];
			} else {
				$chain[$cell] = 0;
			}
			break;
			case "POW":
			if( $chain[0] != 0 and $chain[1] != 0 ){
				$chain[$cell] = pow($chain[0],$chain[1]);
			} else {
				$chain[$cell] = 0;
			}
			break;
			case "PLS" : // +
				// &#1091;&#1074;&#1077;&#1083;&#1080;&#1095;&#1080;&#1074;&#1072;&#1077;&#1084; &#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1090;&#1077;&#1082;&#1091;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1080;
				$chain[$cell]++;
				break;
			case "MNS" : // -
				// &#1091;&#1084;&#1077;&#1085;&#1100;&#1096;&#1072;&#1077;&#1084; &#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1090;&#1077;&#1082;&#1091;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1080;
				$chain[$cell]--;
				break;
			case "OUT" : // .
				// &#1074;&#1099;&#1074;&#1086;&#1076;&#1080;&#1084; &#1089;&#1080;&#1084;&#1074;&#1086;&#1083;
				print htmlspecialchars(chr($chain[$cell]));
				break;
			case "NXT" : // >
				// &#1087;&#1077;&#1088;&#1077;&#1093;&#1086;&#1076; &#1082; &#1089;&#1083;&#1077;&#1076;&#1091;&#1102;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1077;
				$cell++;
				if(!isset($chain[$cell])) {
					$chain[$cell] = 0;
				}
				break;
			case "LST" : // <
				// &#1087;&#1077;&#1088;&#1077;&#1093;&#1086;&#1076; &#1082; &#1087;&#1088;&#1077;&#1076;&#1099;&#1076;&#1091;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1077;
				$cell--;
				if(!isset($chain[$cell])) {
					$chain[$cell] = 0;
				}
				break;
				case "UPR":
				$cell = 0;
				break;
<?php
        
	$source = $_POST['code'];
	$source = array_values(array_filter(preg_split('/ /', $source)));
	
	
	$chain = array(0);
	$cell = 0;
	$brackets = 0;
	for($i=0; $i<count($source); ++$i) {
		switch(strtoupper($source[$i])) {
			case "PTN": 
			// &#1091;&#1074;&#1077;&#1083;&#1080;&#1095;&#1080;&#1074;&#1072;&#1077;&#1084; &#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1090;&#1077;&#1082;&#1091;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1080; &#1085;&#1072; 10
			$chain[$cell] = $chain[$cell] + 10;
			break;
case "MOV":
$chain[$cell] = $chain[$chain[$cell]];
break;
			case "MTN":
			// &#1091;&#1084;&#1077;&#1085;&#1100;&#1096;&#1072;&#1077;&#1084; &#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1090;&#1077;&#1082;&#1091;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1080; &#1085;&#1072; 10
			$chain[$cell] = $chain[$cell] - 10;
			break;
case "PFV":
$chain[$cell] = $chain[$cell] + 5;
break;
case "MFV":
$chain[$cell] = $chain[$cell] - 5;
break;
case " ":

break;
case ' ':
break;
			case "OUTU":
			print htmlspecialchars(chr($chain[0]));
			break;
			case "PUTU":
			print htmlspecialchars($chain[0]);
			break;
			case "NOP":
			
			break;
case "OCL":
print htmlspecialchars($cell);
break;
case "GCL":
$chain[$cell] = $cell;
break;
			case "CLR":
			$chain[$cell] = 0;
			break;
                        case "CLRU":
                        $chain[0] = 0;
                        break;
case "GTO":
$cell = $chain[$cell];
break;
			case "PUT":
			print htmlspecialchars($chain[$cell]);
			break;
			case "MLT":
			if( $chain[0] != 0 and $chain[1] != 0 ){
				$chain[$cell] = $chain[0] * $chain[1];
			} else {
				$chain[$cell] = 0;
			}
			break;
			case "DIV":
			if( $chain[0] != 0 and $chain[1] != 0 ){
				$chain[$cell] = $chain[0] / $chain[1];
			} else {
				$chain[$cell] = 0;
			}
			break;
			case "POW":
			if( $chain[0] != 0 and $chain[1] != 0 ){
				$chain[$cell] = pow($chain[0],$chain[1]);
			} else {
				$chain[$cell] = 0;
			}
			break;
			case "PLS" : // +
				// &#1091;&#1074;&#1077;&#1083;&#1080;&#1095;&#1080;&#1074;&#1072;&#1077;&#1084; &#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1090;&#1077;&#1082;&#1091;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1080;
				$chain[$cell]++;
				break;
			case "MNS" : // -
				// &#1091;&#1084;&#1077;&#1085;&#1100;&#1096;&#1072;&#1077;&#1084; &#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1090;&#1077;&#1082;&#1091;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1080;
				$chain[$cell]--;
				break;
			case "OUT" : // .
				// &#1074;&#1099;&#1074;&#1086;&#1076;&#1080;&#1084; &#1089;&#1080;&#1084;&#1074;&#1086;&#1083;
				print htmlspecialchars(chr($chain[$cell]));
				break;
			case "NXT" : // >
				// &#1087;&#1077;&#1088;&#1077;&#1093;&#1086;&#1076; &#1082; &#1089;&#1083;&#1077;&#1076;&#1091;&#1102;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1077;
				$cell++;
				if(!isset($chain[$cell])) {
					$chain[$cell] = 0;
				}
				break;
			case "LST" : // <
				// &#1087;&#1077;&#1088;&#1077;&#1093;&#1086;&#1076; &#1082; &#1087;&#1088;&#1077;&#1076;&#1099;&#1076;&#1091;&#1097;&#1077;&#1081; &#1103;&#1095;&#1077;&#1081;&#1082;&#1077;
				$cell--;
				if(!isset($chain[$cell])) {
					$chain[$cell] = 0;
				}
				break;
				case "UPR":
				$cell = 0;
				break;
			case "CBGN[" :
				// &#1085;&#1072;&#1095;&#1072;&#1083;&#1086; &#1094;&#1080;&#1082;&#1083;&#1072;
				if(!$chain[$cell]) {
					$brackets = 1;
					while($brackets) {
						$i++;
						if($source[$i] == "CBGN[") {
							// &#1073;&#1099;&#1083; &#1086;&#1090;&#1082;&#1088;&#1099;&#1090; &#1074;&#1083;&#1086;&#1078;&#1077;&#1085;&#1085;&#1099;&#1081; &#1094;&#1080;&#1082;&#1083;
							$brackets++;
						} else if($source[$i] == "]CEND") {
							// &#1094;&#1080;&#1082;&#1083; &#1079;&#1072;&#1082;&#1088;&#1099;&#1090;
							$brackets--;
						}
					}
				}
				break;
			case "]CEND" :
				// &#1082;&#1086;&#1085;&#1077;&#1094; &#1094;&#1080;&#1082;&#1083;&#1072;
				if($chain[$cell]) {
					$brackets = 1;
					while($brackets) {
						$i--;
						if($source[$i] == "]CEND") {
							// &#1073;&#1099;&#1083; &#1079;&#1072;&#1082;&#1088;&#1099;&#1090; &#1074;&#1083;&#1086;&#1078;&#1077;&#1085;&#1085;&#1099;&#1081; &#1094;&#1080;&#1082;&#1083;
							$brackets++;
						} else if($source[$i] == "CBGN[") {
							// &#1094;&#1080;&#1082;&#1083; &#1086;&#1090;&#1082;&#1088;&#1099;&#1090;
							$brackets--;
						}
					}
				}
				break;
				default:
				echo "<font color='red'>Error</font>: not exists operator '".$source[$i]."'\n";
				exit(0);
				break;
		}
	}
?> 
