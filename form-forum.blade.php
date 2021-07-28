{{-- New/Edit Forum --}}

@php



    defined( 'ABSPATH' ) || exit;
@endphp
@if ( bbp_is_forum_edit() )


    <div id="bbpress-forums" class="bbpress-wrapper">

        @php bbp_breadcrumb(); @endphp

        @php bbp_single_forum_description( array( 'forum_id' => bbp_get_forum_id() ) ); @endphp


        @endif



        @if ( bbp_current_user_can_access_create_forum_form() )


            <div id="new-forum-{{ bbp_forum_id() }}" class="bbp-forum-form">

                <form id="new-post" name="new-post" method="post">

                    @php do_action( 'bbp_theme_before_forum_form' ); @endphp

                    <fieldset class="bbp-form">
                        <legend>


                            @if ( bbp_is_forum_edit() )
                                @php
                                    printf( esc_html__( 'Now Editing &ldquo;%s&rdquo;', 'bbpress' ), bbp_get_forum_title() );
                                @endphp
                            @else
                                @php
                                    bbp_is_single_forum()
                                        ? printf( esc_html__( 'Create New Forum in &ldquo;%s&rdquo;', 'bbpress' ), bbp_get_forum_title() )
                                        : esc_html_e( 'Create New Forum', 'bbpress' );
                                @endphp
                            @endif


                        </legend>

                        @php do_action( 'bbp_theme_before_forum_form_notices' ); @endphp


                        @if ( ! bbp_is_forum_edit() && bbp_is_forum_closed() )


                            <div class="bbp-template-notice">
                                <ul>
                                    <li>@php esc_html_e( 'This forum is closed to new content, however your posting capabilities still allow you to post.', 'bbpress' ); @endphp</li>
                                </ul>
                            </div>


                        @endif



                        @if ( current_user_can( 'unfiltered_html' ) )


                            <div class="bbp-template-notice">
                                <ul>
                                    <li>@php esc_html_e( 'Your account has the ability to post unrestricted HTML content.', 'bbpress' ); @endphp</li>
                                </ul>
                            </div>


                        @endif


                        @php do_action( 'bbp_template_notices' ); @endphp

                        <div>

                            @php do_action( 'bbp_theme_before_forum_form_title' ); @endphp

                            <p>
                                <label for="bbp_forum_title">@php printf( esc_html__( 'Forum Name (Maximum Length: %d):', 'bbpress' ), bbp_get_title_max_length() ); @endphp</label><br/>
                                <input type="text" id="bbp_forum_title" value="@php bbp_form_forum_title(); @endphp"
                                       size="40" name="bbp_forum_title"
                                       maxlength="@php bbp_title_max_length(); @endphp"/>
                            </p>

                            @php do_action( 'bbp_theme_after_forum_form_title' ); @endphp

                            @php do_action( 'bbp_theme_before_forum_form_content' ); @endphp

                            @php bbp_the_content( array( 'context' => 'forum' ) ); @endphp

                            @php do_action( 'bbp_theme_after_forum_form_content' ); @endphp


                            @if ( ! ( bbp_use_wp_editor() || current_user_can( 'unfiltered_html' ) ) )


                                <p class="form-allowed-tags">
                                    <label>@php esc_html_e( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:','bbpress' ); @endphp</label><br/>
                                    <code>@php bbp_allowed_tags(); @endphp</code>
                                </p>


                            @endif



                            @if ( bbp_allow_forum_mods() && current_user_can( 'assign_moderators' ) )


                                @php do_action( 'bbp_theme_before_forum_form_mods' ); @endphp

                                <p>
                                    <label for="bbp_moderators">@php esc_html_e( 'Forum Moderators:', 'bbpress' ); @endphp</label><br/>
                                    <input type="text" value="@php bbp_form_forum_moderators(); @endphp" size="40"
                                           name="bbp_moderators" id="bbp_moderators"/>
                                </p>

                                @php do_action( 'bbp_theme_after_forum_form_mods' ); @endphp


                            @endif


                            @php do_action( 'bbp_theme_before_forum_form_type' ); @endphp

                            <p>
                                <label for="bbp_forum_type">@php esc_html_e( 'Forum Type:', 'bbpress' ); @endphp</label><br/>
                                @php bbp_form_forum_type_dropdown(); @endphp
                            </p>

                            @php do_action( 'bbp_theme_after_forum_form_type' ); @endphp

                            @php do_action( 'bbp_theme_before_forum_form_status' ); @endphp

                            <p>
                                <label for="bbp_forum_status">@php esc_html_e( 'Status:', 'bbpress' ); @endphp</label><br/>
                                @php bbp_form_forum_status_dropdown(); @endphp
                            </p>

                            @php do_action( 'bbp_theme_after_forum_form_status' ); @endphp

                            @php do_action( 'bbp_theme_before_forum_visibility_status' ); @endphp

                            <p>
                                <label for="bbp_forum_visibility">@php esc_html_e( 'Visibility:', 'bbpress' ); @endphp</label><br/>
                                @php bbp_form_forum_visibility_dropdown(); @endphp
                            </p>

                            @php do_action( 'bbp_theme_after_forum_visibility_status' ); @endphp

                            @php do_action( 'bbp_theme_before_forum_form_parent' ); @endphp

                            <p>
                                <label for="bbp_forum_parent_id">@php esc_html_e( 'Parent Forum:', 'bbpress' ); @endphp</label><br/>

                                @php
                                    bbp_dropdown( array(
                                        'select_id' => 'bbp_forum_parent_id',
                                        'show_none' => esc_html__( '&mdash; No parent &mdash;', 'bbpress' ),
                                        'selected'  => bbp_get_form_forum_parent(),
                                        'exclude'   => bbp_get_forum_id()
                                    ) );
                                @endphp
                            </p>

                            @php do_action( 'bbp_theme_after_forum_form_parent' ); @endphp

                            @php do_action( 'bbp_theme_before_forum_form_submit_wrapper' ); @endphp

                            <div class="bbp-submit-wrapper">

                                @php do_action( 'bbp_theme_before_forum_form_submit_button' ); @endphp

                                <button type="submit" id="bbp_forum_submit" name="bbp_forum_submit"
                                        class="button submit">@php esc_html_e( 'Submit', 'bbpress' ); @endphp</button>

                                @php do_action( 'bbp_theme_after_forum_form_submit_button' ); @endphp

                            </div>

                            @php do_action( 'bbp_theme_after_forum_form_submit_wrapper' ); @endphp

                        </div>

                        @php bbp_forum_form_fields(); @endphp

                    </fieldset>

                    @php do_action( 'bbp_theme_after_forum_form' ); @endphp

                </form>
            </div>


        @elseif ( bbp_is_forum_closed() )


            <div id="no-forum-{{ bbp_forum_id() }}" class="bbp-no-forum">
                <div class="bbp-template-notice">
                    <ul>
                        <li>@php printf( esc_html__( 'The forum &#8216;%s&#8217; is closed to new content.', 'bbpress' ), bbp_get_forum_title() ); @endphp</li>
                    </ul>
                </div>
            </div>


        @else


            <div id="no-forum-{{ bbp_forum_id() }}" class="bbp-no-forum">
                <div class="bbp-template-notice">
                    <ul>
                        <li>@php is_user_logged_in()
					? esc_html_e( 'You cannot create new forums.',               'bbpress' )
					: esc_html_e( 'You must be logged in to create new forums.', 'bbpress' );
                            @endphp</li>
                    </ul>
                </div>
            </div>


        @endif



        @if ( bbp_is_forum_edit() )


    </div>


@endif

