
<div class="container">
    <div class="row">
        <!-- Forum Entries Column -->
        <div class="col-md-12">
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
    <!-- /.row -->

    <hr>