importScripts("do-post.js");
onmessage = function (event) {
    let data = { "location":event.data.location };
    let url  = "../../functions/getEvents.php";
    postData(url, data).then((resp) => {
        postMessage(resp);
    });
};