   <div class="post-wrap">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
            	<div class="meta-title">
            		<ul>
            	    <li>From:</li>
            	    <li>Subject:</li>
            	    <li>Date:</li>
            	    </ul>
            	</div>
				
            	<div class="meta-entries entry-meta">
            	    <h2 class="entry-meta"><?php the_author(); ?></h2>
				
            	    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sorted' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
            	    <h2 class="entry-meta"><?php the_time( __('F j, Y g:i:s A T') ); ?></h2>
            	</div>
            </header>
    <?php if ( 'post' == get_post_type() ) : ?>
    <?php endif; ?><?php if ( comments_open() && ! post_password_required() ) : ?>

    <div class="comments-link">
        <?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'sorted' ) . '</span>', _x( '1', 'comments number', 'sorted' ), _x( '%', 'comments number', 'sorted' ) ); ?>
    </div><?php endif; ?><!-- .entry-header -->
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>

    <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sorted' ) ); ?><?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'sorted' ) . '</span>', 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta"><?php $show_sep = false; ?><?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?><?php
	/* translators: used between list items, there is a space after the comma */
	$categories_list = get_the_category_list( __( ', ', 'sorted' ) );
if ( $categories_list ):
	?><span class="cat-links"><?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'sorted' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
$show_sep = true; ?></span> <?php endif; // End if categories ?> <?php
/* translators: used between list items, there is a space after the comma */
$tags_list = get_the_tag_list( '', __( ', ', 'sorted' ) );
if ( $tags_list ):
	if ( $show_sep ) : ?> <span class="sep">|</span> <?php endif; // End if $show_sep ?> <span class="tag-links"><?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'sorted' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
$show_sep = true; ?></span> <?php endif; // End if $tags_list ?> <?php endif; // End if 'post' == get_post_type() ?> <?php if ( comments_open() ) : ?> <?php if ( $show_sep ) : ?> <span class="sep">|</span> <?php endif; // End if $show_sep ?> <span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'sorted' ) . '</span>', __( '<b>1</b> Reply', 'sorted' ), __( '<b>%</b> Replies', 'sorted' ) ); ?></span> <?php endif; // End if comments_open() ?> <?php edit_post_link( __( 'Edit', 'sorted' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- #entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>