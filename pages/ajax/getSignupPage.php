<?php 
$html = '<div class="modal-dialog">
            <div class="modal-content">        
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Sign Up</h4>
              </div>

              <div class="alert alert-danger" role="alert" style="display:none">
              <strong>Error!</strong> <span id="errorText"></span>
              </div>

              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Username:</label>
                    <input type="text" class="form-control" name="txtName" id="txtName"/>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Email:</label>
                    <input type="text" class="form-control" name="txtEmail2" id="txtEmail2"/>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="control-label">Password:</label>
                    <input type="password" class="form-control" name="txtPasswordN" id="txtPasswordN"/>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Confirm Password:</label>
                    <input type="password" class="form-control" name="txtConfPassword" id="txtConfPassword"/>
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="control-label">Mobile:</label>
                    <input type="text" class="form-control" name="txtMobile" id="txtMobile" maxlength="10"/>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                <button type="button" class="btn btn-primary" name="btnSignup2" id="btnSignup2">Sign Up</button>
              </div>
            </div>
        </div>' ;

echo $html;
die;
