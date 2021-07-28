{{-- Single Topic Content Part --}}
<div id="bbpress-forums" class="bbpress-wrapper">

    @php bbp_breadcrumb(); @endphp

    @php bbp_topic_subscription_link(); @endphp

    @php bbp_topic_favorite_link(); @endphp

    @php do_action( 'bbp_template_before_single_topic' ); @endphp


    @if ( post_password_required() )


        @php bbp_get_template_part( 'form', 'protected' ); @endphp


    @else


        @php bbp_topic_tag_list(); @endphp

        @php bbp_single_topic_description(); @endphp


        @if ( bbp_show_lead_topic() )


            @php bbp_get_template_part( 'content', 'single-topic-lead' ); @endphp


        @endif



        @if ( bbp_has_replies() )


            @php bbp_get_template_part( 'pagination', 'replies' ); @endphp

            @php bbp_get_template_part( 'loop',       'replies' ); @endphp

            @php bbp_get_template_part( 'pagination', 'replies' ); @endphp


        @endif


        @php bbp_get_template_part( 'form', 'reply' ); @endphp


    @endif


    @php bbp_get_template_part( 'alert', 'topic-lock' ); @endphp

    @php do_action( 'bbp_template_after_single_topic' ); @endphp

</div>
