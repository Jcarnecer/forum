<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card space-between">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <div class="mr-auto p-2">
                            <a href="" class="title-header"><?= $project ?></a>
                        </div>
                        <div class="p-2">Posts</div>
                        <div class="p-2">Replies</div>
                        <div class="p-2">Time</div>
                    </div>

                </div>

                <div class="card-body">
                    <div class="list-group-flush">
                        <?php foreach($threads as $thread): ?>
                        <a href="<?= base_url('post/view/'. $thread['id']) ?>" class="list-group-item list-group-item-action">
                            <span class="d-inline-block"><?= $thread['title'] ?></span>
                            <span class="d-inline-block float-right text-muted time-line">Post Replies Time</span>
                        </a>
                        <?php endforeach; ?>
                    </div>

                </div>
                
                <div class="card-footer">
                    <a href="">More about this Forum <span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </span> </a>   
                </div> 
                <a class="btn btn-primary float-right" href="<?= base_url('post/create') ?>"><span> <i class="fa fa-plus" aria-hidden="true"></i></span> Create New Thread</a>
            </div>
            
      
        </div>
    <!-- /.row -->

