{{-- Forums Loop --}}
@php( do_action( 'bbp_template_before_forums_loop' ) )

<ul id="forums-list-{{ bbp_forum_id() }}" class="bbp-forums">

    <li class="bbp-header">

        <ul class="forum-titles">
            <li class="bbp-forum-info">@php esc_html_e( 'Forum', 'bbpress' ); @endphp</li>
            <li class="bbp-forum-topic-count">@php esc_html_e( 'Topics', 'bbpress' ); @endphp</li>
            <li class="bbp-forum-reply-count">@php bbp_show_lead_topic()
				? esc_html_e( 'Replies', 'bbpress' )
				: esc_html_e( 'Posts',   'bbpress' );
                @endphp</li>
            <li class="bbp-forum-freshness">@php esc_html_e( 'Last Post', 'bbpress' ); @endphp</li>
        </ul>

    </li><!-- .bbp-header -->

    <li class="bbp-body">


        @while ( bbp_forums() )
            @php bbp_the_forum(); @endphp

            @php bbp_get_template_part( 'loop', 'single-forum' ); @endphp


        @endwhile


    </li><!-- .bbp-body -->

    <li class="bbp-footer">

        <div class="tr">
            <p class="td colspan4">&nbsp;</p>
        </div><!-- .tr -->

    </li><!-- .bbp-footer -->

</ul><!-- .forums-directory -->

@php do_action( 'bbp_template_after_forums_loop' );
@endphp
