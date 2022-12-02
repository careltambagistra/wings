<div class="card">
    <div class="body">
        <form id="sign_in" method="post" action="<?php echo site_url("login/proses"); ?>">
            <div class="msg"><b>LOGIN</b> </div>
            <div class="input-group">
                <div class="form-line">
                    <input type="text" class="form-control" name="user" placeholder="Username" required autofocus>
                </div>
            </div>
            <div class="input-group">
                <div class="form-line">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button id="btn-login" class="btn btn-block bg-blue waves-effect" type="submit">LOGIN</button>
                </div>
            </div>
        </form>
    </div>
</div>
