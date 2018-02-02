function like(replyId) 
{
    return $.ajax(
    {
        type: 'POST',
        url: `${baseUrl}api/post/react`,
        data: {
            reply_id: replyId,
            like: '1'
        },
        dataType: 'json'
    });
}

function dislike(replyId) 
{
    return $.ajax(
    {
        type: 'POST',
        url: `${baseUrl}api/post/react`,
        data: {
            reply_id: replyId,
            like: '2'
        },
        dataType: 'json'
    });
}