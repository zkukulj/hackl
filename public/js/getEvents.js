importScripts("do-post.js");
onmessage = function (event) {
    let data = { "location":event.data.location };
    let url  = "https://flashchat.eu/hackl/functions/getEventlist.php";
    postData(url, data).then((resp) => {
        postMessage(resp);
    });
};