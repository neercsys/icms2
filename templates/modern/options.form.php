<?php

class formModernTemplateOptions extends cmsForm {

    public $is_tabbed = true;

    public function init() {

        $gamma = [
            '$white'    => LANG_MODERN_C_WHITE,
            '$gray-100' => LANG_MODERN_C_GRAY100,
            '$gray-200' => LANG_MODERN_C_GRAY200,
            '$gray-300' => LANG_MODERN_C_GRAY300,
            '$gray-400' => LANG_MODERN_C_GRAY400,
            '$gray-500' => LANG_MODERN_C_GRAY500,
            '$gray-600' => LANG_MODERN_C_GRAY600,
            '$gray-700' => LANG_MODERN_C_GRAY700,
            '$gray-800' => LANG_MODERN_C_GRAY800,
            '$gray-900' => LANG_MODERN_C_GRAY900,
            '$black'    => LANG_MODERN_C_BLACK,
            '$blue'     => LANG_MODERN_C_BLUE,
            '$indigo'   => LANG_MODERN_C_INDIGO,
            '$purple'   => LANG_MODERN_C_PURPLE,
            '$pink'     => LANG_MODERN_C_PINK,
            '$red'      => LANG_MODERN_C_RED,
            '$orange'   => LANG_MODERN_C_ORANGE,
            '$yellow'   => LANG_MODERN_C_YELLOW,
            '$green'    => LANG_MODERN_C_GREEN,
            '$teal'     => LANG_MODERN_C_TEAL,
            '$cyan'     => LANG_MODERN_C_CYAN
        ];

        $gamma_default = [
            '$white'    => '#ffffff',
            '$gray-100' => '#f8f9fa',
            '$gray-200' => '#eeeeee',
            '$gray-300' => '#dee2e6',
            '$gray-400' => '#cccccc',
            '$gray-500' => '#adb5bd',
            '$gray-600' => '#888888',
            '$gray-700' => '#495057',
            '$gray-800' => '#333333',
            '$gray-900' => '#222222',
            '$black'    => '#000000',
            '$blue'     => '#008cba',
            '$indigo'   => '#6610f2',
            '$purple'   => '#6f42c1',
            '$pink'     => '#e83e8c',
            '$red'      => '#f04124',
            '$orange'   => '#fd7e14',
            '$yellow'   => '#e99002',
            '$green'    => '#43ac6a',
            '$teal'     => '#20c997',
            '$cyan'     => '#5bc0de'
        ];

        $theme_colors = [
            '$primary'   => LANG_MODERN_C_PRIMARY,
            '$secondary' => LANG_MODERN_C_SECONDARY,
            '$success'   => LANG_MODERN_C_SUCCESS,
            '$info'      => LANG_MODERN_C_INFO,
            '$warning'   => LANG_MODERN_C_WARNING,
            '$danger'    => LANG_MODERN_C_DANGER,
            '$light'     => LANG_MODERN_C_LIGHT,
            '$dark'      => LANG_MODERN_C_DARK
        ];

        $theme_colors_default = [
            'primary'   => '$blue',
            'secondary' => '$gray-600',
            'success'   => '$green',
            'info'      => '$cyan',
            'warning'   => '$yellow',
            'danger'    => '$red',
            'light'     => '$gray-100',
            'dark'      => '$gray-900'
        ];

        $fields = array(

            'basic' => array(
                'type' => 'fieldset',
                'title' => LANG_CP_BASIC,
                'childs' => array(

                    new fieldString('owner_name', array(
                        'title' => LANG_MODERN_THEME_COPYRIGHT
                    )),

                    new fieldString('owner_url', array(
                        'title' => LANG_MODERN_THEME_COPYRIGHT_URL,
                        'hint' => LANG_MODERN_THEME_COPYRIGHT_URL_HINT
                    )),

                    new fieldString('owner_year', array(
                        'title' => LANG_MODERN_THEME_COPYRIGHT_YEAR,
                        'hint' => LANG_MODERN_THEME_COPYRIGHT_YEAR_HINT
                    )),

                    new fieldCheckbox('show_top_btn', array(
                        'title' => LANG_MODERN_THEME_ENABLE_TOPBTN,
                        'default' => 1
                    )),

                    new fieldCheckbox('show_cookiealert', array(
                        'title' => LANG_MODERN_THEME_SHOW_COOKIEALERT
                    )),

                    new fieldString('cookiealert_text', array(
                        'title' => LANG_MODERN_THEME_COOKIEALERT_TEXT,
                        'is_clean_disable' => true,
                        'visible_depend' => array('show_cookiealert' => array('show' => array('1')))
                    )),

                    new fieldCheckbox('scss:enable-rounded', array(
                        'title' => LANG_MODERN_THEME_ENABLE_ROUNDED,
                        'default' => 1
                    )),

                    new fieldString('scss:border-radius', array(
                        'title' => LANG_MODERN_THEME_ROUNDED_BASE,
                        'default' => '.25rem',
                        'visible_depend' => array('scss:enable-rounded' => array('show' => array('1')))
                    )),

                    new fieldString('scss:border-radius-lg', array(
                        'title' => LANG_MODERN_THEME_ROUNDED_BASE_LG,
                        'default' => '.3rem',
                        'visible_depend' => array('scss:enable-rounded' => array('show' => array('1')))
                    )),

                    new fieldString('scss:border-radius-sm', array(
                        'title' => LANG_MODERN_THEME_ROUNDED_BASE_SM,
                        'default' => '.2rem',
                        'visible_depend' => array('scss:enable-rounded' => array('show' => array('1')))
                    )),

                    new fieldCheckbox('scss:enable-shadows', array(
                        'title' => LANG_MODERN_THEME_ENABLE_SHADOWS
                    )),

                    new fieldCheckbox('scss:enable-gradients', array(
                        'title' => LANG_MODERN_THEME_ENABLE_GRADIENTS
                    )),

                    new fieldCheckbox('scss:enable-responsive-font-sizes', array(
                        'title' => LANG_MODERN_THEME_ENABLE_RFS,
                        'default' => 1
                    )),

                    new fieldCheckbox('scss:enable-modal-blur', array(
                        'title' => LANG_MODERN_THEME_ENABLE_MODAL_BLUR,
                        'default' => 1
                    )),

                    new fieldString('scss:grid-gutter-width', array(
                        'title' => LANG_MODERN_THEME_GRID_GUTTER_W,
                        'default' => '30px'
                    )),

                    new fieldString('scss:font-size-base', array(
                        'title' => LANG_MODERN_THEME_BASE_FS,
                        'default' => '1rem'
                    )),

                    new fieldString('scss:spacer', array(
                        'title' => LANG_MODERN_THEME_BASE_SPACER,
                        'default' => '1rem'
                    )),

                    new fieldString('scss:avatar-inlist-size', array(
                        'title' => LANG_MODERN_THEME_AVATAR_INLIST_SIZE,
                        'hint' => LANG_MODERN_THEME_AVATAR_INLIST_SIZE_HINT,
                        'default' => '64px'
                    )),

                    new fieldList('pagination_template', array(
                        'title' => LANG_MODERN_THEME_PAGINATION_TPL,
                        'default' => 'pagination',
                        'generator' => function($item) {
                            return cmsTemplate::getInstance()->getAvailableTemplatesFiles('assets/ui', 'pagination*.tpl.php', 'modern');
                        }
                    ))

                )
            ),

            'logo' => array(
                'type' => 'fieldset',
                'title' => LANG_PAGE_LOGO,
                'childs' => array(

                    new fieldImage('logo', array(
                        'title' => LANG_MODERN_LOGO,
                        'hint' => LANG_MODERN_RASTR_HINT,
                        'context_params' => [
                            'target_controller' => 'admin',
                            'target_subject'    => 'theme/modern',
                            'target_id'         => null
                        ],
                        'options' => array(
                            'sizes' => array('small', 'original')
                        )
                    )),

                    new fieldFile('logo_svg', array(
                        'title' => LANG_MODERN_LOGO_SVG,
                        'options' => [
                            'extensions' => 'svg'
                        ]
                    )),

                    new fieldImage('logo_small', array(
                        'title' => LANG_MODERN_LOGO_SMALL,
                        'hint' => LANG_MODERN_LOGO_SMALL_HINT.LANG_MODERN_RASTR_HINT,
                        'context_params' => [
                            'target_controller' => 'admin',
                            'target_subject'    => 'theme/modern',
                            'target_id'         => null
                        ],
                        'options' => array(
                            'sizes' => array('small', 'original')
                        )
                    )),

                    new fieldFile('logo_small_svg', array(
                        'title' => LANG_MODERN_LOGO_SMALL_SVG,
                        'options' => [
                            'extensions' => 'svg'
                        ]
                    ))

                )
            ),

            'colors' => array(
                'type' => 'fieldset',
                'title' => LANG_MODERN_THEME_COLORS,
                'childs' => [
                    new fieldList('scss:body-bg', array(
                        'title' => LANG_MODERN_THEME_BGCOLOR,
                        'hint' => LANG_MODERN_THEME_GCOLOR,
                        'items' => ['' => LANG_MODERN_THEME_SET_MY_COLOR]+$gamma,
                        'default' => '$white'
                    )),
                    new fieldColor('custom_scss:body-bg', array(
                        'visible_depend' => array('scss:body-bg' => array('show' => array('')))
                    )),
                    new fieldList('scss:body-color', array(
                        'title' => LANG_MODERN_THEME_BCOLOR,
                        'hint' => LANG_MODERN_THEME_GCOLOR,
                        'items' => ['' => LANG_MODERN_THEME_SET_MY_COLOR]+$gamma,
                        'default' => '$gray-800'
                    )),
                    new fieldColor('custom_scss:body-color', array(
                        'visible_depend' => array('scss:body-color' => array('show' => array('')))
                    )),
                    new fieldList('scss:link-color', array(
                        'title' => LANG_MODERN_THEME_LINK_COLOR,
                        'hint' => LANG_MODERN_THEME_GCOLOR,
                        'items' => ['' => LANG_MODERN_THEME_SET_MY_COLOR]+$gamma,
                        'default' => '$blue'
                    )),
                    new fieldColor('custom_scss:link-color', array(
                        'visible_depend' => array('scss:link-color' => array('show' => array('')))
                    ))
                ]
            ),

            'gamma' => array(
                'type' => 'fieldset',
                'title' => LANG_MODERN_THEME_GAMMA,
                'childs' => []
            )

        );

        foreach ($gamma as $name => $title) {
            $fields['gamma']['childs'][] = new fieldColor('scss:'.str_replace('$', '', $name), array(
                'title' => $title,
                'default' => $gamma_default[$name]
            ));
        }

        foreach ($theme_colors as $name => $title) {
            $name = str_replace('$', '', $name);
            $fields['colors']['childs'][] = new fieldList('scss:'.$name, array(
                'title' => $title,
                'hint' => LANG_MODERN_THEME_GCOLOR,
                'items' => ['' => LANG_MODERN_THEME_SET_MY_COLOR]+$gamma,
                'default' => $theme_colors_default[$name]
            ));
            $fields['colors']['childs'][] = new fieldColor('custom_scss:'.$name, array(
                'visible_depend' => array('scss:'.$name => array('show' => array('')))
            ));
        }

        return $fields;
    }

}
