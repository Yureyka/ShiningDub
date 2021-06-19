const sendButton = document.getElementById('send-comment');
const fullname = document.querySelector('input[name = "fullname"]');
const comment = document.querySelector('textarea[name = "comment"]');

document.getElementsByClassName('comment-form')[0].addEventListener('submit', (e) => {
    e.preventDefault();
    send();
});

function send() {
    sendButton.setAttribute('disabled', true)
    const token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    const request = new Request("/comment", {
        method: "POST",
        body: JSON.stringify({
            video_id: document.querySelector('input[name = "video_id"]').value,
            fullname: fullname.value,
            comment: comment.value
        }),
        headers: new Headers({
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": token
        })
    });

    fetch(request)
        .then(response => response.json())
        .then(data => {
            sendButton.removeAttribute('disabled');
            const container = document.querySelector(
                '#comment-container'
            );
            container.insertAdjacentHTML(
                "afterBegin",
                `<div class="comment">
                    <img class='comment-avatar' src=${window.location.origin + '/img/kwami/' + Math.ceil(Math.random() * 19) + '.jpg'} alt="">
                    <div class="comment-desc">
                        <div class="comment-stamp">
                            <h6>${data.fullname}</h6>
                            <p>${data.created_at.slice(0, -3)}</p>
                        </div>
                        <p>${data.comment}</p>
                    </div>
                </div>`
            );
            fullname.value = "";
            comment.value = "";
        });
}