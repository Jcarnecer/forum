<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card space-between">
                <h2 class="card-header">
                    <div class="profile-header">
                        <p class="d-inline-block"><?= $user->first_name . " " . $user->last_name ?><br>
                            <span class="text-muted"> 01:00 01/01/1970</span> <i class="fa fa-clock-o" aria-hidden="true"></i></p>

                    </div>
                </h2>
                <div class="conatiner">
                    <div class="row">
                        <div class="col-md-4 left-avatar">
                            <span><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-md-8 right-content">
                            <p class="forum-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary btn-reply float-right" href="#reply">Reply <span> <i class="fa fa-reply" aria-hidden="true"></i></span></a>
                </div>
            </div>     

            <div class="card space-between">
                <h2 class="card-header">
                    <div class="profile-header">
                        <p class="d-inline-block"><?= $user->first_name . " " . $user->last_name ?><br>
                            <span class="text-muted"> 01:00 01/01/1970</span> <i class="fa fa-clock-o" aria-hidden="true"></i></p>

                    </div>
                </h2>
                <div class="conatiner">
                    <div class="row">
                        <div class="col-md-4 left-avatar">
                            <span><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-md-8 right-content">
                            <p class="forum-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary btn-reply float-right" href="#reply">Reply <span> <i class="fa fa-reply" aria-hidden="true"></i></span></a>
                </div>
            </div>   


            <!-- Comments Form -->
            <div class="card space-between" id="reply">
                <h2 class="card-header">
                    <div class="leave-reply">
                        <p class="d-inline-block">Leave a Reply</p>
                        <a class="float-right" data-toggle="collapse" href="#leaveReply" role="button" aria-expanded="true" aria-controls="collapseExample">
                            <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </h2>
                <div class="collapse show" id="leaveReply">
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

    </div>
    <!-- /.row -->

