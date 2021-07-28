{{-- User Subscriptions --}}
@php( do_action( 'bbp_template_before_user_subscriptions' ) )

@if ( bbp_is_subscriptions_active() )



    @if ( bbp_is_user_home() || current_user_can( 'edit_user', bbp_get_displayed_user_id() ) )


        <div id="bbp-user-subscriptions" class="bbp-user-subscriptions">

            @php bbp_get_template_part( 'form', 'topic-search' ); @endphp

            <h2 class="entry-title">@php esc_html_e( 'Subscribed Forums', 'bbpress' ); @endphp</h2>
            <div class="bbp-user-section">


                @if ( bbp_get_user_forum_subscriptions() )


                    @php bbp_get_template_part( 'loop', 'forums' ); @endphp


                @else


                    @php bbp_get_template_part( 'feedback', 'no-forums' ); @endphp


                @endif


            </div>

            <h2 class="entry-title">@php esc_html_e( 'Subscribed Topics', 'bbpress' ); @endphp</h2>
            <div class="bbp-user-section">


                @if ( bbp_get_user_topic_subscriptions() )


                    @php bbp_get_template_part( 'pagination', 'topics' ); @endphp

                    @php bbp_get_template_part( 'loop',       'topics' ); @endphp

                    @php bbp_get_template_part( 'pagination', 'topics' ); @endphp


                @else


                    @php bbp_get_template_part( 'feedback', 'no-topics' ); @endphp


                @endif


            </div>
        </div><!-- #bbp-user-subscriptions -->


    @endif



@endif


@php do_action( 'bbp_template_after_user_subscriptions' );
@endphp
