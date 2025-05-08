<p>Caro <strong>{{ $client_first_name }}</strong>,</p>
<p>O push para staging a partir de <strong>{{ $instance_name }}</strong> falhou.</p>
<p>Mensagem: {{ $exception_message }}</p>
<p>Detalhes da instância:</p>
<table>
    <tbody>
    <tr>
        <th>Nome do site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domínio</th>
        <td>{{ $instance_domain }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>
