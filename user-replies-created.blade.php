{{-- User Replies Created --}}
@php( do_action( 'bbp_template_before_user_replies' ) )

<div id="bbp-user-replies-created" class="bbp-user-replies-created">

    @php bbp_get_template_part( 'form', 'reply-search' ); @endphp

    <h2 class="entry-title">@php esc_html_e( 'Forum Replies Created', 'bbpress' ); @endphp</h2>
    <div class="bbp-user-section">


        @if ( bbp_get_user_replies_created() )


            @php bbp_get_template_part( 'pagination', 'replies' ); @endphp

            @php bbp_get_template_part( 'loop',       'replies' ); @endphp

            @php bbp_get_template_part( 'pagination', 'replies' ); @endphp


        @else


            @php bbp_get_template_part( 'feedback', 'no-replies' ); @endphp


        @endif


    </div>
</div><!-- #bbp-user-replies-created -->

@php do_action( 'bbp_template_after_user_replies' );
@endphp
