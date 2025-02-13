<?php


$modules = 'modules';


if (have_rows( $modules )) :


    while (have_rows( $modules )) : the_row();

        /*
         * CAROUSEL DE PROJETS / PAGE / NEWS
         */
        if (get_row_layout() == 'module_carousel') :

            $title = get_sub_field('mod_title');
            $bg = get_sub_field('mod_bg');
            $auto = get_sub_field('mod_auto');
            $postsperpage = get_sub_field('mod_postsperpage');
            $posttype = get_sub_field('mod_posttype');

            if( $auto ) {
                
                $q_args = array(
                    'posts_per_page'    => $postsperpage,
                    'post_type'         => $posttype,
                    'status'            => 'published',
                );

                if( $posttype === 'event' ) {
                    setlocale(LC_TIME, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
                    $today = date('Ymd');

                    $q_args['meta_key'] = 'date';
                    $q_args['orderby'] = 'meta_value_num';
                    $q_args['order'] = 'ASC';
                    $q_args['meta_query'] = array(
                        'key'           => 'date_fin',
                        'value'         => $today,
                        'compare'       => '>=',
                    );

                }
                else {
                    $q_args['orderby'] = 'date';
                    $q_args['order'] = 'DESC';
                }

                $posts = get_posts( $q_args );
            }
            else {
                $posts = get_sub_field('mod_publications');
            }

            $args = array(
                'title'   => $title,
                'posts'   => $posts,
                'bg'   => $bg,
            );

            get_template_part('Components/Modules/Module', 'Carousel', $args);


        /*
         * BLOQUOTE
         */
        elseif (get_row_layout() == 'module_citation') :

            $args = array(
                'content'   =>  get_sub_field('mod_content')
            );

            get_template_part('Components/Modules/Module', 'Quote', $args);



        /*
         * PUBLICATION SEULE
         */
        elseif (get_row_layout() == 'module_publication') :

            $args = array(
                'title'   => get_sub_field('mod_title'),
                'publication'   => get_sub_field('mod_publication')
            );

            get_template_part('Components/Modules/Module', 'Publication', $args);





        /*
         * BLOCS de CONTENUS MIS EN AVANT 
         * (cf. Accueil)
         */
        elseif (get_row_layout() == 'mod_visual_text') :
            $visuel = get_sub_field('mod_visuel');
            $txt = get_sub_field('mod_txt');

            $args = array(
                'visuel'   => $visuel,
                'txt'   => $txt
            );

            get_template_part('Components/Modules/Module', 'VisuelText', $args);


            
        /*
         * GRILLE DE VISUELS 
         */
        elseif (get_row_layout() == 'mod_visualgrid') :
            $visuals = get_sub_field('mod_visuals');

            $args = array(
                'visuals'   => $visuals
            );

            get_template_part('Components/Modules/Module', 'VisualGrid', $args);









        /*
         * PROJETS MIS EN AVANT () 
         */
        elseif (get_row_layout() == 'mod_featuredProjects') :

            $title = get_sub_field('mod_title');
            $relations = get_sub_field('mod_relations');

            $args = array(
                'title'   => $title,
                'relations'   => $relations
            );

            get_template_part('Components/Modules/Module', 'FeaturedProjects', $args);




        /*
         * CONTENU SUR 2 COLONNES LIBRE
         */
        elseif (get_row_layout() == 'mod_contentSplit') :

            $title = get_sub_field('mod_title');
            $medias = get_sub_field('mod_media');
            $content = get_sub_field('mod_content');
            $design = get_sub_field('mod_design');

            $args = array(
                'title'   => $title,
                'design'   => $design,
                'medias'   => $medias,
                'content'   => $content
            );

            get_template_part('Components/Modules/Module', 'ContentSplit', $args);


        /*
         * DOSSIERS DE PRESSE
         * (cf. Espace presse)
         */
        elseif (get_row_layout() == 'mod_presskits') :

            $presskits = get_sub_field('presskits');

            $args = array(
                'presskits'   => $presskits
            );

            get_template_part('Components/Modules/Module', 'Presskits', $args);




        /*
         * EQUIPE / CONTACTS
         * (cf. Le Fonds / Espace Presse)
         */
        elseif (get_row_layout() == 'mod_contacts') :

            $title = get_sub_field('mod_title');
            $contacts = get_sub_field('mod_contacts');

            $args = array(
                'title'   => $title,
                'contacts'   => $contacts
            );

            get_template_part('Components/Modules/Module', 'Contacts', $args);


        /*
         * INSTAGRAM FEED
         */
        elseif (get_row_layout() == 'mod_instafeed') :

            $id = get_sub_field('mod_feedId');
            $account = get_sub_field('mod_account');
            $hashtag = get_sub_field('mod_hashtag');
            $bg = get_sub_field('mod_bg');

            $args = array(
                'id'   => $id,
                'account'   => $account,
                'hashtag'   => $hashtag,
                'bg'   => $bg,
            );

            get_template_part('Components/Modules/Module', 'Instafeed', $args);



        endif;

    endwhile;

endif;
