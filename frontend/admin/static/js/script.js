document.addEventListener("DOMContentLoaded", ()=> {
    let form = document.getElementById("form_send_video");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        send_file(this);
    })
})

function send_file(form) {
    console.log(form);
    let status = form.children[1].children[0],
    span = status.children[0],
    btn_cancel = form.children[2].children[1];

    status.classList.remove("red_bar", "green_bar");

    let req = new XMLHttpRequest();

    req.upload.addEventListener("progress", (event) => {
        let percentage = Math.round((event.loaded / event.total) * 100);
        
        status.style.width = percentage+'%';
        span.innerHTML = percentage+'%';
    })

    req.addEventListener("load", () => {
        status.classList.add('green_bar');
        span.innerHTML = "Video uploaded";
    });

    req.open("post", 'upload_video.php');
    req.send(new FormData(form));
    console.log(req);

    btn_cancel.addEventListener("click", ()=> {
        req.abort();
        status.classList.remove('green_bar');
        status.classList.add('red_class');
        span.innerHTML = "Upload canceled!";
    })
}