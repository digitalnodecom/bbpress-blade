{{-- Replies Loop - Single Reply --}}
<div id="post-@php bbp_reply_id(); @endphp" class="bbp-reply-header">
    <div class="bbp-meta">
        <span class="bbp-reply-post-date">@php bbp_reply_post_date(); @endphp</span>


        @if ( bbp_is_single_user_replies() )


            <span class="bbp-header">
				@php esc_html_e( 'in reply to: ', 'bbpress' ); @endphp
				<a class="bbp-topic-permalink"
                   href="@php bbp_topic_permalink( bbp_get_reply_topic_id() ); @endphp">@php bbp_topic_title( bbp_get_reply_topic_id() ); @endphp</a>
			</span>


        @endif


        <a href="@php bbp_reply_url(); @endphp" class="bbp-reply-permalink">#@php bbp_reply_id(); @endphp</a>

        @php do_action( 'bbp_theme_before_reply_admin_links' ); @endphp

        @php bbp_reply_admin_links(); @endphp

        @php do_action( 'bbp_theme_after_reply_admin_links' ); @endphp

    </div><!-- .bbp-meta -->
</div><!-- #post-@php bbp_reply_id(); @endphp -->

<div @php bbp_reply_class(); @endphp>
    <div class="bbp-reply-author">

        @php do_action( 'bbp_theme_before_reply_author_details' ); @endphp

        @php bbp_reply_author_link( array( 'show_role' => true ) ); @endphp


        @if ( current_user_can( 'moderate', bbp_get_reply_id() ) )


            @php do_action( 'bbp_theme_before_reply_author_admin_details' ); @endphp

            <div class="bbp-reply-ip">@php bbp_author_ip( bbp_get_reply_id() ); @endphp</div>

            @php do_action( 'bbp_theme_after_reply_author_admin_details' ); @endphp


        @endif


        @php do_action( 'bbp_theme_after_reply_author_details' ); @endphp

    </div><!-- .bbp-reply-author -->

    <div class="bbp-reply-content">

        @php do_action( 'bbp_theme_before_reply_content' ); @endphp

        @php bbp_reply_content(); @endphp

        @php do_action( 'bbp_theme_after_reply_content' ); @endphp

    </div><!-- .bbp-reply-content -->
</div><!-- .reply -->
