{{-- User Engagements --}}

@php( do_action( 'bbp_template_before_user_engagements' ) )

<div id="bbp-user-engagements" class="bbp-user-engagements">

    @php bbp_get_template_part( 'form', 'topic-search' ); @endphp

    <h2 class="entry-title">@php esc_html_e( 'Topics Engaged In', 'bbpress' ); @endphp</h2>
    <div class="bbp-user-section">


        @if ( bbp_get_user_engagements() )


            @php bbp_get_template_part( 'pagination', 'topics' ); @endphp

            @php bbp_get_template_part( 'loop',       'topics' ); @endphp

            @php bbp_get_template_part( 'pagination', 'topics' ); @endphp


        @else


            @php bbp_get_template_part( 'feedback', 'no-topics' ); @endphp


        @endif


    </div>
</div><!-- #bbp-user-engagements -->

@php do_action( 'bbp_template_after_user_engagements' );
@endphp
