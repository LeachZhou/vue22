<?php
    if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
    header("Content-type:application/pdf");
    header("Content-Disposition:attachment;filename='downloaded.pdf'");
}else{
    $url = base64_decode($_GET['url']);
    header('location:'.$url);
}
?>


<!DOCTYPE html>
<html>
<script>
if (typeof WeixinJSBridge === "undefined"){
	if (document.addEventListener){
		document.addEventListener('WeixinJSBridgeReady', function(){
		    WeixinJSBridge.invoke("closeWindow",{},function(e){})
		}, false);
	}
}else{
	WeixinJSBridge.invoke("closeWindow",{},function(e){})
}
</script>
<body>

</body>
</html>