<?php

$module = array( '5bd05e0a0a239' => array(
    'key'        => '5bd05e0a0a239',
    'name'       => 'kpis',
    'label'      => 'KPIs',
    'display'    => 'block',
    'sub_fields' => array(
        array (
            'key' => 'field_5ca743kpic9s0',
            'label' => 'Module Background Color',
            'name' => 'md_bg',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '30',
                'class' => '',
                'id' => '',
            ),
            'choices' => array (
                'md-white-bg' => 'White',
                'md-grey-bg' => 'Grey',
            ),
            'default_value' => array (
                0 => 'md-white-bg',
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
        array (
            'key' => 'field_kp88d4e86b7ef',
            'label' => 'Add module to anchor menu',
            'name' => 'add_module_to_anchor_menu',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '30',
                'class' => '',
                'id' => '',
            ),
            'choices' => array (
                'Add' => 'Add',
            ),
            'allow_custom' => 0,
            'save_custom' => 0,
            'default_value' => array (
            ),
            'layout' => 'vertical',
            'toggle' => 0,
            'return_format' => 'value',
        ),
        array (
            'key' => 'field_kp88d4b66b7ed',
            'label' => 'Anchor Title',
            'name' => 'anchor_title',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array (
                array (
                    array (
                        'field' => 'field_kp88d4e86b7ef',
                        'operator' => '==',
                        'value' => 'Add',
                    ),
                ),
            ),
            'wrapper' => array (
                'width' => '40',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Example Title',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key'               => 'field_5bkpbgbc56a9d',
            'label'             => 'Background',
            'name'              => 'background',
            'type'              => 'image',
            'instructions'      => 'Recommended size 1920 x 515',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => array(
                'width' => '50',
                'class' => '',
                'id'    => '',
            ),
            'return_format'     => 'url',
            'preview_size'      => 'thumbnail',
            'library'           => 'all',
            'min_width'         => '',
            'min_height'        => '',
            'min_size'          => '',
            'max_width'         => '',
            'max_height'        => '',
            'max_size'          => '',
            'mime_types'        => 'svg,png,jpg',
        ),
        array(
            'key'               => 'field_qtd0f43g1b34b',
            'label'             => 'Quotes Symbol',
            'name'              => 'show-symbol',
            'type'              => 'checkbox',
            'instructions'      => 'Check the box to have the quote symbol appear above your quote',
            'required'          => 0,
            'wrapper'           => array(
                'width' => '50',
                'class' => '',
                'id'    => '',
            ),
            'choices'           => array(
                'show' => 'Show Symbol'
            ),
        ),
        array(
            'key'               => 'field_qtd05e3f0a23a',
            'label'             => 'quotes',
            'name'              => 'quotes',
            'type'              => 'repeater',
            'instructions'      => '',
            'required'          => '',
            'conditional_logic' => 0,
            'wrapper'           => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'collapsed'         => '',
            'min'               => '',
            'max'               => '',
            'layout'            => 'table',
            'button_label'      => '',
            'sub_fields'        => array(
                array(
                    'key'               => 'field_5bd06aced4596g1',
                    'label'             => 'Quote Text',
                    'name'              => 'quote_text',
                    'type'              => 'textarea',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => 270,
                ),
            ),
        ),
        array(
            'key'               => 'field_5bd05e3f0a23a',
            'label'             => 'List',
            'name'              => 'list',
            'type'              => 'repeater',
            'instructions'      => '',
            'required'          => '',
            'conditional_logic' => 0,
            'wrapper'           => array(
                'width' => '',
                'class' => '',
                'id'    => '',
            ),
            'collapsed'         => '',
            'min'               => '',
            'max'               => '4',
            'layout'            => 'table',
            'button_label'      => '',
            'sub_fields'        => array(
                array(
                    'key'               => 'field_5bd05e5d0a23b',
                    'label'             => 'First Number',
                    'name'              => 'number1',
                    'type'              => 'number',
                    'instructions'      => '',
                    'required'          => 1,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'min'               => '',
                    'max'               => '999999',
                    'step'              => '',
                ),
                array(
                    'key'               => 'field_5bd05e890a23c',
                    'label'             => 'Symbol',
                    'name'              => 'symbol',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => 3,
                ),
                array(
                    'key'               => 'field_5ce16e890a23c',
                    'label'             => 'Symbol Order',
                    'name'              => 'symbol_order',
                    'type'              => 'radio',
                    'instructions'      => 'Should symbol appear before or after number?',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'choices'           => array(
                        0 => 'Before',
                        1 => 'After',
                    ),
                    'allow_null'        => 0,
                    'other_choice'      => 0,
                    'save_other_choice' => 0,
                    'default_value'     => 1,
                    'layout'            => 'horizontal',
                    'return_format'     => 'value',
                ),
                array(
                    'key'               => 'field_5bd05e890a23d',
                    'label'             => 'Seperator',
                    'name'              => 'seperator',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => 1,
                ),
                array(
                    'key'               => 'field_5bd05e5d0a23e',
                    'label'             => 'Second Number',
                    'name'              => 'number2',
                    'type'              => 'number',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'min'               => '',
                    'max'               => '999999',
                    'step'              => '',
                ),
                array(
                    'key'               => 'field_5bd05ec40a23d',
                    'label'             => 'Title',
                    'name'              => 'title',
                    'type'              => 'text',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => '',
                        'id'    => '',
                    ),
                    'default_value'     => '',
                    'placeholder'       => '',
                    'prepend'           => '',
                    'append'            => '',
                    'maxlength'         => 64,
                ),
            ),
        ),
    ),
    'min'        => '',
    'max'        => '',
) );

return $module;