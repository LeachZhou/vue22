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
<body>

<div>
    <div id="toggleMenuBtn">ofi-rte9sf=dg=s-gsd</div>
    <div id="closeWindow">gjklsfd=gjirte-rgji094jofjio</div>
</div>

<script>
function onBridgeReady() {
	WeixinJSBridge.on('menu:share:appmessage', function(argv)
	{
		WeixinJSBridge.invoke('sendAppMessage',{
					"link":"http://m.exmail.qq.com/",
					"desc":"desc",
					"title":"title for WeiXinJsBridge"
		}, function(res) {
			WeixinJSBridge.log(res.err_msg);
		});
	});
	WeixinJSBridge.on('menu:share:timeline', function(argv)
	{
	WeixinJSBridge.invoke("shareTimeline",{
		"link":"http://m.exmail.qq.com",
		"img_url":"http://rescdn.qqmail.com/bizmail/zh_CN/htmledition/images/bizmail/v3/logo1ca3fe.png",
		"img_width":"172",
		"img_height":"40",
		"desc":"i am description",
		"title":"just test from WeixinJsBridge"
		},
		function(e){
		alert(e.err_msg);
		})
	});
}

if (typeof WeixinJSBridge === "undefined"){
	if (document.addEventListener){
		document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
	}
}else{
	onBridgeReady();
}

	var menuHidden=!1,toolbarHidden=!1,netType={"network_type:wifi":"wifi网络","network_type:edge":"非wifi,包含3G/2G","network_type:fail":"网络断开连接","network_type:wwan":"2g或者3g"};
	document.addEventListener("WeixinJSBridgeReady",function(){
	        document.getElementById("imagePreview").addEventListener(
			"click",function(){
                                WeixinJSBridge.invoke("imagePreview",{
				"urls":[
				"http://rescdn.qqmail.com/bizmail/zh_CN/htmledition/images/bizmail/v3/logo1ca3fe.png",
				"http://rescdn.qqmail.com/bizmail/zh_CN/htmledition/images/bizmail/v3/icons_features1ca3fe.png",
				"http://rescdn.qqmail.com/bizmail/zh_CN/htmledition/images/bizmail/v3/icons_workStyle1ca3fe.png"
				],
				"current":"http://rescdn.qqmail.com/bizmail/zh_CN/htmledition/images/bizmail/v3/icons_features1ca3fe.png"
				})
                        },!1),
		document.getElementById("profile").addEventListener(
			"click",function(){
				alert("profile clicked");
				WeixinJSBridge.invoke("profile",{
					"username":"gh_412d74fbb474",
					"nickname":"企业微信小助手"
				})
			},!1),
		document.getElementById("shareWeibo").addEventListener(
			"click",function(){
				WeixinJSBridge.invoke("shareWeibo",{
					"type":"link",
					"link":"http://m.exmail.qq.com"
				},
				function(e){
					alert(e.err_msg);
				})
			},!1),
		document.getElementById("shareFB").addEventListener(
			"click",function(){
				WeixinJSBridge.invoke("shareFB",{
					"link":"http://m.exmail.qq.com"
				})
			},!1),
		document.getElementById("scanQRCode").addEventListener(
			"click",function(){
				WeixinJSBridge.invoke("scanQRCode",{
				})
			},!1),
		document.getElementById("addEmoticon").addEventListener(
			"click",function(){
				WeixinJSBridge.invoke("addEmoticon",{
					"url":"http://rescdn.qqmail.com/bizmail/zh_CN/htmledition/images/bizmail/v3/icons_features1ca3fe.png",
					"thumb_url":"http://rescdn.qqmail.com/bizmail/zh_CN/htmledition/images/bizmail/v3/logo1ca3fe.png"

				},
				function(e){
                                        alert(e.err_msg);
                                })
			},!1),
		document.getElementById("cancelAddEmoticon").addEventListener(
			"click",function(){
				WeixinJSBridge.invoke("cancelAddEmoticon",{
					"url":"http://rescdn.qqmail.com/bizmail/zh_CN/htmledition/images/bizmail/v3/icons_features1ca3fe.png"

				},
				function(e){
                                        alert(e.err_msg);
                                })
			},!1),
		document.getElementById("hasEmoticon").addEventListener(
			"click",function(){
				WeixinJSBridge.invoke("hasEmoticon",{
					"url":"http://rescdn.qqmail.com/bizmail/zh_CN/htmledition/images/bizmail/v3/icons_features1ca3fe.png"

				},
				function(e){
                                        alert(e.err_msg);
                                })
			},!1),
		document.getElementById("addContact").addEventListener(
			"click",function(){
				WeixinJSBridge.invoke("addContact",{
					"webtype":"1",
					"username":"gh_412d74fbb474"
				},
				function(e){
					alert(e.err_msg);
				})
			},!1),
		document.getElementById("jumpToBizProfile").addEventListener(
			"click",function(){
				WeixinJSBridge.invoke("jumpToBizProfile",{
					"tousername":"syqnr0"
				},
				function(e){
					alert(e.err_msg);
				})
			},!1),
		document.getElementById("toggleMenuBtn").addEventListener(
			"click",function(){
				menuHidden?
				(WeixinJSBridge.call("showOptionMenu"),menuHidden=!1,this.value="隐藏右上角按钮")
				:
				(WeixinJSBridge.call("hideOptionMenu"),menuHidden=!0,this.value="显示右上角按钮")
			},!1),
		document.getElementById("toggleToolbar").addEventListener(
			"click",function(){
				toolbarHidden?
				(WeixinJSBridge.call("showToolbar"),toolbarHidden=!1,this.value="隐藏底部导航栏")
				:
				(WeixinJSBridge.call("hideToolbar"),toolbarHidden=!0,this.value="显示底部导航栏")
			},!1),
		document.getElementById("getNetType").addEventListener(
			"click",function(){
				WeixinJSBridge.invoke("getNetworkType",{},
					function(e){
						alert(netType[e.err_msg])
					})
			},!1),
		 document.getElementById("closeWindow").addEventListener(
                        "click",function(){
                                WeixinJSBridge.invoke("closeWindow",{},function(e){})
                        },!1),
		document.getElementById("getBrandWCPayRequest").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("getBrandWCPayRequest",{
				"appId" : "wxf8b4f85f3a794e77", //公众号名称，由商户传⼊入
				"timeStamp" : "189026618", //时间戳 这⾥里随意使⽤用了⼀一个值
				"nonceStr" : "adssdasssd13d", //随机串
				"package" :
				"body=xxx&fee_type=1&input_charset=GBK&notify_url=http&out_trade_no=16642817866003386000&partner=1900000109&return_url=http&spbill_create_ip=127.0.0.1&total_fee=1&sign=273B7EEEE642A8E41F27213D8517E0E4", //扩展字段，由商户传⼊入
				"signType" : "SHA1", //微信签名⽅方式:sha1
				"paySign" : "b737015b5b1eabe5db580945a07eac08c7bb55f8" //微信签名
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("setPageState").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("setPageState",{
				"state" : "1"
				})
			},!1),

		document.getElementById("sendEmail").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("sendEmail",{
				"title" : "title!",
				"content" : "i am an Email!", //时间戳 这⾥里随意使⽤用了⼀一个值
				},
				function(e){
		//			alert(e.err_msg)
				})
			},!1),
		document.getElementById("openSpecificView").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("openSpecificView",{
				"specificview" : "contacts"
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("getCanIAPPay").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("getCanIAPPay",{	},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("getBrandIAPPayRequest").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("getBrandIAPPayRequest",{
				"appId" : "wxf8b4f85f3a794e77", //公众号名称，由商户传⼊入
				"timeStamp" : "189026618", //时间戳 这⾥里随意使⽤用了⼀一个值
				"nonceStr" : "adssdasssd13d", //随机串
				"package" : "bankType=CITIC_CREDIT&bankName=%e4%b8%ad%e4%bf%a1%e9%93%b6%e8%a1%8c&sign=CF8922F49431FFE8A1834D0B32B25CE3",
				//扩展字段，由商户传⼊入
				"signType" : "SHA1", //微信签名⽅方式:sha1
				"paySign" : "1e6f13f78ca0ec43fbb80899087f77568af66987" //微信签名
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("openLocation").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("openProductView",{
				"latitude" : 23.113, //纬度
				"longitude" : 113.23, //经度
				"name" : "TIT创意园", //POI名称
				"address" : "⼲⼴广州市海珠区新港中路397号", //地址
				"scale" : 14, //地图缩放级别
				"infoUrl" : "http://weixin.qq.com/", //查看位置界⾯面底部的超链接
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("timelineCheckIn").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("timelineCheckIn",{
				"img_url": "http://mmsns.qpic.cn/mmsns/RLllkTm3DUdV24xbZnKicx9jJWxXI0Bq84zzbtibGuRyk/0", // 分享到朋友圈的缩略图
				"img_width": "640",　// 图⽚片的⻓长度
				"img_height": "640", // 图⽚片⾼高度
				"link": "http://news.qq.com/zt2012/cxkyym/index.htm",　// 连接地址
				"desc": "这个是描述啊啊", // 描述
				"title": "朝鲜称中国渔船越界捕捞", // 分享标题
				"latitude" : 23.113, //纬度
				"longitude" : 113.23, //经度
				"poiId" : "dianping_2331037", //商户id
				"poiName" : "TIT创意园", //POI名称
				"poiAddress" : "⼲⼴广州市海珠区新港中路397号", //地址
				"poiScale" : 14, //地图缩放级别
				"poiInfoUrl" : "http://weixin.qq.com/" //查看位置界⾯面底部的超链接
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("geoLocation").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("geoLocation",{
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("getBrandWCPayCreateCreditCardRequest").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("getBrandWCPayCreateCreditCardRequest",{
				"appId" : "wxf8b4f85f3a794e77", //公众号名称，由商户传⼊入
				"timeStamp" : "189026618", //时间戳 这⾥里随意使⽤用了⼀一个值
				"nonceStr" : "adssdasssd13d", //随机串
				"package" : "bankType=CITIC_CREDIT&bankName=%e4%b8%ad%e4%bf%a1%e9%93%b6%e8%a1%8c&sign= CF8922F49431FFE8A1834D0B32B25CE3",
				//扩展字段，由商户传⼊入
				"signType" : "SHA1", //微信签名⽅方式:sha1
				"paySign" : "1e6f13f78ca0ec43fbb80899087f77568af66987" //微信签名
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("getInstallState").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("getInstallState",{
					"packageUrl":"teamcircle://"
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("openProductView").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("openProductView",{
					"productInfo":"json"
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("getLatestAddress").addEventListener(
				"click",function(){
				WeixinJSBridge.invoke("getLatestAddress",{
					"appId" : "wxf8b4f85f3a794e77", //公众号名称，由商户传⼊入
					"timeStamp" : "189026618", //时间戳 这⾥里随意使⽤用了⼀一个值
					"nonceStr" : "adssdasssd13d", //随机串
					"signType" : "SHA1", //微信签名⽅方式:sha1
					"addrSign" : "b737015b5b1eabe5db580945a07eac08c7bb55f8", //微信签名
					"scope"    : "snsapi"
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("editAddress").addEventListener(
				"click",function(){
				WeixinJSBridge.invoke("editAddress",{
					"appId" : "wxf8b4f85f3a794e77", //公众号名称，由商户传⼊入
					"timeStamp" : "189026618", //时间戳 这⾥里随意使⽤用了⼀一个值
					"nonceStr" : "adssdasssd13d", //随机串
					"signType" : "SHA1", //微信签名⽅方式:sha1
					"addrSign" : "b737015b5b1eabe5db580945a07eac08c7bb55f8", //微信签名
					"scope"    : "snsapi"
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("launch3rdApp").addEventListener(
				"click",function(){
				WeixinJSBridge.invoke("launch3rdApp",{
					"appId" : "wx5823bf96d3bd56c7", //公众号名称，由商户传⼊入
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("jumpWCMall").addEventListener(
				"click",function(){
				WeixinJSBridge.invoke("jumpWCMall",{
					"appId" : "wx5823bf96d3bd56c7", //公众号名称，由商户传⼊入
					"funcId":"1000"
				},
				function(e){
					alert(e.err_msg)
				})
			},!1),
		document.getElementById("openUrlByExtBrowser").addEventListener(
			"click",function(){
			WeixinJSBridge.invoke("openUrlByExtBrowser",{
				"url" : "http://m.exmail.qq.com"
				},
				function(e){
					alert(e.err_msg)
				})
			},!1)
		}
	);
</script>
<script>
//document.getElementById("toggleMenuBtn").onclick;
document.getElementById("closeWindow").onclick;
</script>




</body>
</html>