{{-- Topics Loop - Single --}}
<ul id="bbp-topic-@php bbp_topic_id(); @endphp" @php bbp_topic_class(); @endphp>
    <li class="bbp-topic-title">


        @if ( bbp_is_user_home() )



            @if ( bbp_is_favorites() )


                <span class="bbp-row-actions">

					@php do_action( 'bbp_theme_before_topic_favorites_action' ); @endphp

                    @php bbp_topic_favorite_link( array( 'before' => '', 'favorite' => '+', 'favorited' => '&times;' ) ); @endphp

                    @php do_action( 'bbp_theme_after_topic_favorites_action' ); @endphp

				</span>


            @elseif ( bbp_is_subscriptions() )


                <span class="bbp-row-actions">

					@php do_action( 'bbp_theme_before_topic_subscription_action' ); @endphp

                    @php bbp_topic_subscription_link( array( 'before' => '', 'subscribe' => '+', 'unsubscribe' => '&times;' ) ); @endphp

                    @php do_action( 'bbp_theme_after_topic_subscription_action' ); @endphp

				</span>


            @endif



        @endif


        @php do_action( 'bbp_theme_before_topic_title' ); @endphp

        <a class="bbp-topic-permalink" href="@php bbp_topic_permalink(); @endphp">@php bbp_topic_title(); @endphp</a>

        @php do_action( 'bbp_theme_after_topic_title' ); @endphp

        @php bbp_topic_pagination(); @endphp

        @php do_action( 'bbp_theme_before_topic_meta' ); @endphp

        <p class="bbp-topic-meta">

            @php do_action( 'bbp_theme_before_topic_started_by' ); @endphp

            <span class="bbp-topic-started-by">@php printf( esc_html__( 'Started by: %1$s', 'bbpress' ), bbp_get_topic_author_link( array( 'size' => '14' ) ) ); @endphp</span>

            @php do_action( 'bbp_theme_after_topic_started_by' ); @endphp


            @if ( ! bbp_is_single_forum() || ( bbp_get_topic_forum_id() !== bbp_get_forum_id() ) )


                @php do_action( 'bbp_theme_before_topic_started_in' ); @endphp

                <span class="bbp-topic-started-in">@php printf( esc_html__( 'in: %1$s', 'bbpress' ), '<a href="' . bbp_get_forum_permalink( bbp_get_topic_forum_id() ) . '">' . bbp_get_forum_title( bbp_get_topic_forum_id() ) . '</a>' ); @endphp</span>
                @php do_action( 'bbp_theme_after_topic_started_in' ); @endphp


            @endif


        </p>

        @php do_action( 'bbp_theme_after_topic_meta' ); @endphp

        @php bbp_topic_row_actions(); @endphp

    </li>

    <li class="bbp-topic-voice-count">@php bbp_topic_voice_count(); @endphp</li>

    <li class="bbp-topic-reply-count">@php bbp_show_lead_topic() ? bbp_topic_reply_count() : bbp_topic_post_count(); @endphp</li>

    <li class="bbp-topic-freshness">

        @php do_action( 'bbp_theme_before_topic_freshness_link' ); @endphp

        @php bbp_topic_freshness_link(); @endphp

        @php do_action( 'bbp_theme_after_topic_freshness_link' ); @endphp

        <p class="bbp-topic-meta">

            @php do_action( 'bbp_theme_before_topic_freshness_author' ); @endphp

            <span class="bbp-topic-freshness-author">@php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'size' => 14 ) ); @endphp</span>

            @php do_action( 'bbp_theme_after_topic_freshness_author' ); @endphp

        </p>
    </li>
</ul><!-- #bbp-topic-@php bbp_topic_id(); @endphp -->
