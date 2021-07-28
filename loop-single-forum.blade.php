{{-- Forums Loop - Single Forum --}}
<ul id="bbp-forum-@php bbp_forum_id(); @endphp" @php bbp_forum_class(); @endphp>
    <li class="bbp-forum-info">


        @if ( bbp_is_user_home() && bbp_is_subscriptions() )


            <span class="bbp-row-actions">

				@php do_action( 'bbp_theme_before_forum_subscription_action' ); @endphp

                @php bbp_forum_subscription_link( array( 'before' => '', 'subscribe' => '+', 'unsubscribe' => '&times;' ) ); @endphp

                @php do_action( 'bbp_theme_after_forum_subscription_action' ); @endphp

			</span>


        @endif


        @php do_action( 'bbp_theme_before_forum_title' ); @endphp

        <a class="bbp-forum-title" href="@php bbp_forum_permalink(); @endphp">@php bbp_forum_title(); @endphp</a>

        @php do_action( 'bbp_theme_after_forum_title' ); @endphp

        @php do_action( 'bbp_theme_before_forum_description' ); @endphp

        <div class="bbp-forum-content">@php bbp_forum_content(); @endphp</div>

        @php do_action( 'bbp_theme_after_forum_description' ); @endphp

        @php do_action( 'bbp_theme_before_forum_sub_forums' ); @endphp

        @php bbp_list_forums(); @endphp

        @php do_action( 'bbp_theme_after_forum_sub_forums' ); @endphp

        @php bbp_forum_row_actions(); @endphp

    </li>

    <li class="bbp-forum-topic-count">@php bbp_forum_topic_count(); @endphp</li>

    <li class="bbp-forum-reply-count">@php bbp_show_lead_topic() ? bbp_forum_reply_count() : bbp_forum_post_count(); @endphp</li>

    <li class="bbp-forum-freshness">

        @php do_action( 'bbp_theme_before_forum_freshness_link' ); @endphp

        @php bbp_forum_freshness_link(); @endphp

        @php do_action( 'bbp_theme_after_forum_freshness_link' ); @endphp

        <p class="bbp-topic-meta">

            @php do_action( 'bbp_theme_before_topic_author' ); @endphp

            <span class="bbp-topic-freshness-author">@php bbp_author_link( array( 'post_id' => bbp_get_forum_last_active_id(), 'size' => 14 ) ); @endphp</span>

            @php do_action( 'bbp_theme_after_topic_author' ); @endphp

        </p>
    </li>
</ul><!-- #bbp-forum-@php bbp_forum_id(); @endphp -->
