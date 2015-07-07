<?php 
$username = isset($_COOKIE['username'])?$_COOKIE['username']:'';
$password = isset($_COOKIE['password'])?$_COOKIE['password']:'';
$isRemember = isset($_COOKIE['remember'])? 'checked':'';
//echo '<pre>';
//print_r($_COOKIE);
$html = '<div class="modal-dialog">
            <div class="modal-content">        
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Login</h4>
                </div>

                <div class="alert alert-danger" role="alert" style="display:none">
                <strong>Error!</strong> <span id="errorText"></span>
                </div>

                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="control-label">Username/Email:</label>
                      <input type="text" class="form-control" placeholder="Username or Email" name="txtEmail1" id="txtEmail1" value="'.$username.'"/>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="control-label">Password:</label>
                      <input type="password" class="form-control" placeholder="Password" name="txtPassword" id="txtPassword" value="'.$password.'"/>
                    </div>
                    <div class="form-group">
                      <label><input type="checkbox" value="1" '.$isRemember.' name="chkRemember" id="chkRemember"> Remember Me</label>
                    </div> 
                    <div class="form-group">
                        <a href="login/reset.php">Forgot Password?</a>
                    </div> 
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                  <button type="button" class="btn btn-primary" name="btnLogin2" id="btnLogin2">Login</button>
                </div>
            </div>
        </div>' ;

echo $html;
die;
?>