<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card space-between w3-card-4">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <div class="mr-auto p-2">
                            <a class="title-header">Discussions</a>
                        </div>
                        <!-- <div class="p-2">Posts</div>
                        <div class="p-2">Replies</div>
                        <div class="p-2">Time</div> -->
                    </div>

                </div>

                <div class="card-body">
                    <div class="list-group-flush">
                        <?php 
                            if(isset($threads))
                                foreach($threads as $thread):
                        ?>
                        <a href="<?= base_url('post/view/'. $thread['id']) ?>" class="list-group-item list-group-item-action">
                            <span class="d-inline-block"><?= $thread['title'] ?></span>
                            <!-- <span class="d-inline-block float-right text-muted time-line">Post Replies Time</span> -->
                        </a>
                        <?php endforeach;
                            else {
                        ?>
                            <a class="list-group-item list-group-item-action">
                                <span class="d-inline-block"> No available thread.</span>
                            </a>
                        <?php } ?>
                    </div>

                </div>
                
                <div class="card-footer">
                    <a class="btn btn-primary btn-submit w-10 rounded-0 border border-top-0 border-bottom-0 border-right-0 float-right" href="<?= base_url('post/create/' . $project['id']) ?>"><span> <i class="fa fa-plus" aria-hidden="true"></i></span> Create New Thread</a>
                </div> 
            </div>
            
      
        </div>
    <!-- /.row -->

