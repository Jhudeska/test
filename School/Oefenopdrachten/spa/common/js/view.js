
/* include this script before body, so buttons work even when php is aborted */
function view(item) {
    var post = document.getElementById("post");
    post.view.value = item;
    post.submit();
}
function reset() {
    location.href = 'reset.php';
}
