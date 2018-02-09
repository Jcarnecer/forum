<div class="row">
    <div class="col-md-12">
        <div class="card border-0 m-3">
            <div class="card-header forum-header">
                <h3 class="d-inline">New Thread </h3>
            </div>
            <div class="card-body">
                <form action="post/create/<?=$project_id?>" method="POST" class="message">
                    <input type="text" name="title" placeholder="Title" class="form-control" id="create-title"></input>                
                    <textarea name="body" class="form-control mt-3" placeholder="Your Message" row="10" id="create-post"></textarea>
                    <button type="submit" value="Submit" class="btn custom-button mt-3 float-right"> <span><i class="fas fa-plus"></i></span> Submit</button>
            </form> 
            </div>             
        </div>
    </div>   
</div>

