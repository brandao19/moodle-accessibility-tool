<?php


$regionmainbox = 'span9';
$regionmain = 'span8 pull-right';
$sidepre = 'span4 desktop-first-column';
$sidepost = 'span3 pull-right';

global $USER;
$sesskey = $USER->sesskey;

// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmainbox = 'span9 pull-right';
    $regionmain = 'span8';
    $sidepre = 'span4 pull-right';
    $sidepost = 'span3 desktop-first-column';
}

echo $OUTPUT->doctype()
?>

<html <?php echo $OUTPUT->htmlattributes(); ?>>
    <head>
        <title><?php echo $OUTPUT->page_title(); ?></title>
        <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
        <?php echo $OUTPUT->standard_head_html() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body <?php echo $OUTPUT->body_attributes(); ?>>

        <?php echo $OUTPUT->standard_top_of_body_html() ?>
        <?php require_once(dirname(__FILE__) . '/includes/header.php'); ?>




        <div id="page" class="container-fluid">

          <?php echo $OUTPUT->full_header(); ?>
            <?php require_once(dirname(__FILE__) . '/includes/blocks.php'); ?>

            <div id="page-content" class="row-fluid">

                <div id="region-main-box" class="<?php echo $regionmainbox; ?>">

                    <div class="row-fluid">

                      <section id="region-main" class="<?php echo $regionmain; ?>">
                            <?php
                            echo $OUTPUT->course_content_header();
                            echo $OUTPUT->main_content();
                            echo $OUTPUT->course_content_footer();
                            ?>
                        </section>

                        <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>

                    </div>
                </div>
                <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
            </div>

            <?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>
            <?php echo $OUTPUT->standard_end_of_body_html() ?>

        </div>
    </body>
</thml>
