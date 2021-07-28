{{-- Search --}}

@if ( bbp_allow_search() )


    <div class="bbp-search-form">
        <form role="search" method="get" id="bbp-topic-search-form">
            <div>
                <label class="screen-reader-text hidden"
                       for="ts">@php esc_html_e( 'Search topics:', 'bbpress' ); @endphp</label>
                <input type="text" value="@php bbp_search_terms(); @endphp" name="ts" id="ts"/>
                <input class="button" type="submit" id="bbp_search_submit"
                       value="@php esc_attr_e( 'Search', 'bbpress' ); @endphp"/>
            </div>
        </form>
    </div>


@endif

