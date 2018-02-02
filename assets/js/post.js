function onLike(e) {
    like($(e.target).closest('.card').attr('data-id'));
}

function onDislike(e) {
    dislike($(e.target).closest('.card').attr('data-id'));
}