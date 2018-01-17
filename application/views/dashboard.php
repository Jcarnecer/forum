
<div class="container-fluid">

    <div class="row">

        <!-- Forum Entries Column -->
        <div class="col-md-8">
           <div class="card">
                   <!-- First Forum Post -->
                   <h2 class="card-header">
                       <div class="profile-header">
                           <a href=""> <span><i class="fa fa-user-circle" aria-hidden="true"></i></span></a>
                           <p class="d-inline-block"><?= $user->first_name . " " . $user->last_name ?><br>
                               <span class="text-muted"> time</span> <i class="fa fa-clock-o" aria-hidden="true"></i></p>
                           
                       </div>
                   </h2>
                   <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                   <div class="conatiner">
                       <p class="forum-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>                       
                   </div>
                   <div class="card-footer">
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                   </div>
            </div>
            <br>
            
            <div class="card">
                <!-- First Forum Post -->
                <h2 class="card-header">
                    <div class="profile-header">
                        <a href=""> <span><i class="fa fa-user-circle" aria-hidden="true"></i></span></a>
                        <p class="d-inline-block"><?= $user->first_name . " " . $user->last_name ?><br>
                            <span class="text-muted"> time</span> <i class="fa fa-clock-o" aria-hidden="true"></i></p>

                    </div>
                </h2>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <div class="conatiner">
                    <p class="forum-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>                       
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            
        </div>
        <br>
        
        <div class="col-md-4">
            <div class="card">
                <!-- First Forum Post -->
                <h2 class="card-header">
                    <div class="profile-header">
                        <span><i class="fa fa-user-circle post-avatar" aria-hidden="true"></i></span>
                        <p class="d-inline-block"><?= $user->first_name . " " . $user->last_name ?></p>
                    </div>
                </h2>
                <form method="post">
                    <div class="card-block text-center">
                        <h3 class="card-title">Write Something</h3>
                        <div class="post-message">
                            <textarea class="form-control" id="message" rows="25" placeholder="Message Text..."></textarea>
                        </div>                    

                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Submit</a>
                    </div>
                </form>
        </div>

    </div>
    <!-- /.row -->

    <hr>