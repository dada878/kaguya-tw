
//載入組件
$("#anvbar").load("component/anvbar.html")
$("#footer").load("component/footer.html")

//判斷裝置是否為行動裝置
function detectmob() { 
if( navigator.userAgent.match(/Android/i)
|| navigator.userAgent.match(/webOS/i)
|| navigator.userAgent.match(/iPhone/i)
|| navigator.userAgent.match(/iPad/i)
|| navigator.userAgent.match(/iPod/i)
|| navigator.userAgent.match(/BlackBerry/i)
|| navigator.userAgent.match(/Windows Phone/i)
){
    return true;
    }
else {
    return false;
    }
}