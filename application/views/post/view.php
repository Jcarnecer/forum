<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card space-between w3-card-4">
                <div class="card-header">
                    <div class="profile-header">
                        <p class="d-inline-block"><?= $thread['author'] ?></p><br>
                            <p class="text-muted"><?= $thread['created_at'] ?> <i class="fa fa-clock-o" aria-hidden="true"></i></p>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <span><img src="<?= $thread['avatar_url'] ?>" class="img-thumbnail w-50 mt-3" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-md-10 right-content border border-top-0 border-bottom-0 border-right-0">
                            <h1><?= $thread['title'] ?></h1>
                            <div class="container">
                                <p class="forum-content">
                                    <?= $thread['body'] ?>
                                </p>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary btn-reply float-right" href="#reply">Reply <span> <i class="fa fa-reply" aria-hidden="true"></i></span></a>
                </div>
            </div> 

            <?php foreach ($thread['comment'] as $comment): ?>
            <div class="card space-between w3-card-4">
                <div class="card-header">
                    <div class="profile-header">
                    <p class="d-inline-block"><?= $thread['author'] ?></p><br>
                            <p class="text-muted"><?= $comment['created_at'] ?> <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <span><img src="<?= $thread['avatar_url'] ?>" class="img-thumbnail w-50 mt-3" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-md-10 right-content border border-top-0 border-bottom-0 border-right-0">
                            <p class="forum-content">
                                <?= $comment['body'] ?>
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary btn-reply float-right" href="#reply">Reply <span> <i class="fa fa-reply" aria-hidden="true"></i></span></a>
                </div>
            </div> 
            <?php endforeach; ?>
            


            <!-- Comments Form -->
            <div class="card space-between w3-card-4" id="reply">
                <div class="card-header">
                    <div class="leave-reply">
                        <p class="d-inline-block">Leave a Reply</p>
                    </div>
                </div>
                <div class="card-block page-wrapper">
                        <form action="post/reply/<?=$thread['id']?>" method="POST" role="form" class="message">
                            <textarea name="body" class="form-control" id="reply-system" rows="3"></textarea>
                            <button type="submit" value="Post Reply" class="btn btn-primary btn-reply float-right" style="margin-top: 10px;"><span> <i class="fa fa-paper-plane" aria-hidden="true"></i></span> Post Reply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

