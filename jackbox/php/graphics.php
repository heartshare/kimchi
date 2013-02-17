<?php
	
	if(isset($_GET["path"])) {
	
		$path = $_GET["path"];
		$files = scandir($path);
		$fileCount = count($files);
		$broken = false;
		$list = array();
		
		$item = NULL;
		$sub = NULL;
		$img = NULL;
		$dir = NULL;
		
		for($i = 0; $i < $fileCount; $i++) {
			
			$item = $files[$i];
			if(is_dir($item)) continue;
			
			if(strpos($item, ".") !== false) {
				
				if(preg_match('/.jpg|.png|.gif/', $item)) {
					
					$list[count($list)] = $path . $item;	
					
				}
				else if(strpos($item, ".psd") !== false) {
				
					continue;
					
				}
				else {
					
					$broken = true;	
					break;
					
				}
				
			}
			else {
				
				$sub = $path . $item;
				
				if($dir = opendir($sub)) {
					
					while(($img = readdir($dir)) !== false) {
						
						if(!is_dir($img)) {
							
							if(preg_match('/.jpg|.png|.gif/', $img)) {
								
								$list[count($list)] = $sub . "/" . $img;
								
							}
							else if(preg_match('/.psd|retina/', $img)) {
								
								continue;
								
							}
							else {
								
								$broken = true;	
								break;
								
							}
							
						}
						
					}
					
					closedir($dir);
					
				}
				
			}
			
			if($broken) break;
			
		}
		
		if(!$broken) echo json_encode($list);
		
	}
	
	unset($path);
	unset($files);
	unset($fileCount);
	unset($broken);
	unset($list);
	unset($files);
	unset($item);
	unset($sub);
	unset($img);
	unset($dir);
	

// ***********
// END OF FILE
// ***********