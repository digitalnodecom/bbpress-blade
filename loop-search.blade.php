{{-- Search Loop --}}

@php( do_action( 'bbp_template_before_search_results_loop' ) )

<ul id="bbp-search-results" class="forums bbp-search-results">

    <li class="bbp-header">

        <div class="bbp-search-author">@php esc_html_e( 'Author',  'bbpress' ); @endphp</div><!-- .bbp-reply-author -->

        <div class="bbp-search-content">

            @php esc_html_e( 'Search Results', 'bbpress' ); @endphp

        </div><!-- .bbp-search-content -->

    </li><!-- .bbp-header -->

    <li class="bbp-body">


        @while ( bbp_search_results() )
            @php bbp_the_search_result(); @endphp

            @php bbp_get_template_part( 'loop', 'search-' . get_post_type() ); @endphp


        @endwhile


    </li><!-- .bbp-body -->

    <li class="bbp-footer">

        <div class="bbp-search-author">@php esc_html_e( 'Author',  'bbpress' ); @endphp</div>

        <div class="bbp-search-content">

            @php esc_html_e( 'Search Results', 'bbpress' ); @endphp

        </div><!-- .bbp-search-content -->

    </li><!-- .bbp-footer -->

</ul><!-- #bbp-search-results -->

@php do_action( 'bbp_template_after_search_results_loop' );
@endphp