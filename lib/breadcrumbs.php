<?php
function roots_bs3_breadcrumb() {
    /* === OPTIONS === */
    $text['home']     = 'Главная'; // text for the 'Home' link
    $text['category'] = '%s'; // text for a category page
    $text['search']   = 'Результаты поиска'; // text for a search results page
    $text['tag']      = 'Записи с меткой "%s"'; // text for a tag page
    $text['author']   = 'Articles Posted by %s'; // text for an author page
    $text['404']      = 'Не найдено'; // text for the 404 page
    $show_current   = 1; // 1 - show current post/page/category title in breadcrumbs, 0 - don't show
    $show_on_home   = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
    $show_title     = 1; // 1 - show the title for the links, 0 - don't show
    $delimiter      = ''; // delimiter between crumbs
    $before         = '<li class="current">'; // tag before the current crumb
    $after          = '</li>'; // tag after the current crumb
    /* === END OF OPTIONS === */
    global $post;
    $home_link    = home_url('/');
    $link_before  = '<li class="current" typeof="v:Breadcrumb">';
    $link_after   = '</li>';
    $link_attr    = ' rel="v:url" property="v:title"';
    $link         = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $parent_id    = $parent_id_2 = $post->post_parent;
    $frontpage_id = get_option('page_on_front');
    if (is_home() || is_front_page()) {
        if ($show_on_home == 1) echo '<div class="breadcrumbs mb-box"><a href="' . $home_link . '">' . $text['home'] . '</a></div>';
    } else {
        echo '<div class="breadcrumbs" id="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">';
        if ($show_home_link == 1) {
            echo    '<li class="current" id="bread_home"><a href="' . $home_link . '" rel="v:url" property="v:title">' . $text['home'] . '</a></li>';
            if ($frontpage_id == 0 || $parent_id != $frontpage_id) echo $delimiter;
        }
        if ( is_category() ) {
            $this_cat = get_category(get_query_var('cat'), false);
            if ($this_cat->parent != 0) {
                $cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
                if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                echo $cats;
            }
            if ($show_current == 1) {
                $href= get_permalink();
                echo $before . "<a href='$href'>" . sprintf($text['category'], single_cat_title('', false)) . "</a>" . $after;
            }
        } elseif ( is_search() ) {
            $href= get_permalink();
            echo $before. "<a href='$href'>" . sprintf($text['search'], get_search_query()). "</a>" . $after;
        } elseif ( is_day() ) {
            $href= get_permalink();
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
            echo $before. "<a href='$href'>" . get_the_time('d'). "</a>" . $after;
        } elseif ( is_month() ) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            $href= get_permalink();
            echo $before. "<a href='$href'>"  . get_the_time('F'). "</a>"  . $after;
        } elseif ( is_year() ) {
            $href= get_permalink();
            echo $before . "<a href='$href'>". get_the_time('Y'). "</a>" . $after;
        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_link . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current == 1){
                    $href= get_permalink();
                    echo $delimiter . "<a href='$href'>" . $before . get_the_title(). "</a>". $after;
                }
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $delimiter);
                if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                echo $cats;
                if ($show_current == 1){
                    $href= get_permalink();
                    echo $before. "<a href='$href'>"   . get_the_title(). "</a>" . $after;
                }
            }
        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $href= get_permalink();
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif ( is_attachment() ) {
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            if ($cat) {
                $cats = get_category_parents($cat, TRUE, $delimiter);
                $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                echo $cats;
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current == 1) echo $delimiter . $before . get_the_title(). $after;
        } elseif ( is_page() && !$parent_id ) {
            if ($show_current == 1){
                $href= get_permalink();
                echo $before ."<a href='$href'>" . get_the_title()."</a>" . $after;
            }
        } elseif ( is_page() && $parent_id ) {
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs)-1) echo $delimiter;
                }
            }
            if ($show_current == 1) {
                if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo $delimiter;
                echo $before  . get_the_title() . $after;
            }
        } elseif ( is_tag() ) {
            echo $before  . sprintf($text['tag'], single_tag_title('', false)). $after;
        } elseif ( is_author() ) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . sprintf($text['author'], $userdata->display_name). $after;
        } elseif ( is_404() ) {
            $href= get_permalink();
            echo $before ."<a href='$href'>". $text['404']. "</a>" . $after;
        } elseif ( has_post_format() && !is_singular() ) {
            echo get_post_format_string( get_post_format() );
        }
        if ( get_query_var('paged') ) {
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
            echo __('Page') . ' ' . get_query_var('paged');
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
        }
        echo '</div><!-- .breadcrumbs -->';
    }
} // end dimox_breadcrumbs()