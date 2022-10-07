<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$lp2021a = new FieldsBuilder('lp2021a', ['title' => 'Content', 'style' => 'seemless', 'hide_on_screen' => 'the_content, revisions']);

$lp2021a
    ->setLocation('page_template', '==', 'views/lp-2021a.blade.php');

$lp2021a
    ->addTab('Components')
        ->addTrueFalse('show_hero_section')
            ->setInstructions('Check this box to show the hero section.')
        ->addTrueFalse('show_codefresh_argo_platform_wheel')
            ->setInstructions('Check this box to show a wheel explaining features of the Codefresh Argo Platform.')
        ->addTrueFalse('show_flexible_1')
            ->setInstructions('Check this box to show the first flexible section.')
        ->addTrueFalse('show_testimonial_trio_section')
            ->setInstructions('Check this box to show testimonials.')
        ->addTrueFalse('show_tabbed_section')
            ->setInstructions('Check this box to show the tabbed section.')
        ->addTrueFalse('show_flexible_2')
            ->setInstructions('Check this box to show the second flexible section.')
        ->addTrueFalse('show_benefits_section')
            ->setInstructions('Check this box to show the benefits section.')
        ->addTrueFalse('show_trust_section')
            ->setInstructions('Check this box to show the trusted by logos case studies section.')
        ->addTrueFalse('show_flexible_3')
            ->setInstructions('Check this box to show the third flexible section.')
        ->addTrueFalse('show_flexible_4')
            ->setInstructions('Check this box to show the fourth flexible section.')
        ->addTrueFalse('show_flexible_5')
            ->setInstructions('Check this box to show the fifth flexible section.')
        ->addTrueFalse('show_flexible_6')
            ->setInstructions('Check this box to show the sixth flexible section.')
        ->addTrueFalse('show_flexible_7')
            ->setInstructions('Check this box to show the sixth flexible section.')
        ->addTrueFalse('show_flexible_8')
            ->setInstructions('Check this box to show the sixth flexible section.')
        ->addTrueFalse('show_flexible_9')
            ->setInstructions('Check this box to show the sixth flexible section.')
        ->addTrueFalse('show_form')
            ->setInstructions('Check this box to show the form section.')

    ->addTab('Options')

        ->addText('hero_classes')
        ->addText('hero_bg_image_classes')
        ->addText('hero_bg_image_file')

        ->addTrueFalse('cap_show_cta_buttons')
        ->addText('cap_buttons_align')
        ->addText('cap_classes')
        ->addText('cap_bg_image_classes')
        ->addText('cap_bg_image_file')

        ->addTrueFalse('flexible_1_show_cta_buttons')
        ->addText('flexible_1_buttons_align')
        ->addText('flexible_1_classes')
        ->addText('flexible_1_bg_image_classes')
        ->addText('flexible_1_bg_image_file')

        ->addText('detail_tabs_classes')
        ->addText('detail_tabs_bg_image_classes')
        ->addText('detail_tabs_bg_image_file')

        ->addText('trust_classes')
        ->addText('trust_bg_image_classes')
        ->addText('trust_bg_image_file')

        ->addText('testimonial_trio_classes')
        ->addText('testimonial_trio_bg_image_classes')
        ->addText('testimonial_trio_bg_image_file')

        ->addTrueFalse('flexible_2_show_cta_buttons')
        ->addText('flexible_2_buttons_align')
        ->addText('flexible_2_classes')
        ->addText('flexible_2_bg_image_classes')
        ->addText('flexible_2_bg_image_file')

        ->addText('benefits_classes')
        ->addText('benefits_bg_image_classes')
        ->addText('benefits_bg_image_file')

        ->addTrueFalse('flexible_3_show_cta_buttons')
        ->addText('flexible_3_buttons_align')
        ->addText('flexible_3_classes')
        ->addText('flexible_3_bg_image_classes')
        ->addText('flexible_3_bg_image_file')

        ->addTrueFalse('flexible_4_show_cta_buttons')
        ->addText('flexible_4_buttons_align')
        ->addText('flexible_4_classes')
        ->addText('flexible_4_bg_image_classes')
        ->addText('flexible_4_bg_image_file')

        ->addTrueFalse('flexible_5_show_cta_buttons')
        ->addText('flexible_5_buttons_align')
        ->addText('flexible_5_classes')
        ->addText('flexible_5_bg_image_classes')
        ->addText('flexible_5_bg_image_file')

        ->addTrueFalse('flexible_6_show_cta_buttons')
        ->addText('flexible_6_buttons_align')
        ->addText('flexible_6_classes')
        ->addText('flexible_6_bg_image_classes')
        ->addText('flexible_6_bg_image_file')

        ->addTrueFalse('flexible_7_show_cta_buttons')
        ->addText('flexible_7_buttons_align')
        ->addText('flexible_7_classes')
        ->addText('flexible_7_bg_image_classes')
        ->addText('flexible_7_bg_image_file')

        ->addTrueFalse('flexible_8_show_cta_buttons')
        ->addText('flexible_8_buttons_align')
        ->addText('flexible_8_classes')
        ->addText('flexible_8_bg_image_classes')
        ->addText('flexible_8_bg_image_file')

        ->addTrueFalse('flexible_9_show_cta_buttons')
        ->addText('flexible_9_buttons_align')
        ->addText('flexible_9_classes')
        ->addText('flexible_9_bg_image_classes')
        ->addText('flexible_9_bg_image_file')

        ->addText('form_classes')
        ->addText('form_bg_image_classes')
        ->addText('form_bg_image_file')

        ->addText('footer_bg_image_classes')
        ->addText('footer_bg_image_file')

    ->addTab('Hero')
        ->addText('hero_title')
        ->addTextarea('hero_subtitle')
        ->addText('optional_hero_testimonial')
        ->addText('optional_hero_attribution')
        ->addWysiwyg('hero_video', ['instructions' => 'Please only insert a singular video or image into this section.'])

    ->addTab('CTA Buttons')
        ->addText('cta_primary_button_text')
        ->addText('cta_primary_button_url')
        ->addText('cta_secondary_button_text')
        ->addText('cta_secondary_button_url')
        ->addText('cta_secondary_button_classes')
        ->addText('cta_secondary_button_icon')

    ->addTab('CAP Wheel')
        ->addWysiwyg('cap_wheel_before')
        ->addWysiwyg('cap_wheel_after')

    ->addTab('Flexible 1')
        ->addWysiwyg('flexible_1_text')

    ->addTab('Detail Tabs')
        ->addText('detail_tabs_title')
        ->addTextarea('detail_tabs_description')
        ->addText('detail_tab_1_name')
        ->addWysiwyg('detail_tab_1_content')
        ->addText('detail_tab_2_name')
        ->addWysiwyg('detail_tab_2_content')
        ->addText('detail_tab_3_name')
        ->addWysiwyg('detail_tab_3_content')

    ->addTab('Trusted By')
        ->addText('trust_title')
        ->addText('trust_description')

    ->addTab('Testimonials')
        ->addText('testimonials_title')
        ->addText('testimonials_description')
        ->addText('testimonial1_body')
        ->addText('testimonial1_author')
        ->addText('testimonial1_position')
        ->addText('testimonial1_company')
        ->addText('testimonial2_body')
        ->addText('testimonial2_author')
        ->addText('testimonial2_position')
        ->addText('testimonial2_company')
        ->addText('testimonial3_body')
        ->addText('testimonial3_author')
        ->addText('testimonial3_position')
        ->addText('testimonial3_company')

    ->addTab('F2')
        ->addWysiwyg('flexible_2_text')

    ->addTab('Benefits')
        ->addTrueFalse('enable_icon_backgrounds')
          ->setInstructions('Check this box if you want to add a white box with shadow behind the icons.')
        ->addWysiwyg('benefits_optional_intro')
        ->addText('benefits_title')
        ->addText('benefit1_color')
        ->addText('benefit1_title')
        ->addTextarea('benefit1_description')
        ->addText('benefit2_color')
        ->addText('benefit2_title')
        ->addTextarea('benefit2_description')
        ->addText('benefit3_color')
        ->addText('benefit3_title')
        ->addTextarea('benefit3_description')

    ->addTab('F3')
        ->addWysiwyg('flexible_3_text')

    ->addTab('F4')
        ->addWysiwyg('flexible_4_text')

    ->addTab('F5')
        ->addWysiwyg('flexible_5_text')

    ->addTab('F6')
        ->addWysiwyg('flexible_6_text')

    ->addTab('F7')
        ->addWysiwyg('flexible_7_text')

    ->addTab('F8')
        ->addWysiwyg('flexible_8_text')

    ->addTab('F9')
        ->addWysiwyg('flexible_9_text')

    ->addTab('Form')
        ->addTrueFalse('show_form_at_top')
            ->setInstructions('Check this box to show the form at the top of the page. This is generally discouraged but might be useful for multi-step forms.')
        ->addTrueFalse('align_heading')
            ->setInstructions('Check this box to left align the heading and subheading.')
        ->addText('form_title')
        ->addText('form_subtitle')
        ->addNumber('form_id')
            ->setInstructions('Please visit <a href="'.admin_url('admin.php?page=gf_edit_forms').'" target="_blank">Forms</a> to find the Form ID.')
        ->addText('optional_hubspot_embed')
            ->setInstructions('If you have a Hubspot embed code and want to use it instead of the usual Gravity form, please paste the embed code here.')

    ;

return $lp2021a;
