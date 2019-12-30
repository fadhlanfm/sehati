<style type="text/css">
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 105px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.col-centered{
    float: none;
    margin: 0 auto;
}
</style>

<div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-centered">
                <div class="account-wall">
                    <p style="text-align: center">
                    <img class="img" width="70" height="80" src="<?php echo site_url("assets/img/logo_undip.png"); ?>">
                    <img class="img" width="103" height="103" src="<?php echo site_url("assets/img/logo.png"); ?>">
                    <p>
                    <h4 style="text-align: center">Seleksi Online Olimpiade SEHATI 8<?php echo $this->session->userdata('id'); ?></h4>
                    <form class="form-signin" action="<?php echo site_url("login/loginprocess"); ?>" method="POST">
                    <?php
                        if($this->input->get('balasan')==1){
                            echo '<div style="padding: 1px" class="alert alert-danger"><small>email/password salah</small></div>';
                        }
                    ?>
                    <input type="email" class="form-control" placeholder="Email" required autofocus name="email">
                    <input type="password" class="form-control" placeholder="Password" required name="password">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></br>
                    <!-- <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label> -->
                    <button type="button" class="btn btn-xs" data-toggle="modal" data-target=".bd-example-modal-sm">Butuh bantuan?</button>
                    <span class="clearfix"></span>
                    </form>
                </div>
            </div>
        </div>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <ol>
      Hubungi:
      <li>Khairunnisa Yurita R 081394611264 (line: kyurita98)</li>
      <li>Ilma Chaerunnisa 085697619968 (line: ilmaaa12)</li>
    </ol></div>
  </div>
</div>