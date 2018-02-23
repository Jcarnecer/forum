<div class="row">
    <div class="col-md-12">
        <!-- <div class="background-forum"> -->
            <div class="card border-0 m-3">
                <div class="card-header forum-header">
                    <h3 class="mb-0"><?= $thread['title'] ?></h3>
                    <small class="text-muted"><?= $thread['created_at'] ?></small>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <img src="<?= $thread['avatar_url'] ?>" class="img-thumbnail d-block w-50 mt-3 mx-auto" aria-hidden="true">
                            <?= $thread['author'] ?>
                        </div>
                        <div class="col-md-10 right-content border border-top-0 border-bottom-0 border-right-0">
                                <div class="forum-content">
                                    <?= $thread['body'] ?>
                                </div>
                        </div>
                    </div>                    
                </div>
                <!-- <div class="card-footer footer-reply">
                    <div class="d-flex justify-content-end w-100 p-0 m-0">
                        <a href="#" class="btn btn-like w-10 rounded-0 border border-top-0 border-bottom-0 border-left-0"> 0 <i class="far fa-thumbs-up"></i> Like</a>
                        <a href="#" class="btn btn-primary btn-reply w-10 rounded-0"> 0 <i class="far fa-thumbs-down"></i> Dislike</a>
                        <a class="btn btn-primary btn-reply w-10 rounded-0 border border-top-0 border-bottom-0 border-right-1" href="<?= base_url(uri_string()) ?>#reply"><span> <i class="fa fa-reply" aria-hidden="true"></i> Reply</span></a>
                    </div>
                </div> -->
            </div> 
            <!-- <hr> -->
            <h5 class="forum-header p-3 m-3">Comments</h5>
            <?php 
                if(isset($thread['reply']))
                foreach ($thread['reply'] as $comment):
            ?>
                <div class="card border-0 m-3" data-id="<?= $comment['id'] ?>">
                    <!-- <div class="card-header forum-comment-header">
                    </div> -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <img src="<?= $comment['author_avatar'] ?>" class="img-thumbnail d-block w-50 mt-3 mx-auto" aria-hidden="true">
                                <?= $comment['author'] ?>
                            </div>
                            <div class="col-md-10 border border-top-0 border-bottom-0 border-right-0">
                                <div class="forum-content">
                                    <?= $comment['body'] ?>
                                    <small class="text-muted d-block"><?= $comment['created_at'] ?></small>
                                </div>
                            </div>
                        </div>                    
                    </div>
                    <div class="card-footer forum-comment-footer">
                        <div class="btn-group float-right" role="group" >
                            <button class="btn btn-react btn-like w-10 <?= $comment['react'] == 1 ? 'bg-success text-white active' : '' ?>" onclick="onLike(event)">
                                <span class="like-count"><?= $comment['likes'] == 0 ? '' : $comment['likes'] ?></span>
                                <i class="fa fa-thumbs-up mx-2"></i>Like
                            </button>
                            <button class="btn btn-react btn-reply w-10 <?= $comment['react'] == 2 ? 'bg-danger text-white active' : '' ?>" onclick="onDislike(event)">
                                <span class="dislike-count"><?= $comment['dislikes'] == 0 ? '' : $comment['dislikes'] ?></span>
                                <i class="fa fa-thumbs-down mx-2"></i>Dislike
                            </button>
                            <a class="btn btn-reply w-10" href="<?= base_url(uri_string()) ?>#reply"><span> <i class="fa fa-reply" aria-hidden="true"></i> Reply</span></a>
                        </div>
                    </div>
                </div> 
            <?php endforeach; ?>

            <!-- Comments Form -->
            <div class="card border-0 mt-5" id="reply">
                <div class="card-header forum-comment-header border-0 pb-0">
                    <h5>Leave a Reply</h5>
                </div>
                <div class="card-body">
                    <form action="post/reply/<?=$thread['id']?>" method="POST" role="form" class="message">
                        <textarea name="body" class="form-control" id="reply-system" rows="10" placeholder="Message..."></textarea>
                        <button type="submit" value="Post Reply" class="btn btn-reply w-10 float-right" style="margin: 10px;"><span> <i class="far fa-paper-plane" aria-hidden="true"></i></span> Reply</button>
                    </form>
                </div>
                
            </div>
        <!-- </div> -->
    </div>

</div>

