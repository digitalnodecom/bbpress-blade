{{-- bbPress User Profile Edit Part --}}
<form id="bbp-your-profile" method="post" enctype="multipart/form-data">

    <h2 class="entry-title">@php esc_html_e( 'Name', 'bbpress' ) @endphp</h2>

    @php do_action( 'bbp_user_edit_before' ); @endphp

    <fieldset class="bbp-form">
        <legend>@php esc_html_e( 'Name', 'bbpress' ) @endphp</legend>

        @php do_action( 'bbp_user_edit_before_name' ); @endphp

        <div>
            <label for="first_name">@php esc_html_e( 'First Name', 'bbpress' ) @endphp</label>
            <input type="text" name="first_name" id="first_name"
                   value="@php bbp_displayed_user_field( 'first_name', 'edit' ); @endphp" class="regular-text"/>
        </div>

        <div>
            <label for="last_name">@php esc_html_e( 'Last Name', 'bbpress' ) @endphp</label>
            <input type="text" name="last_name" id="last_name"
                   value="@php bbp_displayed_user_field( 'last_name', 'edit' ); @endphp" class="regular-text"/>
        </div>

        <div>
            <label for="nickname">@php esc_html_e( 'Nickname', 'bbpress' ); @endphp</label>
            <input type="text" name="nickname" id="nickname"
                   value="@php bbp_displayed_user_field( 'nickname', 'edit' ); @endphp" class="regular-text"/>
        </div>

        <div>
            <label for="display_name">@php esc_html_e( 'Display Name', 'bbpress' ) @endphp</label>

            @php bbp_edit_user_display_name(); @endphp

        </div>

        @php do_action( 'bbp_user_edit_after_name' ); @endphp

    </fieldset>

    <h2 class="entry-title">@php esc_html_e( 'Contact Info', 'bbpress' ) @endphp</h2>

    <fieldset class="bbp-form">
        <legend>@php esc_html_e( 'Contact Info', 'bbpress' ) @endphp</legend>

        @php do_action( 'bbp_user_edit_before_contact' ); @endphp

        <div>
            <label for="url">@php esc_html_e( 'Website', 'bbpress' ) @endphp</label>
            <input type="text" name="url" id="url" value="@php bbp_displayed_user_field( 'user_url', 'edit' ); @endphp"
                   maxlength="200" class="regular-text code"/>
        </div>


        @foreach ( bbp_edit_user_contact_methods() as $name => $desc )


            <div>
                <label for="{!! esc_attr( $name ) !!}">{!! apply_filters( 'user_' . $name . '_label', $desc ) !!}</label>
                <input type="text" name="{!! esc_attr( $name ) !!}" id="{!! esc_attr( $name ) !!}"
                       value="@php bbp_displayed_user_field( $name, 'edit' ); @endphp" class="regular-text"/>
            </div>


        @endforeach


        @php do_action( 'bbp_user_edit_after_contact' ); @endphp

    </fieldset>

    <h2 class="entry-title">@php bbp_is_user_home_edit()
		? esc_html_e( 'About Yourself', 'bbpress' )
		: esc_html_e( 'About the user', 'bbpress' );
        @endphp</h2>

    <fieldset class="bbp-form">
        <legend>@php bbp_is_user_home_edit()
			? esc_html_e( 'About Yourself', 'bbpress' )
			: esc_html_e( 'About the user', 'bbpress' );
            @endphp</legend>

        @php do_action( 'bbp_user_edit_before_about' ); @endphp

        <div>
            <label for="description">@php esc_html_e( 'Biographical Info', 'bbpress' ); @endphp</label>
            <textarea name="description" id="description" rows="5"
                      cols="30">@php bbp_displayed_user_field( 'description', 'edit' ); @endphp</textarea>
        </div>

        @php do_action( 'bbp_user_edit_after_about' ); @endphp

    </fieldset>

    <h2 class="entry-title">@php esc_html_e( 'Account', 'bbpress' ) @endphp</h2>

    <fieldset class="bbp-form">
        <legend>@php esc_html_e( 'Account', 'bbpress' ) @endphp</legend>

        @php do_action( 'bbp_user_edit_before_account' ); @endphp

        <div>
            <label for="user_login">@php esc_html_e( 'Username', 'bbpress' ); @endphp</label>
            <input type="text" name="user_login" id="user_login"
                   value="@php bbp_displayed_user_field( 'user_login', 'edit' ); @endphp" maxlength="100"
                   disabled="disabled" class="regular-text"/>
        </div>

        <div>
            <label for="email">@php esc_html_e( 'Email', 'bbpress' ); @endphp</label>
            <input type="text" name="email" id="email"
                   value="@php bbp_displayed_user_field( 'user_email', 'edit' ); @endphp" maxlength="100"
                   class="regular-text" autocomplete="off"/>
        </div>

        @php bbp_get_template_part( 'form', 'user-passwords' ); @endphp

        <div>
            <label for="url">@php esc_html_e( 'Language', 'bbpress' ) @endphp</label>

            @php bbp_edit_user_language(); @endphp

        </div>

        @php do_action( 'bbp_user_edit_after_account' ); @endphp

    </fieldset>


    @if ( ! bbp_is_user_home_edit() && current_user_can( 'promote_user', bbp_get_displayed_user_id() ) )


        <h2 class="entry-title">@php esc_html_e( 'User Role', 'bbpress' ) @endphp</h2>

        <fieldset class="bbp-form">
            <legend>@php esc_html_e( 'User Role', 'bbpress' ); @endphp</legend>

            @php do_action( 'bbp_user_edit_before_role' ); @endphp


            @if ( is_multisite() && is_super_admin() && current_user_can( 'manage_network_options' ) )


                <div>
                    <label for="super_admin">@php esc_html_e( 'Network Role', 'bbpress' ); @endphp</label>
                    <label>
                        <input class="checkbox" type="checkbox" id="super_admin"
                               name="super_admin"@php checked( is_super_admin( bbp_get_displayed_user_id() ) ); @endphp />
                        @php esc_html_e( 'Grant this user super admin privileges for the Network.', 'bbpress' ); @endphp
                    </label>
                </div>


            @endif


            @php bbp_get_template_part( 'form', 'user-roles' ); @endphp

            @php do_action( 'bbp_user_edit_after_role' ); @endphp

        </fieldset>


    @endif


    @php do_action( 'bbp_user_edit_after' ); @endphp

    <fieldset class="submit">
        <legend>@php esc_html_e( 'Save Changes', 'bbpress' ); @endphp</legend>
        <div>

            @php bbp_edit_user_form_fields(); @endphp

            <button type="submit" id="bbp_user_edit_submit" name="bbp_user_edit_submit"
                    class="button submit user-submit">@php bbp_is_user_home_edit()
				? esc_html_e( 'Update Profile', 'bbpress' )
				: esc_html_e( 'Update User',    'bbpress' );
                @endphp</button>
        </div>
    </fieldset>
</form>
