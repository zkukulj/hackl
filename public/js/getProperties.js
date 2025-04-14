importScripts("do-post.js");
onmessage = function (event) {
    let data = { "location":event.data.location };
    let url  = "../../functions/getProperties.php";
    postData(url, data).then((resp) => {
        postMessage(resp);
    });
};