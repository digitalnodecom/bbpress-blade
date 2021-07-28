{{-- Topics Loop --}}

@php



    defined( 'ABSPATH' ) || exit;

    do_action( 'bbp_template_before_topics_loop' ); @endphp

<ul id="bbp-forum-@php bbp_forum_id(); @endphp" class="bbp-topics">
    <li class="bbp-header">
        <ul class="forum-titles">
            <li class="bbp-topic-title">@php esc_html_e( 'Topic', 'bbpress' ); @endphp</li>
            <li class="bbp-topic-voice-count">@php esc_html_e( 'Voices', 'bbpress' ); @endphp</li>
            <li class="bbp-topic-reply-count">@php bbp_show_lead_topic()
				? esc_html_e( 'Replies', 'bbpress' )
				: esc_html_e( 'Posts',   'bbpress' );
                @endphp</li>
            <li class="bbp-topic-freshness">@php esc_html_e( 'Last Post', 'bbpress' ); @endphp</li>
        </ul>
    </li>

    <li class="bbp-body">


        @while ( bbp_topics() )
            @php bbp_the_topic(); @endphp

            @php bbp_get_template_part( 'loop', 'single-topic' ); @endphp


        @endwhile


    </li>

    <li class="bbp-footer">
        <div class="tr">
            <p>
                <span class="td colspan{!! ( bbp_is_user_home() && ( bbp_is_favorites() || bbp_is_subscriptions() ) ) ? '5' : '4' !!}">&nbsp;</span>
            </p>
        </div><!-- .tr -->
    </li>
</ul><!-- #bbp-forum-@php bbp_forum_id(); @endphp -->

@php do_action( 'bbp_template_after_topics_loop' );
@endphp
