{{-- User Details --}}
@php( do_action( 'bbp_template_before_user_details' ) )

<div id="bbp-single-user-details">
    <div id="bbp-user-avatar">
		<span class='vcard'>
			<a class="url fn n" href="@php bbp_user_profile_url(); @endphp"
               title="@php bbp_displayed_user_field( 'display_name' ); @endphp" rel="me">
				{!! get_avatar( bbp_get_displayed_user_field( 'user_email', 'raw' ), apply_filters( 'bbp_single_user_details_avatar_size', 150 ) ) !!}
			</a>
		</span>
    </div>

    @php do_action( 'bbp_template_before_user_details_menu_items' ); @endphp

    <div id="bbp-user-navigation">
        <ul>
            <li class="
@if ( bbp_is_single_user_profile() )
                    current
@endif
                    ">
				<span class="vcard bbp-user-profile-link">
					<a class="url fn n" href="@php bbp_user_profile_url(); @endphp"
                       title="@php printf( esc_attr__( "%s's Profile", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); @endphp"
                       rel="me">@php esc_html_e( 'Profile', 'bbpress' ); @endphp</a>
				</span>
            </li>

            <li class="
@if ( bbp_is_single_user_topics() )
                    current
@endif
                    ">
				<span class='bbp-user-topics-created-link'>
					<a href="@php bbp_user_topics_created_url(); @endphp"
                       title="@php printf( esc_attr__( "%s's Topics Started", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); @endphp">@php esc_html_e( 'Topics Started', 'bbpress' ); @endphp</a>
				</span>
            </li>

            <li class="
@if ( bbp_is_single_user_replies() )
                    current
@endif
                    ">
				<span class='bbp-user-replies-created-link'>
					<a href="@php bbp_user_replies_created_url(); @endphp"
                       title="@php printf( esc_attr__( "%s's Replies Created", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); @endphp">@php esc_html_e( 'Replies Created', 'bbpress' ); @endphp</a>
				</span>
            </li>


            @if ( bbp_is_engagements_active() )

                <li class="
@if ( bbp_is_single_user_engagements() )
                        current
@endif
                        ">
					<span class='bbp-user-engagements-created-link'>
						<a href="@php bbp_user_engagements_url(); @endphp"
                           title="@php printf( esc_attr__( "%s's Engagements", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); @endphp">@php esc_html_e( 'Engagements', 'bbpress' ); @endphp</a>
					</span>
                </li>

            @endif



            @if ( bbp_is_favorites_active() )

                <li class="
@if ( bbp_is_favorites() )
                        current
@endif
                        ">
					<span class="bbp-user-favorites-link">
						<a href="@php bbp_favorites_permalink(); @endphp"
                           title="@php printf( esc_attr__( "%s's Favorites", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); @endphp">@php esc_html_e( 'Favorites', 'bbpress' ); @endphp</a>
					</span>
                </li>

            @endif



            @if ( bbp_is_user_home() || current_user_can( 'edit_user', bbp_get_displayed_user_id() ) )



                @if ( bbp_is_subscriptions_active() )

                    <li class="
@if ( bbp_is_subscriptions() )
                            current
@endif
                            ">
						<span class="bbp-user-subscriptions-link">
							<a href="@php bbp_subscriptions_permalink(); @endphp"
                               title="@php printf( esc_attr__( "%s's Subscriptions", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); @endphp">@php esc_html_e( 'Subscriptions', 'bbpress' ); @endphp</a>
						</span>
                    </li>

                @endif


                <li class="
@if ( bbp_is_single_user_edit() )
                        current
@endif
                        ">
					<span class="bbp-user-edit-link">
						<a href="@php bbp_user_profile_edit_url(); @endphp"
                           title="@php printf( esc_attr__( "Edit %s's Profile", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); @endphp">@php esc_html_e( 'Edit', 'bbpress' ); @endphp</a>
					</span>
                </li>


            @endif


        </ul>

        @php do_action( 'bbp_template_after_user_details_menu_items' ); @endphp

    </div>
</div>

@php do_action( 'bbp_template_after_user_details' );
@endphp
