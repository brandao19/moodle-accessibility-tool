<div class="row">

    <div class="col-xs-6 col-md-2">

        <a class="myhome" href="<?php echo $CFG->wwwroot; ?>/?redirect=0">
            <div id="block" class="panel status panel-default">

                <div class="panel-heading">
                    <h1 class="panel-title text-center">
                        <?php echo get_string('home'); ?>
                    </h1>

                    <h1 class="text-center">
                        <i class="fa fa-3x fa-home"></i>
                    </h1>

                </div>

            </div>
        </a>
    </div>

    <div class="col-xs-6 col-md-2">

        <a class="my" href="<?php echo $CFG->wwwroot; ?>/course/index.php">
            <div id="block" class="panel status panel panel-default">

                <div class="panel-heading">
                    <h1 class="panel-title text-center">
                        <?php echo get_string('mycourses'); ?>
                    </h1>

                    <h1 class="text-center">
                        <i class="fa fa-3x fa-book"></i>
                    </h1>

                </div>

            </div>
        </a>
    </div>

    <div class="col-xs-6 col-md-2">

        <a class="myp" href="<?php echo $CFG->wwwroot; ?>/user/profile.php">
            <div id="block" class="panel status panel-default">

                <div class="panel-heading">
                    <h1 class="panel-title text-center">
                        <?php echo get_string('myprofile'); ?>
                    </h1>

                    <h1 class="text-center">
                        <i class="fa fa-3x fa-users"></i>
                    </h1>

                </div>

            </div>
        </a>

    </div>

     <div class="col-xs-6 col-md-2">

        <a class="myp" href="<?php echo $CFG->wwwroot; ?>/message/index.php">
            <div id="block" class="panel status panel-default">

                <div class="panel-heading">
                    <h1 class="panel-title text-center">
                        <?php echo get_string('message','message'); ?>
                    </h1>

                    <h1 class="text-center">
                        <i class="fa fa-3x fa-envelope"></i>
                    </h1>

                </div>

            </div>
        </a>

    </div>

    <div class="col-xs-6 col-md-2">

        <a class="cal" href="<?php echo $CFG->wwwroot; ?>/calendar/view.php?view=month">
            <div id="block" class="panel status panel-default">

                <div class="panel-heading">
                    <h1 class="panel-title text-center">
                        <?php echo get_string('calendar', 'calendar'); ?>
                    </h1>

                    <h1 class="text-center">
                        <i class="fa fa-3x fa-calendar"></i>
                    </h1>

                </div>

            </div>
        </a>

    </div>

    <div class="col-xs-6 col-md-2">

        <a class="cal" href="<?php echo $CFG->wwwroot; ?>/login/logout.php?sesskey=<?php echo $sesskey ?>">
            <div id="block" class="panel status panel-default">

                <div class="panel-heading">
                    <h1 class="panel-title text-center">
                        <?php echo get_string('logout'); ?>
                    </h1>

                    <h1 class="text-center">
                        <i class="fa fa-3x fa-power-off"></i>
                    </h1>

                </div>

            </div>
        </a>

    </div>

</div>
