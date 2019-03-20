<!DOCTYPE html>
<html>
	<head>
		<script>
			
			
			function displaywindow(text1, text2,int)
				{
						
					//var win1=window.open("testhtmldyn1.php");			
					
					//window.open("testhtmldyn1.php?t1="+ text1 +"&t2="+ text2 ,"MyTargetWindowName");
					window.open("testhtmldyn1.php?t1="+text1+"&t2="+text2 );
					
					//var text=text1;
					//var html="<html><head></head><body>"+text1+"<b>"+ text2 +"</b>.";
					//html+=int;
					////
					////
					//win1.document.open();
					//win1.document.write(text1);
					//win1.document.close();
					
					
				}
				
			
			
		    
		
		</script>

</head>
<body>
<button onclick='displaywindow("hello","world",3)'>click</button></br>
<a href="mailto:xhe_d@hotmail.com?subject=Me&body=<a href='http://www.w3.org'>">email</a>

</body>
</html>