<div class="container">
    <div class="row">
        <div class="col-md-12">
<<<<<<< HEAD
            <div class="card space-between">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <div class="mr-auto p-2">
                            <a href="" class="title-header">Title Forum</a>
                        </div>
                        <div class="p-2">Posts</div>
                        <div class="p-2">Replies</div>
                        <div class="p-2">Time</div>
                    </div>

                </div>

                <div class="card-body">
                    <div class="list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            <span class="d-inline-block">Forum Mo to</span>
                            <span class="d-inline-block float-right text-muted time-line">Post Replies Time</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <span class="d-inline-block">Forum Mo to</span>
                            <span class="d-inline-block float-right text-muted">Post Replies Time</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <span class="d-inline-block">Forum Mo to</span>
                            <span class="d-inline-block float-right text-muted">Post Replies Time</span>
                        </a>
                    </div>

                </div>
                
                <div class="card-footer">
                    <a href="">More about this Forum <span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </span> </a>
                </div>    
            </div>
            
            <!-- Post Form -->
            <div class="card space-between" id="reply">
                <h2 class="card-header">
                    <div class="leave-reply">
                        <p class="d-inline-block">Post a Message</p>
                        <a class="float-right" data-toggle="collapse" href="#leaveReply" role="button" aria-expanded="true" aria-controls="collapseExample">
                            <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </h2>
                <div class="collapse" id="leaveReply">
                    <div class="card-block">
                        <form role="form" class="message">
                            <p>Message</p>
                            <div class="form-group comment-form">
                                <textarea class="form-control" id="comment-system" rows="3"></textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
=======
          <?php foreach($posts as $post): ?>
           <div class="card">
                   <!-- First Forum Post -->
                   <h2 class="card-header">
                       <div class="profile-header">
                           <a href=""> <span><i class="fa fa-user-circle" aria-hidden="true"></i></span></a>
                           <p class="d-inline-block"> <?=$post['author'] ?><br>
                               <span class="text-muted"> time</span> <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                           
                       </div>
                   </h2>
                   <img class="img-responsive" src="http://placehold.it/900x300" alt="<?=$post['title']?>">
                   <div class="conatiner">
                       <p class="forum-content"><?=$post['body']?></p>                       
                   </div>
                   <div class="card-footer">
                        <a class="btn btn-primary" href="<?=base_url('post/view/' . $post['id'])?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                   </div>
            </div>
            <br>
            <?php endforeach; ?>
    </div>
>>>>>>> 9ce61198a59a876b736d7c84a665a7de33209ca6
    <!-- /.row -->

