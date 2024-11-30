<?php
/**
 * ${DESCRIPTION}
 *
 * @package     WordPress
 * @subpackage  hpu
 * @since       hpu 1.0
 */

/**
 * Render kpis.
 *
 * @param int $post_id current page id.
 *
 * @return string
 */
function kpis( $post_id = 0 ) {
    $output = '';
    ob_start();

    $quote_text        = get_sub_field( 'quotes' );
    $list              = get_sub_field( 'list' );
    $show_symbol_value = get_sub_field( 'show-symbol' );
    $symbol            = '';
    $classes           = get_sub_field( 'md_bg' );
    $background        = get_sub_field( 'background' );
    $anchor_tag        = ' ' . FlexibleModuleView::get_anchor( get_sub_field( 'anchor_title' ) );

    if ( is_array( $show_symbol_value ) && ! empty( $show_symbol_value ) ) {
        $symbol = 'show' === $show_symbol_value[0] ? ' kpis__quote_symbol' : '';
    }
    if( !empty( $background ) ){
        $background = ' style="background-image:url(' . $background . ');"';
    }
    else{
        $background = '';
    }
    ?>

    <div class="kpis-module <?php echo $classes; ?>"<?php echo $anchor_tag . $background; ?>>
        <div class="page-frame">
            <?php if ( ! empty( $quote_text ) ) : ?>
                <div class="swiper-container quote-slider" data-count="2">
                    <div class="swiper-wrapper">
                        <?php foreach( $quote_text as $q_text ): ?>
                            <div class="swiper-slide">
                                <div class="kpis__quote<?php echo $symbol ?>">
                                    <blockquote><?php echo $q_text['quote_text']; ?></blockquote>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-navigation custom-nav">
                        <div class="swiper-button-prev js-qs-btn-prev">
                            <svg width="14" height="14" fill="#fff">
                                <use xlink:href="#icon_arrow_purple"></use>
                            </svg>
                        </div>
                        <div class="swiper-pagination js-qs-pagination"></div>
                        <div class="swiper-button-next js-qs-btn-next">
                            <svg width="14" height="14" fill="#fff">
                                <use xlink:href="#icon_arrow_purple"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            <?php endif; ?>


            <?php if( ! empty( $list ) && is_array( $list ) ): ?>
                <div class="kpis js-kpis">

                    <?php 
                    foreach ( $list as $item ) {
                        if ( isset( $item['number1'] ) ) {
                            ?>

                            <div class="kpis__item">
                                <div class="kpis__top js-kpi-group" tabindex="0">

                                    <?php
                                    if ( ( ! empty( $item['symbol'] ) ) && ( 0 == $item['symbol_order'] ) ) {
                                        echo '<span class="kpis__symbol js-kpis-symbol--before">';
                                        esc_html_e( $item['symbol'] );
                                        echo '</span>';
                                    }

                                    echo '<span class="kpis__number js-kpi-number" aria-live="off" data-number="' . esc_html( $item['number1'] ) . '">' . esc_html( $item['number1'] ) . '</span>';

                                    if ( ! empty( $item['seperator'] ) ) {
                                        echo '<span class="kpis__seperator">';
                                        esc_html_e( $item['seperator'] );
                                        echo '</span>';
                                        if ( isset( $item['number2'] ) ) {
                                            $num2disp = 0;
                                            if ( 1 > $item['number2'] ) {
                                                $num2disp = $item['number2'];
                                            }
                                            echo '<span class="kpis__number js-kpi-number" aria-live="off" data-number="' . esc_html( $item['number2'] ) . '">' . $num2disp . '</span>';
                                        }
                                    }

                                    if ( ( ! empty( $item['symbol'] ) ) && ( $item['symbol_order'] != 0 ) ) {
                                        echo '<span class="kpis__symbol js-kpis-symbol">';
                                        esc_html_e( $item['symbol'] );
                                        echo '</span>';
                                    }
                                    ?>

                                </div>

                                <?php 
                                if ( ! empty( $item['title'] ) ) {
                                    echo '<div class="kpis__title">';
                                    esc_html_e( $item['title'] );
                                    echo '</div>';
                                }
                                ?>

                            </div>

                            <?php
                        }
                    }
                    ?>

                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php
    $output .= ob_get_contents();
    ob_end_clean();
    wp_reset_postdata();
    return $output;
}
