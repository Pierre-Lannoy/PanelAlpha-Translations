<p>Dear <strong>{{ $admin_name }}</strong>,</p>
<p>The service <strong><a
            href="{{ $admin_url }}/services/{{ $service_id }}">#{{ $service_id }} {{ $service_domain }}</a></strong> has been unsuspended successfully.</p>
@if ($remote_action)
    @if ($exception_message)
        <div style="background-color: #fbdddd; padding: 8px; border-radius: 4px; color: #e71d1d;">Unsuspend of service
            remotely failed.<br><strong>Exception message: </strong>{{ $exception_message }}</div>
    @else
        <div style="background-color: #e5edfb; padding: 8px; border-radius: 4px; color: #005eea;">Service has been
            unsuspended remotely.
        </div>
    @endif
@endif
