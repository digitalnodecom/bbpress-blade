{{-- Pagination for pages of topics (when viewing a forum) --}}
@php( do_action( 'bbp_template_before_pagination_loop' ) )

<div class="bbp-pagination">
    <div class="bbp-pagination-count">@php bbp_forum_pagination_count(); @endphp</div>
    <div class="bbp-pagination-links">@php bbp_forum_pagination_links(); @endphp</div>
</div>

@php do_action( 'bbp_template_after_pagination_loop' );
@endphp
