{{-- User Registration Form --}}
<form method="post" action="@php bbp_wp_login_action( array( 'context' => 'login_post' ) ); @endphp"
      class="bbp-login-form">
    <fieldset class="bbp-form">
        <legend>@php esc_html_e( 'Create an Account', 'bbpress' ); @endphp</legend>

        @php do_action( 'bbp_template_before_register_fields' ); @endphp

        <div class="bbp-template-notice">
            <ul>
                <li>@php esc_html_e( 'Your username must be unique, and cannot be changed later.',                        'bbpress' ); @endphp</li>
                <li>@php esc_html_e( 'We use your email address to email you a secure password and verify your account.', 'bbpress' ); @endphp</li>
            </ul>
        </div>

        <div class="bbp-username">
            <label for="user_login">@php esc_html_e( 'Username', 'bbpress' ); @endphp: </label>
            <input type="text" name="user_login" value="@php bbp_sanitize_val( 'user_login' ); @endphp" size="20"
                   id="user_login" maxlength="100" autocomplete="off"/>
        </div>

        <div class="bbp-email">
            <label for="user_email">@php esc_html_e( 'Email', 'bbpress' ); @endphp: </label>
            <input type="text" name="user_email" value="@php bbp_sanitize_val( 'user_email' ); @endphp" size="20"
                   id="user_email" maxlength="100" autocomplete="off"/>
        </div>

        @php do_action( 'register_form' ); @endphp

        <div class="bbp-submit-wrapper">

            <button type="submit" name="user-submit"
                    class="button submit user-submit">@php esc_html_e( 'Register', 'bbpress' ); @endphp</button>

            @php bbp_user_register_fields(); @endphp

        </div>

        @php do_action( 'bbp_template_after_register_fields' ); @endphp

    </fieldset>
</form>
