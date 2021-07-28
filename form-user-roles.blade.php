{{-- User Roles Profile Edit Part --}}
<div>
    <label for="role">@php esc_html_e( 'Blog Role', 'bbpress' ) @endphp</label>

    @php bbp_edit_user_blog_role(); @endphp

</div>

<div>
    <label for="forum-role">@php esc_html_e( 'Forum Role', 'bbpress' ) @endphp</label>

    @php bbp_edit_user_forums_role(); @endphp

</div>
