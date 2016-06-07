<?php

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

            
            <?php require_once(dirname(__FILE__) . '/includes/blocks.php'); ?>

            <div id="page-content" class="row-fluid">

                  <div id="breadcrumb-container" class="clearfix">
                        <nav class="breadcrumb-nav">
                            <?php echo $OUTPUT->navbar(); ?>
                        </nav> 
                    </div>
            
                <section id="region-main" class="span12">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
            </div>

            <?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>
            <?php echo $OUTPUT->standard_end_of_body_html() ?>
            
        </div>
    </body>
</thml>
