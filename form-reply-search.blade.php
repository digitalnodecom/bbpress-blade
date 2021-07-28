{{-- Search --}}

@php



    defined( 'ABSPATH' ) || exit;
@endphp
@if ( bbp_allow_search() )


    <div class="bbp-search-form">
        <form role="search" method="get" id="bbp-reply-search-form">
            <div>
                <label class="screen-reader-text hidden"
                       for="rs">@php esc_html_e( 'Search replies:', 'bbpress' ); @endphp</label>
                <input type="text" value="@php bbp_search_terms(); @endphp" name="rs" id="rs"/>
                <input class="button" type="submit" id="bbp_search_submit"
                       value="@php esc_attr_e( 'Search', 'bbpress' ); @endphp"/>
            </div>
        </form>
    </div>


@endif

