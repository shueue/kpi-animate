<?php
/**
 * ${DESCRIPTION}
 *
 * @package     WordPress
 * @subpackage  hpu
 * @since       hpu 1.0
 */

/**
 * Render kpi.
 *
 * @param int $post_id current page id.
 *
 * @return string
 */
function kpi( $post_id = 0 ) {
    $output = '';
    ob_start();
    $module_description    = get_sub_field( 'module_description' );
    $kpi_symbol_before     = get_sub_field( 'kpi_symbol_before' );
    $kpi_number            = get_sub_field( 'kpi_number' );
    $kpi_separator         = get_sub_field( 'kpi_separator' );
    $kpi_number_additional = get_sub_field( 'kpi_number_additional' );
    $kpi_symbol_after      = get_sub_field( 'kpi_symbol_after' );
    $kpi_title             = get_sub_field( 'kpi_title' );
    $kpi_description       = get_sub_field( 'kpi_description' );
    $background_image      = get_sub_field( 'background_image' ); 
    $background_class      = ( empty( $background_image ) ) ? ' background' : '';
    ?>

    <div class="kpi js-kpis">
        <div class="kpi__content">
            <?php 
            if ( ! empty( $module_description ) ) {
                echo '<div class="kpi__main" tabindex="0">' . $module_description . '</div>';
            }
            ?>
            <div class="kpi__additional">
                <?php if ( ! empty( $kpi_number ) ) : 
                    echo '<div class="kpi__number js-kpi-group" tabindex="0">';
                        
                        if ( ! empty( $kpi_symbol_before ) ) {
                            echo '<span class="kpi__symbol--before">' . esc_html( $kpi_symbol_before ) . '</span>';
                        }

                        echo '<span class="number js-kpi-number" aria-live="off" data-number="' . esc_html( $kpi_number ) . '">' . esc_html( $kpi_number ) . '</span>';

                        if ( ! empty( $kpi_separator ) ) {
                            echo '<span class="kpi__symbol--separator">' . esc_html( $kpi_separator ) . '</span>';
                        }
                        if ( ! empty( $kpi_number_additional ) ) {
                            $kpi_number_additional_string = (string) $kpi_number_additional;
                            echo '<span class="number js-kpi-number" aria-live="off" data-number="' . esc_html( $kpi_number_additional_string ) . '">' . esc_html( $kpi_number_additional_string ) . '</span>';
                        }
                        if ( ! empty( $kpi_symbol_after ) ) {
                            echo '<span class="kpi__symbol">' . esc_html( $kpi_symbol_after ) . '</span>';
                        }

                    echo '</div>';
                endif; ?>

                <div class="kpi__right">
                    <div class="kpi__info">
                        <?php
                        if ( ! empty( $kpi_title ) ) {
                            echo '<div class="kpi__title">' . esc_html( $kpi_title ) . '</div>';
                        }
                        if ( ! empty( $kpi_description ) ) {
                            echo '<div class="kpi__description">' . esc_html( $kpi_description ) . '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $background_style = '';
        if ( ! empty( $background_image ) ) {
            $background_image_attr = wp_get_attachment_image_src( $background_image, 'kpi_background_image' );
            $background_style = $background_image_attr[0];
        }
        ?>

        <div class="kpi__background">
            <div class="image-holder<?php echo $background_class; ?>">

                <?php 
                if ( ! empty( $background_style ) ) {
                    echo '<img class="simple-parallax" src="' . $background_style . '" alt="background">';
                    echo '<i data-parallax-shadow></i>';
                }
                ?>

            </div>
        </div>

    </div>

    <?php
    $output .= ob_get_contents();
    ob_end_clean();
    wp_reset_postdata();
    return $output;
}