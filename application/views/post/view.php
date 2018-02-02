<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="background-forum">
                <div class="card space-between card-details">
                    <div class="card-header">
                        <div class="profile-header">
                            <span class="d-inline-block font-weight-bold"><?= $thread['author'] ?></span>
                                <span class="text-muted"><?= $thread['created_at'] ?> <i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <span><img src="<?= $thread['avatar_url'] ?>" class="img-thumbnail w-50 mt-3" aria-hidden="true"></i></span>
                            </div>
                            <div class="col-md-10 right-content border border-top-0 border-bottom-0 border-right-0">
                                <div class="font-weight-bold forum-title "><?= $thread['title'] ?></div>
                                    <div class="container">
                                        <div class="forum-content">
                                            <?= $thread['body'] ?>
                                        </div>
                                    </div>
                            </div>
                        </div>                    
                    </div>
                    <!-- <div class="card-footer footer-reply">
                        <div class="d-flex justify-content-end w-100 p-0 m-0">
                            <a href="#" class="btn btn-like w-10 rounded-0 border border-top-0 border-bottom-0 border-left-0"> 0 <i class="far fa-thumbs-up"></i> Like</a>
                            <a href="#" class="btn btn-primary btn-reply w-10 rounded-0"> 0 <i class="far fa-thumbs-down"></i> Dislike</a>
                            <a class="btn btn-primary btn-reply w-10 rounded-0 border border-top-0 border-bottom-0 border-right-1" href="#reply"><span> <i class="fa fa-reply" aria-hidden="true"></i> Reply</span></a>
                        </div>
                    </div> -->
                </div> 

                <?php 
                    if(isset($thread['reply']))
                    foreach ($thread['reply'] as $comment):
                ?>
                    <div class="card space-between" data-id="<?= $comment['id'] ?>">
                        <div class="card-header">
                            <div class="forum-comments">
                            <span class="d-inline-block font-weight-bold"><?= $comment['author'] ?></span>
                                <span class="text-muted"><?= $comment['created_at'] ?> <i class="fa fa-clock-o" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 text-center">
                                    <span><img src="<?= $thread['avatar_url'] ?>" class="img-thumbnail w-50 mt-3" aria-hidden="true"></i></span>
                                </div>
                                <div class="col-md-10 right-content border border-top-0 border-bottom-0 border-right-0">
                                    <div class="forum-content">
                                        <?= $comment['body'] ?>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                        <div class="card-footer footer-reply">
                            <div class="d-flex justify-content-end w-100 p-0 m-0">
                                <button class="btn btn-like w-10 rounded-0 border border-top-0 border-bottom-0 border-left-0" onclick="onLike(event)"><?= $comment['likes'] == 0 ? '' : $comment['likes'] ?><i class="far fa-thumbs-up mx-2"></i>Like</button>
                                <button class="btn btn-primary btn-reply w-10 rounded-0 " onclick="onDislike(event)"><?= $comment['dislikes'] == 0 ? '' : $comment['dislikes'] ?><i class="far fa-thumbs-down mx-2"></i>Dislike</button>
                                <a class="btn btn-primary btn-reply w-10 rounded-0 border border-top-0 border-bottom-0 border-right-1" href="#reply"><span> <i class="fa fa-reply" aria-hidden="true"></i> Reply</span></a>
                            </div>
                        </div>
                    </div> 
                <?php endforeach; ?>
                


                <!-- Comments Form -->
                <div class="card space-between" id="reply">
                    <div class="card-header">
                        <div class="leave-reply font-weight-bold">
                            <span class="d-inline-block">Leave a Reply</span>
                        </div>
                    </div>
                    <div class="card-block reply-wrapper">
                            <form action="post/reply/<?=$thread['id']?>" method="POST" role="form" class="message">
                                <textarea name="body" class="form-control" id="reply-system" rows="10" placeholder="Message..."></textarea>
                                <button type="submit" value="Post Reply" class="btn btn-primary btn-reply w-10 rounded-0 border border-top-0 border-bottom-0 border-right-0 float-right" style="margin: 10px;"><span> <i class="far fa-paper-plane" aria-hidden="true"></i></span> Post Reply</button>
                            </form>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

