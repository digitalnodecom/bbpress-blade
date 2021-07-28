{{-- Replies Loop --}}
@php( do_action( 'bbp_template_before_replies_loop' ) )

<ul id="topic-{{ bbp_topic_id() }}-replies" class="forums bbp-replies">

	<li class="bbp-header">
		<div class="bbp-reply-author">@php esc_html_e( 'Author',  'bbpress' ); @endphp</div><!-- .bbp-reply-author -->
		<div class="bbp-reply-content">@php bbp_show_lead_topic()
			? esc_html_e( 'Replies', 'bbpress' )
			: esc_html_e( 'Posts',   'bbpress' );
		@endphp</div><!-- .bbp-reply-content -->
	</li><!-- .bbp-header -->

	<li class="bbp-body">

		
@if ( bbp_thread_replies() )


			@php bbp_list_replies(); @endphp

		
@else


			
@while ( bbp_replies() )
@php bbp_the_reply(); @endphp

				@php bbp_get_template_part( 'loop', 'single-reply' ); @endphp

			
@endwhile


		
@endif


	</li><!-- .bbp-body -->

	<li class="bbp-footer">
		<div class="bbp-reply-author">@php esc_html_e( 'Author',  'bbpress' ); @endphp</div>
		<div class="bbp-reply-content">@php bbp_show_lead_topic()
			? esc_html_e( 'Replies', 'bbpress' )
			: esc_html_e( 'Posts',   'bbpress' );
		@endphp</div><!-- .bbp-reply-content -->
	</li><!-- .bbp-footer -->
</ul><!-- #topic-{{ bbp_topic_id() }}-replies -->

@php do_action( 'bbp_template_after_replies_loop' );
@endphp
