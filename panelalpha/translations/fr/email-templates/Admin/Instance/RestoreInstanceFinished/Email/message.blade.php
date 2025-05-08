<p><strong>{{ $admin_name }}</strong>,</p>
<p>L'instance <strong><a href="{{ $admin_url }}/instances/{{ $instance_id }}"
                           target="_blank">{ $instance_name }}</a></strong> de <strong>{ $backup_name }}</strong>
    a été restauré avec succès.
</p>
</p> <p>Détails de la sauvegarde:</p> <p>Tableau
<table>
    <tbody>
    <tr>
        <th>Nom</th>
        <td>{{ $backup_name }}</td>
    </tr>
    <tr>
        <th>Type</th>
        <td>{{ $backup_type }}</td>
    </tr>
    <tr>
        <th>Taille</th>
        <td>{{ $backup_size }} MB</td>
    </tr>
    <tr>
        <th>Version</th>
        <td>{{ $backup_version }}</td>
    </tr>
    <tr>
        <th>Date</th>
        <td>{{ $backup_date }}</td>
    </tr>
    </tbody>
</table>
<p>Détails de l'instance:</p> <p>
<table>
    <tbody>
    <tr>
        <th>Nom du site</th>
        <td>{{ $instance_name }}</td>
    </tr>
    <tr>
        <th>Domaine</th>
        <td>{{ $instance_domaine }}</td>
    </tr>
    <th>Url</th>
    <td><a href="{{$instance_url}}">{{ $instance_url }}</a></td>
    </tr>
    </tbody>
</table>

