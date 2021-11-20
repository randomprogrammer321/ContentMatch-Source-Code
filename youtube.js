let token = "";

let time = "";

let log = document.cookie.length;

let prev = 596;

let newlikes = parseInt(document.evaluate('/html/body/ytd-app/div/ytd-page-manager/ytd-watch-flexy/div[5]/div[1]/div/div[8]/div[2]/ytd-video-primary-info-renderer/div/div/div[3]/div/ytd-menu-renderer/div/ytd-toggle-button-renderer[1]/a/yt-formatted-string', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.innerHTML);

function succ(){
    document.evaluate('/html/body/ytd-app/div/ytd-page-manager/ytd-watch-flexy/div[5]/div[1]/div/div[8]/div[2]/ytd-video-primary-info-renderer/div/h1/yt-formatted-string', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.innerHTML = 'YOU CAN CLOSE THIS WINDOW POINTS AWARDED';

}

function fail() {
    document.evaluate('/html/body/ytd-app/div/ytd-page-manager/ytd-watch-flexy/div[5]/div[1]/div/div[8]/div[2]/ytd-video-primary-info-renderer/div/h1/yt-formatted-string', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.innerHTML = 'YOU ARE MISSING A LIKE PLEASE LIKE AND YOUR POINTS WILL BE AWARDED';

}
function check() {
    let newlikes = parseInt(document.evaluate('/html/body/ytd-app/div/ytd-page-manager/ytd-watch-flexy/div[5]/div[1]/div/div[8]/div[2]/ytd-video-primary-info-renderer/div/div/div[3]/div/ytd-menu-renderer/div/ytd-toggle-button-renderer[1]/a/yt-formatted-string', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.innerHTML);

    if (newlikes > prev) {
       // 
        console.log("success");
        succ();
       // document.evaluate('/html/body/ytd-app/div/ytd-page-manager/ytd-watch-flexy/div[5]/div[1]/div/div[8]/div[2]/ytd-video-primary-info-renderer/div/h1/yt-formatted-string', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.innerHTML = 'YOU CAN CLOSE THIS WINDOW POINTS AWARDED';
    }
    else {
        //document.evaluate('/html/body/ytd-app/div/ytd-page-manager/ytd-watch-flexy/div[5]/div[1]/div/div[8]/div[2]/ytd-video-primary-info-renderer/div/h1/yt-formatted-string', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.innerHTML = 'PLEASE WATCH THIS VIDEO YOU HAVE X MINUTES LEFT AND LIKE';
        console.log("error")
        fail();
    }
}

setInterval(check,1000);