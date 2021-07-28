{{-- Anonymous User --}}

@php



    defined( 'ABSPATH' ) || exit;
@endphp
@if ( bbp_current_user_can_access_anonymous_user_form() )


    @php do_action( 'bbp_theme_before_anonymous_form' ); @endphp

    <fieldset class="bbp-form">
        <legend>@php ( bbp_is_topic_edit() || bbp_is_reply_edit() ) ? esc_html_e( 'Author Information', 'bbpress' ) :
            esc_html_e( 'Your information:', 'bbpress' ); @endphp</legend>

        @php do_action( 'bbp_theme_anonymous_form_extras_top' ); @endphp

        <p>
            <label for="bbp_anonymous_author">@php esc_html_e( 'Name (required):', 'bbpress' ); @endphp</label><br/>
            <input type="text" id="bbp_anonymous_author" value="@php bbp_author_display_name(); @endphp" size="40"
                   maxlength="100" name="bbp_anonymous_name" autocomplete="off"/>
        </p>

        <p>
            <label for="bbp_anonymous_email">@php esc_html_e( 'Mail (will not be published) (required):', 'bbpress' ); @endphp</label><br/>
            <input type="text" id="bbp_anonymous_email" value="@php bbp_author_email(); @endphp" size="40"
                   maxlength="100" name="bbp_anonymous_email"/>
        </p>

        <p>
            <label for="bbp_anonymous_website">@php esc_html_e( 'Website:', 'bbpress' ); @endphp</label><br/>
            <input type="text" id="bbp_anonymous_website" value="@php bbp_author_url(); @endphp" size="40"
                   maxlength="200" name="bbp_anonymous_website"/>
        </p>

        @php do_action( 'bbp_theme_anonymous_form_extras_bottom' ); @endphp

    </fieldset>

    @php do_action( 'bbp_theme_after_anonymous_form' ); @endphp


@endif

