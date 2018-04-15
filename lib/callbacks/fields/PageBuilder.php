<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Page Builder' )//PAGE BUILDER FIELDS
    ->show_on_post_type('page')
    ->add_fields( array(
    Field::make( 'complex', 'page_builder' )
        ->set_layout('tabbed-vertical')
        ->setup_labels(array(
            'plural_name' => 'Sections',
            'singular_name' => 'Section',
        ))
        ->add_fields( 'dynamic_section', array(
            Field::make("separator", "section_settings"),
            Field::make('checkbox', 'full_width_section')->set_width(20),
            Field::make('checkbox', 'content_contained')->set_width(20),
            Field::make('checkbox', 'vertical_align')->set_width(20),
            Field::make('checkbox', 'mobile_center_text')->set_width(20),
            Field::make('checkbox', 'mobile_reverse_columns')->set_width(20),
            Field::make("select", "section_padding_top")
            ->set_width(50)
            ->add_options(array(
                'pt-0' => '0',
                'pt-1' => '1',
                'pt-2' => '2',
                'pt-3' => '3',
                'pt-4' => '4',
                'pt-5' => '5',
            ))->set_default_value( 'pt-4' ),
            Field::make("select", "section_padding_bottom")
            ->set_width(50)
            ->add_options(array(
                'pb-0' => '0',
                'pb-1' => '1',
                'pb-2' => '2',
                'pb-3' => '3',
                'pb-4' => '4',
                'pb-5' => '5',
            ))->set_default_value( 'pb-4' ),
             Field::make("select", "section_margin_top")
            ->set_width(50)
            ->add_options(array(
                'mt-0' => '0',
                'mt-1' => '1',
                'mt-2' => '2',
                'mt-3' => '3',
                'mt-4' => '4',
                'mt-5' => '5',
            ))->set_default_value( 'mt-0' ),
            Field::make("select", "section_margin_bottom")
            ->set_width(50)
            ->add_options(array(
                'mb-0' => '0',
                'mb-1' => '1',
                'mb-2' => '2',
                'mb-3' => '3',
                'mb-4' => '4',
                'mb-5' => '5',
            ))->set_default_value( 'mb-0' ),
            Field::make('text', 'section_class'),
            Field::make("separator", 'columns_seperator',"Columns"),
            Field::make( 'complex', 'columns' )
             ->set_layout('tabbed-horizontal')
             ->set_max(6)
             ->setup_labels( array(
                'plural_name' => 'Columns',
                'singular_name' => 'Column'
             ))   
            ->add_fields( 'column', array(
                Field::make('text', 'column_class'),
                Field::make('checkbox', 'column_class_override')->set_option_value('yes'),
                Field::make( 'complex', 'column_content' )
                 ->setup_labels( array(
                    'plural_name' => 'Content',
                    'singular_name' => 'Content'
                 ))
                 ->add_fields( 'content-block', array(
                    Field::make("select", "content_type")
                        ->add_options(array(
                            'text' => 'Text',
                            'textarea' => 'Textarea',
                            'shortcode' => 'Shortcode',
                            'heading' => 'Heading',
                            'image' => 'Image',
                            'button' => 'Button',
                            'space' => 'Space',
                        )),
                    Field::make( 'rich_text', 'content_text' )
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'text', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make( 'image', 'content_image' )->set_value_type( 'url' )
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'image', 
                                'compare' => '=', 
                            ),
                        )),
                      Field::make( 'select', 'content_image_size', "Image Size" )
                       ->add_options(array(
                            'thumnnail' => 'Thumbnail',
                            'medium' => 'Medium',
                            'large' => 'Large',
                            'full' => 'Full'
                        ))
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'image', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_button_class',"Button Class")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_button_color',"Button Color")
                        ->add_options(array(
                            'custom' => 'Custom',
                        ))
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make("color", "content_button_background", "Button Background Color")
                     ->set_conditional_logic(array(
                            array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                            'relation' => 'AND',
                             array(
                                'field' => 'content_button_color',
                                'value' => 'custom', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_button_text',"Button Text")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_button_link',"Button Link")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_button_size',"Button Size")
                        ->add_options(array(
                            'btn-sm' => 'Small',
                            'btn-md' => 'Medium',
                            'btn-lg' => 'Large',
                        ))
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'button', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_space')
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'space', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('textarea', 'content_textarea_text', "Textarea Content")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'textarea', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_shortcode', "Shortcode")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'shortcode', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('select', 'content_heading_tag', "Heading Tag")
                        ->add_options(array(
                            'h2' => 'h2',
                            'h3' => 'h3',
                            'h4' => 'h4',
                            'h5' => 'h5',
                            'h6' => 'h6',
                            'p' =>  'p',
                            'span' => 'span',
                            'div' => 'div'
                        ))
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'heading', 
                                'compare' => '=', 
                            ),
                        )),
                    Field::make('text', 'content_heading_text', "Heading Text")
                        ->set_conditional_logic(array(
                            'relation' => 'OR',
                             array(
                                'field' => 'content_type',
                                'value' => 'heading', 
                                'compare' => '=', 
                            ),
                        )),
                ))//Content Block Complex--End  
            ))//Column Complex--End
        ))//Dynamic Section Complex--End
        ->add_fields( 'media_gallery', array(
            Field::make( 'media_gallery', 'media_gallery' )
            ->set_type( array( 'image', 'video' ) )
            ->set_duplicates_allowed( false ),
        ))
));//Page Builder Fields Array--End