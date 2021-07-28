{{-- User Topics Created --}}
@php( do_action( 'bbp_template_before_user_topics_created' ) )

<div id="bbp-user-topics-started" class="bbp-user-topics-started">

    @php bbp_get_template_part( 'form', 'topic-search' ); @endphp

    <h2 class="entry-title">@php esc_html_e( 'Forum Topics Started', 'bbpress' ); @endphp</h2>
    <div class="bbp-user-section">


        @if ( bbp_get_user_topics_started() )


            @php bbp_get_template_part( 'pagination', 'topics' ); @endphp

            @php bbp_get_template_part( 'loop',       'topics' ); @endphp

            @php bbp_get_template_part( 'pagination', 'topics' ); @endphp


        @else


            @php bbp_get_template_part( 'feedback', 'no-topics' ); @endphp


        @endif


    </div>
</div><!-- #bbp-user-topics-started -->

@php do_action( 'bbp_template_after_user_topics_created' );
@endphp
