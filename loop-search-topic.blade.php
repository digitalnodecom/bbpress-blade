{{-- Search Loop - Single Topic --}}<div class="bbp-topic-header">
    <div class="bbp-meta">
        <span class="bbp-topic-post-date">@php bbp_topic_post_date( bbp_get_topic_id() ); @endphp</span>
        <a href="@php bbp_topic_permalink(); @endphp" class="bbp-topic-permalink">#{{ bbp_topic_id() }}</a>
    </div><!-- .bbp-meta -->

    <div class="bbp-topic-title">

        @php do_action( 'bbp_theme_before_topic_title' ); @endphp

        <h3>@php esc_html_e( 'Topic:', 'bbpress' ); @endphp
            <a href="@php bbp_topic_permalink(); @endphp">@php bbp_topic_title(); @endphp</a></h3>

        <div class="bbp-topic-title-meta">


            @if ( function_exists( 'bbp_is_forum_group_forum' ) && bbp_is_forum_group_forum( bbp_get_topic_forum_id() ) )


                @php esc_html_e( 'in group forum ', 'bbpress' ); @endphp


            @else


                @php esc_html_e( 'in forum ', 'bbpress' ); @endphp


            @endif


            <a href="@php bbp_forum_permalink( bbp_get_topic_forum_id() ); @endphp">@php bbp_forum_title( bbp_get_topic_forum_id() ); @endphp</a>

        </div><!-- .bbp-topic-title-meta -->

        @php do_action( 'bbp_theme_after_topic_title' ); @endphp

    </div><!-- .bbp-topic-title -->

</div><!-- .bbp-topic-header -->

<div id="post-{{ bbp_topic_id() }}" @php bbp_topic_class(); @endphp>
    <div class="bbp-topic-author">

        @php do_action( 'bbp_theme_before_topic_author_details' ); @endphp

        @php bbp_topic_author_link( array( 'show_role' => true ) ); @endphp


        @if ( bbp_is_user_keymaster() )


            @php do_action( 'bbp_theme_before_topic_author_admin_details' ); @endphp

            <div class="bbp-reply-ip">@php bbp_author_ip( bbp_get_topic_id() ); @endphp</div>

            @php do_action( 'bbp_theme_after_topic_author_admin_details' ); @endphp


        @endif


        @php do_action( 'bbp_theme_after_topic_author_details' ); @endphp

    </div><!-- .bbp-topic-author -->

    <div class="bbp-topic-content">

        @php do_action( 'bbp_theme_before_topic_content' ); @endphp

        @php bbp_topic_content(); @endphp

        @php do_action( 'bbp_theme_after_topic_content' ); @endphp

    </div><!-- .bbp-topic-content -->
</div><!-- #post-{{ bbp_topic_id() }} -->
