<?php

defined('MOODLE_INTERNAL') || die;
$plugin->maturity = MATURITY_STABLE; // this version's maturity level.
$plugin->release = 'mat 1.0.0';
$plugin->version   = 2015121000;
$plugin->requires  = 2014050800;
$plugin->component = 'theme_mat';
$plugin->dependencies = array(
    'theme_bootstrapbase'  => 2014050800,
    'theme_clean'  => 2014050800,
);
