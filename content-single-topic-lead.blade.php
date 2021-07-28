{{-- Single Topic Lead Content Part --}}

@php



defined( 'ABSPATH' ) || exit;

do_action( 'bbp_template_before_lead_topic' ); @endphp

<ul id="bbp-topic-@php bbp_topic_id(); @endphp-lead" class="bbp-lead-topic">

	<li class="bbp-header">

		<div class="bbp-topic-author">@php esc_html_e( 'Creator',  'bbpress' ); @endphp</div><!-- .bbp-topic-author -->

		<div class="bbp-topic-content">

			@php esc_html_e( 'Topic', 'bbpress' ); @endphp

		</div><!-- .bbp-topic-content -->

	</li><!-- .bbp-header -->

	<li class="bbp-body">

		<div class="bbp-topic-header">

			<div class="bbp-meta">

				<span class="bbp-topic-post-date">@php bbp_topic_post_date(); @endphp</span>

				<a href="@php bbp_topic_permalink(); @endphp" class="bbp-topic-permalink">#@php bbp_topic_id(); @endphp</a>

				@php do_action( 'bbp_theme_before_topic_admin_links' ); @endphp

				@php bbp_topic_admin_links(); @endphp

				@php do_action( 'bbp_theme_after_topic_admin_links' ); @endphp

			</div><!-- .bbp-meta -->

		</div><!-- .bbp-topic-header -->

		<div id="post-@php bbp_topic_id(); @endphp" @php bbp_topic_class(); @endphp>

			<div class="bbp-topic-author">

				@php do_action( 'bbp_theme_before_topic_author_details' ); @endphp

				@php bbp_topic_author_link( array( 'show_role' => true ) ); @endphp

				
@if ( current_user_can( 'moderate', bbp_get_reply_id() ) )


					@php do_action( 'bbp_theme_before_topic_author_admin_details' ); @endphp

					<div class="bbp-topic-ip">@php bbp_author_ip( bbp_get_topic_id() ); @endphp</div>

					@php do_action( 'bbp_theme_after_topic_author_admin_details' ); @endphp

				
@endif


				@php do_action( 'bbp_theme_after_topic_author_details' ); @endphp

			</div><!-- .bbp-topic-author -->

			<div class="bbp-topic-content">

				@php do_action( 'bbp_theme_before_topic_content' ); @endphp

				@php bbp_topic_content(); @endphp

				@php do_action( 'bbp_theme_after_topic_content' ); @endphp

			</div><!-- .bbp-topic-content -->

		</div><!-- #post-@php bbp_topic_id(); @endphp -->

	</li><!-- .bbp-body -->

	<li class="bbp-footer">

		<div class="bbp-topic-author">@php esc_html_e( 'Creator',  'bbpress' ); @endphp</div>

		<div class="bbp-topic-content">

			@php esc_html_e( 'Topic', 'bbpress' ); @endphp

		</div><!-- .bbp-topic-content -->

	</li>

</ul><!-- #bbp-topic-@php bbp_topic_id(); @endphp-lead -->

@php do_action( 'bbp_template_after_lead_topic' );
@endphp
