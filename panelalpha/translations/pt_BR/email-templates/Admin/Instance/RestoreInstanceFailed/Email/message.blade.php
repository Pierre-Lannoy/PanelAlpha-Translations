<p>Caro <strong>{{ $admin_name }}</strong>,</p>
<p>A instância de restauração <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                                   target="_blank">{{ $instance_name }}</a></strong> de
    <strong>{{ $backup_name }}</strong> falha no backup.</p>
<p>Mensagem: {{ $exception_message }}</p>
<p>Detalhes do backup:</p>
<table>
    <tbody>
    <tr>
        <th>Nome</th>
        <td>{{ $backup_name }}</td>
    </tr>
    <tr>
        <th>Tipo</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Tamanho</th>
        <td>{{ $backup_size }} MB</td>
    </tr>
    <tr> <th>Versão
        <th>Versão</th>
        <td>{{ $backup_version }}</td>
    </tr>
    <tr>
        <th>Data</th>
        <td>{{ $backup_date }}</td>
    </tr>
    </tbody>
</table>
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

