{{-- Search Content Part --}}
<div id="bbpress-forums" class="bbpress-wrapper">

    @php bbp_breadcrumb(); @endphp

    @php bbp_set_query_name( bbp_get_search_rewrite_id() ); @endphp

    @php do_action( 'bbp_template_before_search' ); @endphp


    @if ( bbp_has_search_results() )


        @php bbp_get_template_part( 'pagination', 'search' ); @endphp

        @php bbp_get_template_part( 'loop',       'search' ); @endphp

        @php bbp_get_template_part( 'pagination', 'search' ); @endphp


    @elseif ( bbp_get_search_terms() )


        @php bbp_get_template_part( 'feedback',   'no-search' ); @endphp


    @else


        @php bbp_get_template_part( 'form', 'search' ); @endphp


    @endif


    @php do_action( 'bbp_template_after_search_results' ); @endphp

</div>

