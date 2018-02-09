<div class="row">
    <div class="col-md-12">
        <div class="card border-0 m-3">
            <div class="card-header forum-header">
                <h3 class="d-inline">Discussions</h3>
                <a class="btn custom-button float-right" href="<?= base_url('post/create/' . $project['id']) ?>"><span> <i class="fa fa-plus" aria-hidden="true"></i></span> Create New Thread</a>
                <!-- <div class="p-2">Posts</div>
                <div class="p-2">Replies</div>
                <div class="p-2">Time</div> -->
            </div>

            <div class="card-body">
                <div class="list-group-flush forum-threads">
                    <?php 
                        if(isset($threads))
                            foreach($threads as $thread):
                    ?>
                    <a href="<?= base_url('post/view/'. $thread['id']) ?>" class="list-group-item list-group-item-action">
                        <?= $thread['title'] ?>
                        <!-- <span class="d-inline-block float-right text-muted time-line">Post Replies Time</span> -->
                    </a>
                    <?php endforeach;
                        else {
                    ?>
                        <a class="list-group-item list-group-item-action">
                            No available thread.
                        </a>
                    <?php } ?>
                </div>

            </div>
        </div>      
    </div>
</div>                            
