<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The frontpage layout for the base theme.
 *
 * @package   theme_MAT
 * @copyright 2016 Lucas Brandao
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

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
