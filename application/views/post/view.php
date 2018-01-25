<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card space-between">
                <h2 class="card-header">
                     <p class="d-inline-block message-header">Your Message</p>
                </h2>
                <div class="card-block title-wrapper">
                    <form action="" class="message">
                         <p style="font-size: 20px; font-weight: bold;">Title: </p>
                         <div class="form-group comment-form">
                            <input class="content1" id="comment-system" rows="1"></input>
                         </div>
                    </form>
                </div>
                <hr>
                <div class="page-wrapper">
                    <textarea class="content"></textarea>
                </div>
                <a class="btn btn-primary btn-reply float-right" href="#reply"><span> <i class="fa fa-plus" aria-hidden="true"></i></span> Post Forum</a>
               
            </div>
        </div>

        <script>
        $(document).ready(function() {
            $('.content').richText();
            $('.conent1').richText();
        
        });
        </script>
            
    </div>
    <!-- /.row -->

