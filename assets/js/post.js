function onLike(e) {
    var $this = $(e.target);
    
    like($this.closest('.card').attr('data-id')).done(function(data) {
        if($this.hasClass('active')) {
            $this.removeClass('bg-success text-white active');
        } else {
            $this.addClass('bg-success text-white active');
        }
        $this.find('.like-count').html(data['like_count'] != 0 ? data['like_count'] : '');
        $this.siblings('.btn-react').find('.dislike-count').html(data['dislike_count'] != 0 ? data['dislike_count'] : '');
        $this.siblings('.btn-react').removeClass('bg-danger text-white active');
    });
}

function onDislike(e) {
    var $this = $(e.target);
    
    dislike($this.closest('.card').attr('data-id')).done(function(data) {
        if($this.hasClass('active')) {
            $this.removeClass('bg-danger text-white active');
        } else {
            $this.addClass('bg-danger text-white active');
        }
        $this.find('.dislike-count').html(data['dislike_count'] != 0 ? data['dislike_count'] : '');
        $this.siblings('.btn-react').find('.like-count').html(data['like_count'] != 0 ? data['like_count'] : '');
        $this.siblings('.btn-react').removeClass('bg-success text-white active');
    });
}