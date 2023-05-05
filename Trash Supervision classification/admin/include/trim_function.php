		<?php
			function safe_insert($data){
					$data = trim($data);
					$data =  mysql_real_escape_string($data);
					return $data;
				}
			
		?>