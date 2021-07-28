{{-- Search Loop - Single Forum --}}
<div class="bbp-forum-header">
    <div class="bbp-meta">
        <span class="bbp-forum-post-date">@php printf( esc_html__( 'Last updated %s', 'bbpress' ), bbp_get_forum_last_active_time() ); @endphp</span>
        <a href="@php bbp_forum_permalink(); @endphp" class="bbp-forum-permalink">#{{ bbp_forum_id() }}</a>
    </div><!-- .bbp-meta -->

    <div class="bbp-forum-title">

        @php do_action( 'bbp_theme_before_forum_title' ); @endphp

        <h3>@php esc_html_e( 'Forum:', 'bbpress' ); @endphp
            <a href="@php bbp_forum_permalink(); @endphp">@php bbp_forum_title(); @endphp</a></h3>

        @php do_action( 'bbp_theme_after_forum_title' ); @endphp

    </div><!-- .bbp-forum-title -->
</div><!-- .bbp-forum-header -->

<div id="post-{{ bbp_forum_id() }}" @php bbp_forum_class(); @endphp>
    <div class="bbp-forum-content">

        @php do_action( 'bbp_theme_before_forum_content' ); @endphp

        @php bbp_forum_content(); @endphp

        @php do_action( 'bbp_theme_after_forum_content' ); @endphp

    </div><!-- .bbp-forum-content -->
</div><!-- #post-{{ bbp_forum_id() }} -->
