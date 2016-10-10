<?php

# THIS IS FOR THE EUROPE MAP

$yeargroup = [];
$yeargroup[138] = [0,230];
$yeargroup[230] = [138,305];
$yeargroup[305] = [230,362];
$yeargroup[362] = [305,406];
$yeargroup[406] = [362,420];
$yeargroup[420] = [406,451];
$yeargroup[451] = [420,476];
$yeargroup[476] = [451,528];
$yeargroup[528] = [476,565];
$yeargroup[565] = [528,600];
$yeargroup[600] = [565,626];
$yeargroup[626] = [600,651];
$yeargroup[651] = [626,737];
$yeargroup[737] = [651,771];
$yeargroup[771] = [737,830];
$yeargroup[830] = [771,888];
$yeargroup[888] = [830,925];
$yeargroup[925] = [888,1000];
$yeargroup[1000] = [925,1030];
$yeargroup[1030] = [1000,1071];
$yeargroup[1071] = [1030,1092];
$yeargroup[1092] = [1071,1100];
$yeargroup[1100] = [1092,1130];
$yeargroup[1130] = [1100,1173];
$yeargroup[1173] = [1130,1212];
$yeargroup[1212] = [1173,1230];
$yeargroup[1230] = [1212,0];



$heightSetting = <<<eot
 <script type="text/ecmascript">
// set height proportional to width
document.getElementById('limit-div').style.height = (window.innerWidth/2905.1*2485.5)+'px'
</script>
eot;
	

$stylingBlock = <<<eot
<style type="text/css">
	.big { fill: transparent; font-size: 72px; font-family:'Myriad Pro','Helvetica Neue', Helvetica,Arial,sans-serif; cursor: pointer; }
	a:hover > .big { fill:#8B5E3C;  }
	a:hover > .maprange { fill:yellow; }
	.selectors { cursor:pointer; font-family:'Myriad Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:40px; fill:#ccc; font-weight: normal; }
	.selectors:hover { fill:#000; border-radius: 10px; }
	.maprange { fill:#A97C50; stroke:white; }
	.options { fill:#aa896b; stroke:white; }
</style> 
eot;



$optionMenu = <<<eot
	<path class="options" d="M 2660,50 l 215,0 l 0,330 l -215,0 z"/>
	<text transform="translate(2680 100)" class="selectors" style="fill:#d8d31e;">Options:</text>
	<text transform="translate(2680 160)" class="selectors" onclick="
	if(document.getElementById('bitmap').style.display!='none'){
	document.getElementById('bitmap').style.display='none';
	document.getElementById('coastlines').style.opacity='1';
	localStorage.schematic = 'yes'; } 
	else {
	document.getElementById('bitmap').style.display='block';
	document.getElementById('coastlines').style.opacity='0.3';
	localStorage.schematic = 'no'; } 
	">Relief map</text>
	<text transform="translate(2680 220)" class="selectors" onclick="
	var modern_borders = document.getElementById('modern_borders'); 
	if(modern_borders.style.display=='block'){modern_borders.style.display='none';
	localStorage.modernBorders = 'no';} 
	else {modern_borders.style.display='block';
	localStorage.modernBorders = 'yes';}
	">Borders</text>
	<text transform="translate(2680 280)" class="selectors" onclick="
	var rivercourses = document.getElementById('rivercourses'); 
	var rivernames = document.getElementById('rivernames'); 
	if (rivercourses.style.display=='block'){
		rivercourses.style.display='none';
		rivernames.style.display='none';
		localStorage.rivers = 'no';
		} 
	else {
		rivercourses.style.display='block';
		rivernames.style.display='block';
		localStorage.rivers = 'yes';
		}
	">Rivers</text>
	<text transform="translate(2680 340)" class="selectors" onclick="
	if(document.getElementById('text').style.display=='none'){
	document.getElementById('modern_text').style.display='none';
	document.getElementById('text').style.display='block';
	localStorage.modernNames = 'no';} 
	else {
	document.getElementById('modern_text').style.display='block';
	document.getElementById('text').style.display='none';
	localStorage.modernNames = 'yes';} 
	if(document.getElementById('cities').style.display=='none'){
	document.getElementById('modern_cities').style.display='none';
	document.getElementById('cities').style.display='block';
	localStorage.modernCities = 'no';} 
	else {
	document.getElementById('modern_cities').style.display='block';
	document.getElementById('cities').style.display='none';
	localStorage.modernCities = 'yes';} 
	">Names</text>
	<script>
	if (localStorage.schematic == 'yes') { 
		document.getElementById('bitmap').style.display='none';
		document.getElementById('coastlines').style.opacity='1';
		}
	if (localStorage.modernBorders == 'yes') { 
		document.getElementById('modern_borders').style.display='block'
		}
	if (localStorage.rivers == 'yes') { 
		document.getElementById('rivercourses').style.display='block'
		document.getElementById('rivernames').style.display='block'
		}
	if (localStorage.modernNames == 'yes') { 
		document.getElementById('modern_text').style.display='block';
		document.getElementById('text').style.display='none';
		document.getElementById('modern_cities').style.display='block';
		document.getElementById('cities').style.display='none';
		}
	</script>
eot;



$htmlOptions = <<<eot
<div id="options" style="display:flex; flex-flow: row nowrap;">
<p style="flex:2;">&nbsp;</p>
<p style="text-align:center; flex: 1;">prevPlaceholder nextPlaceholder</p>
<p style="flex:2;">Options: &nbsp; <span class="option" onclick="
	if(document.getElementById('bitmap').style.display!='none'){
	document.getElementById('bitmap').style.display='none';
	document.getElementById('coastlines').style.opacity='1';
	localStorage.schematic = 'yes'; } 
	else {
	document.getElementById('bitmap').style.display='block';
	document.getElementById('coastlines').style.opacity='0.3';
	localStorage.schematic = 'no'; } 
	">Relief</span> &bull;
	<span class="option" onclick="
	var modern_borders = document.getElementById('modern_borders'); 
	if(modern_borders.style.display=='block'){modern_borders.style.display='none';
	localStorage.modernBorders = 'no';} 
	else {modern_borders.style.display='block';
	localStorage.modernBorders = 'yes';}
	">Borders</span> &bull;
	<span class="option" onclick="
	var rivercourses = document.getElementById('rivercourses'); 
	var rivernames = document.getElementById('rivernames'); 
	if (rivercourses.style.display=='block'){
		rivercourses.style.display='none';
		rivernames.style.display='none';
		localStorage.rivers = 'no';
		} 
	else {
		rivercourses.style.display='block';
		rivernames.style.display='block';
		localStorage.rivers = 'yes';
		}
	">Rivers</span> &bull;
	<span class="option" onclick="
	if(document.getElementById('text').style.display=='none'){
	document.getElementById('modern_text').style.display='none';
	document.getElementById('text').style.display='block';
	localStorage.modernNames = 'no';} 
	else {
	document.getElementById('modern_text').style.display='block';
	document.getElementById('text').style.display='none';
	localStorage.modernNames = 'yes';} 
	if(document.getElementById('cities').style.display=='none'){
	document.getElementById('modern_cities').style.display='none';
	document.getElementById('cities').style.display='block';
	localStorage.modernCities = 'no';} 
	else {
	document.getElementById('modern_cities').style.display='block';
	document.getElementById('cities').style.display='none';
	localStorage.modernCities = 'yes';} 
	">Names</span> &bull;
	<span class="option" onclick=" 
	var shading = document.getElementById('borders')
	if(shading.style.display == 'none') shading.style.display='block'
    else if (shading.style.display == 'block') shading.style.display='none'
	else shading.style.display='none'
	">Shading</span>
    </p>
</div>
eot;





$nav = '';
$filename = '';
if(isset($_GET['dates']) && $_GET['dates'] != '') {
	$datelist = $_GET['dates'];
	
	$datearray = explode(',',$datelist);
    if ($datearray[0] == 'all') {
    	$ptr = 0;
    	foreach ($yeargroup as $year => $val) {
        	$datearray[$ptr++] = $year;
        	}
    	}
        print_r($datearray);
	$sourcePath = '../svg_raw/';
	$targetPath = '../svg/';
	
	$base = fopen($targetPath.'base.svg', "r");
	if (!$base) { $message = 'Could not open file.  Check the spelling of the URI.'; }
	$basetext = fread($base,  filesize($targetPath.'base.svg'));
	fclose($base);

	echo 'datearray length: '.count($datearray).'<br/>';
	
	for ($i=0;$i<count($datearray);$i++) {
		$era = 'CE';
		if ($datearray[$i] < 0) $era = 'BCE';
		$filename = $era.'_'.abs($datearray[$i]);
		echo 'filename: '.$filename.'<br/>';
	
		#chmod($filename, 0777);
	
		$fp = fopen($sourcePath.$filename.'.svg', "r");
		if (!$fp) { $message = 'Could not open file.  Check the spelling of the URI.'; }
	
		$message = "\n".'<text font-weight="700" font-family="\'Myriad Pro\', Arial, sans-serif" fill="#231f20" font-size="200px" color="black" text-anchor="end" transform="translate(900 454)">'.abs($datearray[$i]).'<tspan font-size="72px" x="100" y="0">'.$era.'</tspan></text>';
		$message .= '<a xlink:href="index#thumbnails"><path fill="#4D4D4F" d="M715.2,542.4l-0.2,61.1c0,5.3,4.3,8.4,12.8,9.5v5l-53.4,0.1v-4.9c4.2,0,7.4-0.8,9.7-2.3
		c2.3-1.5,3.4-3.7,3.4-6.5v-41.7c0-5.3-4.3-8.5-13-9.5l0.1-6.2L715.2,542.4z M701.4,504.7c4,0,7.4,1.4,10.1,4.1
		c2.7,2.7,4.1,6.1,4.1,10.2c0,3.9-1.4,7.2-4.1,10c-2.7,2.7-6,4.1-9.8,4.1c-4.2,0-7.6-1.3-10.4-3.8s-4.1-5.8-4.1-9.7
		c0-4.4,1.3-7.9,4-10.7C693.8,506.1,697.2,504.7,701.4,504.7z"/></a>';
		$targetEra = 'CE';
		if ($yeargroup[$datearray[$i]][0] < 0) $targetEra = 'BCE';
		if ($yeargroup[$datearray[$i]][0] != 0) {
			$message .= '<a xlink:href="'.$targetEra.'_'.abs($yeargroup[$datearray[$i]][0]).'.svg"><path color="black" d="M622,506c-11.92,11.92-61.88,65-61.88,65s51.37,52.46,63.81,64.9V508"/></a>';
			}
		$targetEra = 'CE';
		if ($yeargroup[$datearray[$i]][1] < 0) $targetEra = 'BCE';
		if ($yeargroup[$datearray[$i]][1] != 0) {
			$message .= '<a xlink:href="'.$targetEra.'_'.abs($yeargroup[$datearray[$i]][1]).'.svg"><path color="black" d="M781.41,633.92c11.92-11.92,61.88-65,61.88-65s-51.37-51.46-63.81-63.9V631.94"/></a>'."\n";
			}


        $message .= $stylingBlock;
        
        // do timeline
        // starts at 100BCE, so add 100 to each figure
        $message .= "\n";
        foreach ($yeargroup as $year => $val) {
            $message .= '<a xlink:href="';
            if ($year < 0) $message .= 'BCE_';
            else $message .= 'CE_';
            if ($val[0] == 0) $message .= abs($year).'.svg"><path class="maprange" d="M 0,0 l 30,0 l 0,'.(($year-$val[0])+100).' l -30,0 z"/><text x="30" y="100" class="big">&#xA0;&#xA0;'.$year.'</text></a>'."\n";
            else $message .= abs($year).'.svg"><path class="maprange" d="M 0,'.($val[0]+100).' l 30,0 l 0,'.($year-$val[0]).' l -30,0 z"/><text x="30" y="'.($year+100).'" class="big">&#xA0;&#xA0;'.$year.'</text></a>'."\n";
            }
        
        
        $message .= $optionMenu;
    
		$svgtext = fread($fp,  filesize($sourcePath.$filename.'.svg'));
		fclose($fp);
		
		echo 'svgtext length '.strlen($svgtext)."<br/>";
        
        // add the base text
		$svgtext = preg_replace('/\<g id="bitmap"\>[\s]+\<image style="overflow:visible;" width="2885" height="2483" xlink\:href="\.\.\/\.\.\/r12a\.github\.io\/maps\/europe\/base_map\.jpg"[\s]+transform="matrix\(1\.0066 0 0 1 0 2\.48\)">[\s]+\<\/image\>[\s]+\<\/g\>/',$heightSetting."\n".$basetext,$svgtext);
		echo 'svgtext with base '.strlen($svgtext)."<br/>";
		
		$svgtext = preg_replace('/<text font-weight="700" font-family="\'Myriad Pro\', Arial,(.|\n)+<\/svg>/','</svg>',$svgtext);
		echo 'svgtext length '.strlen($svgtext)."<br/>";
		$newsvgtext = str_replace("'MyriadPro-Regular'","'Myriad Pro',Helvetica,Arial,sans-serif",$svgtext);
		$newsvgtext = str_replace("'MyriadPro-Semibold'","'Myriad Pro',Helvetica,Arial,sans-serif",$newsvgtext);
		$newsvgtext = str_replace("'MyriadPro-Bold'","'Myriad Pro',Helvetica,Arial,sans-serif",$newsvgtext);
		$newsvgtext = str_replace("font-family:'MyriadPro-It';","font-family:'Myriad Pro',Helvetica,Arial,sans-serif; font-style: italic;",$newsvgtext);
		$newsvgtext = str_replace("'ArialMT'","'Myriad Pro',Helvetica,Arial,sans-serif",$newsvgtext);
		
		$newsvgtext = str_replace('</svg>',$message,$newsvgtext)."\n".'</svg>';
		
		echo 'updated svgtext length '.strlen($newsvgtext)."<br/>";
		
		if (is_writable($targetPath.$filename.'.svg')) { echo "is writeable<br/>"; }
		else { echo "NOT WRITEABLE<br/>";  exit; }

		//chmod($filename,0777);
		//$fp = fopen($filename, "wb");
		//if (!$fp) { $message = 'Could not open file.  Check the spelling of the URI.'; }
		//$numbytes = fwrite($fp, $newsvgtext);
		//if (fwrite($fp, $newsvgtext) === FALSE) {
		//	echo "Cannot write to file ($filename)";
		//	exit;
		//	}


		$numbytes = file_put_contents($targetPath.$filename.'.svg', $newsvgtext);
  		echo "Wrote ($numbytes) bytes to file ($targetPath$filename.svg)<br/>";

		//fclose($fp);
        
       
        //************** CREATE THE HTML FILE *************
        
		$htmlfp = fopen('../html_raw/'.$filename.'.html', "r");
		if (!$htmlfp) { $message = 'Could not open file.  Check the spelling of the URI.'; }

		$htmltext = fread($htmlfp,  filesize('../html_raw/'.$filename.'.html'));
		fclose($htmlfp);
	
		echo 'htmltext length '.strlen($htmltext)."<br/>";
        
        // add the SVG text
		$enclosingDiv = '<div id="limit-div" style="width: 100%; height: 1000px;">'."\n";
        
        // prepare links to surrounding maps
        $htmlInsert = $htmlOptions;

		$targetEra = abs($yeargroup[$datearray[$i]][0]).'CE'; $targetLink = 'CE_'.abs($yeargroup[$datearray[$i]][0]);
		if ($yeargroup[$datearray[$i]][0] < 0) { $targetEra = abs($yeargroup[$datearray[$i]][0]).'BCE'; $targetLink = 'BCE_'.abs($yeargroup[$datearray[$i]][0]); }
		if ($yeargroup[$datearray[$i]][0] != 0) $mapLink = '<a href="'.$targetLink.'">'.$targetEra.' ◀</a>';
        else { $mapLink = ''; }
        $htmlInsert = preg_replace('/prevPlaceholder/',$mapLink,$htmlInsert);
        
		$targetEra = abs($yeargroup[$datearray[$i]][1]).'CE'; $targetLink = 'CE_'.abs($yeargroup[$datearray[$i]][1]);
		if ($yeargroup[$datearray[$i]][1] < 0) { $targetEra = abs($yeargroup[$datearray[$i]][1]).'BCE'; $targetLink = 'BCE_'.abs($yeargroup[$datearray[$i]][1]); }
		if ($yeargroup[$datearray[$i]][1] != 0) $mapLink = '<a href="'.$targetLink.'">▶ '.$targetEra.'</a>';
        else { $mapLink = ''; }
        $htmlInsert = preg_replace('/nextPlaceholder/',$mapLink,$htmlInsert);
        
        
        
        
        $htmltext = preg_replace('/<svg><\/svg>/',$enclosingDiv.$newsvgtext.'</div>'.$htmlInsert,$htmltext);
		$htmltext = preg_replace('/<\?xml version="1\.0" encoding="utf-8"\?>/','',$htmltext);
		$htmltext = preg_replace('/<svg /','<svg id="limit-svg"  ',$htmltext);
		$htmltext = preg_replace('/style="enable-background:/','style="enable-background:new 0 0 2905.1 2485.5; display: inline; width: inherit; min-width: inherit; max-width: inherit; height: inherit; min-height: inherit; max-height: inherit; enable-background:',$htmltext);
		$htmltext = preg_replace('/\.\.\/relief_map/','relief_map',$htmltext);
		echo 'htmltext with base '.strlen($htmltext)."<br/>";
		
		$htmltext = preg_replace('/\.svg/','.html',$htmltext);
		$htmltext = preg_replace('/<\/body>/','<p class="svgLink"><a href="svg/'.$filename.'.svg">View the SVG only</a></p></body>',$htmltext);
		echo 'updated htmltext length '.strlen($htmltext)."<br/>";
		
		if (is_writable('../'.$filename.'.html')) { echo "is writeable<br/>"; }
		else { echo "NOT WRITEABLE<br/>";  exit; }


		$numbytes = file_put_contents('../'.$filename.'.html', $htmltext);
  		echo "Wrote ($numbytes) bytes to file ($filename.html)";
		}
	}


?>