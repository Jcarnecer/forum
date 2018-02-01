<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card space-between w3-card-4">
                <div class="card-header">
                     <span class="d-inline-block message-header">New Thread </span>
                </div>
                <div class="card-block title-wrapper">
                    <form action="post/create/<?=$project_id?>" method="POST" class="message">
                         <div class="form-group comment-form">
                            <input type="text" name="title" placeholder="Title" class="form-control" id="create-title"></input>
                         </div>
                    </div>
                    <hr>
                    <div class="create-wrapper">
                        <textarea name="body" class="form-control" placeholder="Your Message" row="10" id="create-post"></textarea>
                        <button type="submit" value="Submit" class="btn btn-primary w-25 rounded-0 border border-top-0 border-bottom-0 border-right-0 btn-submit float-right" style="margin: 10px;">Submit <span><i class="far fa-plus-square"></i></span></button>
                    </div>
                </form>              
            </div>
        </div>

       
            
    </div>
    <!-- /.row -->

