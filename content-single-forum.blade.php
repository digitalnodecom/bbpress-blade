{{-- Single Forum Content Part --}}

<div id="bbpress-forums" class="bbpress-wrapper">

    @php bbp_breadcrumb(); @endphp

    @php bbp_forum_subscription_link(); @endphp

    @php do_action( 'bbp_template_before_single_forum' ); @endphp


    @if ( post_password_required() )


        @php bbp_get_template_part( 'form', 'protected' ); @endphp


    @else


        @php bbp_single_forum_description(); @endphp


        @if ( bbp_has_forums() )


            @php bbp_get_template_part( 'loop', 'forums' ); @endphp


        @endif



        @if ( ! bbp_is_forum_category() && bbp_has_topics() )


            @php bbp_get_template_part( 'pagination', 'topics'    ); @endphp

            @php bbp_get_template_part( 'loop',       'topics'    ); @endphp

            @php bbp_get_template_part( 'pagination', 'topics'    ); @endphp

            @php bbp_get_template_part( 'form',       'topic'     ); @endphp


        @elseif ( ! bbp_is_forum_category() )


            @php bbp_get_template_part( 'feedback',   'no-topics' ); @endphp

            @php bbp_get_template_part( 'form',       'topic'     ); @endphp


        @endif



    @endif


    @php do_action( 'bbp_template_after_single_forum' ); @endphp

</div>
