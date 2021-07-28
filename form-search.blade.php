{{-- Search --}}

@php



    defined( 'ABSPATH' ) || exit;
@endphp
@if ( bbp_allow_search() )


    <div class="bbp-search-form">
        <form role="search" method="get" id="bbp-search-form">
            <div>
                <label class="screen-reader-text hidden"
                       for="bbp_search">@php esc_html_e( 'Search for:', 'bbpress' ); @endphp</label>
                <input type="hidden" name="action" value="bbp-search-request"/>
                <input type="text" value="@php bbp_search_terms(); @endphp" name="bbp_search" id="bbp_search"/>
                <input class="button" type="submit" id="bbp_search_submit"
                       value="@php esc_attr_e( 'Search', 'bbpress' ); @endphp"/>
            </div>
        </form>
    </div>


@endif
