<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="signupmodalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupmodalLabel">Sign up to iDiscuss</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/New folder/partial/_handlesignup.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control" id="signupname" name="signupname"
                            aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="signupemail" name="signupemail"
                            aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="Number">Mobile No.</label>
                        <input type="Number" class="form-control" id="signupMobile" name="signupMobile"
                            placeholder="Mobile No.">
                    </div>
                    <div class="form-group">
                        <label for="Password1">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="Password2">Confirm Password</label>
                        <input type="password" class="form-control" id="ConfirmPassword" name="confirmPassword"
                            placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
            </form>
        </div>
    </div>
</div>