<p>Dear <strong>{{ $client_first_name }}</strong>,</p>
<p>The update of the {{ $instance_name }} instance failed.</p>
<p>Message: {{ $exception_message }}</p>
<p>Instance details:</p>
<table>
    <tbody>
    <tr>
        <th>Site Name</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domain</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <tr>
        <th>Url</th>
        <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
