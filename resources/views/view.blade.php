<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		object {
		    position: absolute;
		    top : 0;
		    bottom : 0;
		    left : 0;
		    right : 0;
		}
		                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
	</style>
</head>
<body>
	<?php 
		// $link = "URL::asset('pdf/".$book->path."')";
		$link = "http://localhost:8000/pdf/".$book->path;		
	?>

	<object class="" data="<?php echo $link?>" type="application/pdf" width="100%" height="100%">
  	</object>
  		
</body>
</html>