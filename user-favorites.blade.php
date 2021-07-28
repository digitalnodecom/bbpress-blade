{{-- User Favorites --}}

@php( do_action( 'bbp_template_before_user_favorites' ) )

<div id="bbp-user-favorites" class="bbp-user-favorites">

    @php bbp_get_template_part( 'form', 'topic-search' ); @endphp

    <h2 class="entry-title">@php esc_html_e( 'Favorite Forum Topics', 'bbpress' ); @endphp</h2>
    <div class="bbp-user-section">


        @if ( bbp_get_user_favorites() )


            @php bbp_get_template_part( 'pagination', 'topics' ); @endphp

            @php bbp_get_template_part( 'loop',       'topics' ); @endphp

            @php bbp_get_template_part( 'pagination', 'topics' ); @endphp


        @else


            @php bbp_get_template_part( 'feedback', 'no-topics' ); @endphp


        @endif


    </div>
</div><!-- #bbp-user-favorites -->

@php do_action( 'bbp_template_after_user_favorites' );
@endphp
