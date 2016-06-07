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

        <div class="conteiner-fluid">
        <?php echo $OUTPUT->full_header(); ?>

          <?php require_once(dirname(__FILE__) . '/includes/header.php'); ?>

            <div class="row-fluid">
                <section id="region-main" class="span12 moodleheader">

                    <div class="loginwrapper">

                        <?php
                        echo $OUTPUT->course_content_header();
                        echo $OUTPUT->main_content();
                        echo $OUTPUT->course_content_footer();
                        ?>

                    </div>

                </section>
            </div>

        </div>

        <?php require_once(dirname(__FILE__) . '/includes/footer.php'); ?>
      <?php echo $OUTPUT->standard_end_of_body_html() ?>

    </body>

</thml>
