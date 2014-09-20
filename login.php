<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
<div class="modal-header">
        <a data-dismiss="modal" class="close">×</a>
        <h3>LOGIN  - VIDEO INFO</h3>
     </div>
     <div class="modal-body">
     <form class="form-inline" action="logear.php" method="POST" id="form-login">
            <?php
              $_SESSION['login']=true;
            ?>
            <input id="nick" type="text" name="nick" class="input-large" placeholder="Nick">
            <input id="contrasena" type="password" name="contrasena" class="input-large" placeholder="Password">
            <br/><br/>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        </form>
       
    </div>
</div>
<!--  /Login form -->