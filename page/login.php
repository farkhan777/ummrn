<div class="container " style="padding-bottom:40px" ;>
    <div class="py-4  pb-xl-5 mb-xl-5">
        <div class="pb-xl-5 mb-xl-5">
            <div class="mb-5 pb-5">
                <div class="col-12">
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div class=" col-6">
                            <div class=" py-5 my-5">

                                <div class="text-center">
                                    <h2>Login Here!</h2>
                                    <hr />
                                </div>
                                <div>
                                    <div class="text-container">
                                        <form name="logForm" method="POST" action="login.php">
                                            <div class="py-4">
                                                <div class="form-group">
                                                    <input type="text" name="usr" class="form-control-input" value=""
                                                        id="cname" required>
                                                    <label class="label-control" for="cname">Username:</label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="psw" class="form-control-input"
                                                        value="" id="cemail" required>
                                                    <label class="label-control" for="cemail">Password:</label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="submit" value="LOGIN"
                                                    class="form-control-submit-button" style="float:left; width:50%;" />
                                                <span class="mx-5"> <a href="index.php?page=register"> Click here
                                                        to
                                                        register!</a></span>
                                            </div>
                                        </form>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                                <?php
            if($_GET['stat']=="false"){
                echo" <font color=red> <b>Access denied.</b></font>";
            }else{}
        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end of row -->
</div> <!-- end of container -->