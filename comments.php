<div class='comments'>



    <h3> User Commentary </h3>
        <?php $args = array(
            'walker'            => null,
            'max_depth'         => '',
            'style'             => 'ul',
            'callback'          => null,
            'end-callback'      => null,
            'type'              => 'all',
            'reply_text'        => 'Reply',
            'page'              => '',
            'per_page'          => '',
            'avatar_size'       => 32,
            'reverse_top_level' => null,
            'reverse_children'  => '',
            'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
            'short_ping'        => false,   // @since 3.6
                'echo'              => true     // boolean, default is true
        ); ?>


        <?php 
            wp_list_comments($args,$comments);


            //args and comments_args are just arrays for defining how the comments are generated
            $comments_args = array(
                'label_submit'=>'Send',
                'title_reply'=>'Add to the discussion with own comments',
                'comment_notes_after'=>'',
            )
        
        ?>

</div>