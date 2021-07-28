{{-- User Profile --}}

@php( do_action( 'bbp_template_before_user_profile' ) )

<div id="bbp-user-profile" class="bbp-user-profile">
    <h2 class="entry-title">@@php bbp_displayed_user_field( 'user_nicename' ); @endphp</h2>
    <div class="bbp-user-section">
        <h3>@php esc_html_e( 'Profile', 'bbpress' ); @endphp</h3>
        <p class="bbp-user-forum-role">@php  printf( esc_html__( 'Registered: %s', 'bbpress' ), bbp_get_time_since( bbp_get_displayed_user_field( 'user_registered' ) ) ); @endphp</p>


        @if ( bbp_get_displayed_user_field( 'description' ) )


            <p class="bbp-user-description">{!! bbp_rel_nofollow( bbp_get_displayed_user_field( 'description' ) ) !!}</p>


        @endif



        @if ( bbp_get_displayed_user_field( 'user_url' ) )


            <p class="bbp-user-website">@php  printf( esc_html__( 'Website: %s', 'bbpress' ), bbp_rel_nofollow( bbp_make_clickable( bbp_get_displayed_user_field( 'user_url' ) ) ) ); @endphp</p>


        @endif


        <hr>
        <h3>@php esc_html_e( 'Forums', 'bbpress' ); @endphp</h3>


        @if ( bbp_get_user_last_posted() )


            <p class="bbp-user-last-activity">@php printf( esc_html__( 'Last Activity: %s',  'bbpress' ), bbp_get_time_since( bbp_get_user_last_posted(), false, true ) ); @endphp</p>


        @endif


        <p class="bbp-user-topic-count">@php printf( esc_html__( 'Topics Started: %s',  'bbpress' ), bbp_get_user_topic_count() ); @endphp</p>
        <p class="bbp-user-reply-count">@php printf( esc_html__( 'Replies Created: %s', 'bbpress' ), bbp_get_user_reply_count() ); @endphp</p>
        <p class="bbp-user-forum-role">@php  printf( esc_html__( 'Forum Role: %s',      'bbpress' ), bbp_get_user_display_role() ); @endphp</p>
    </div>
</div><!-- #bbp-author-topics-started -->

@php do_action( 'bbp_template_after_user_profile' );
@endphp
