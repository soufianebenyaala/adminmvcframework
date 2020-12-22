<nav class="navbar navbar-default">
    <div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=URLROOT; ?>home/home"><i class="fa fa-bar-chart"></i> Flat Admin</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Emily
                        Hart <span class="caret"></span></a>
                    <ul class="dropdown-menu user-info">
                        <li>
                            <div class="navbar-login">
                                <h4 class="user-name"><?= $_SESSION['fullname'] ?></h4>
                                <p><?= $_SESSION['email'] ?></p>
                                <div class="btn-group margin-bottom-2x" role="group">
                                <?php if(isset($_SESSION['user_id'])){  ?>
                                <a href="<?php echo URLROOT; ?>users/logout"><button type="button"
                                        class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button></a>
                                <?php }  ?>
                            </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

