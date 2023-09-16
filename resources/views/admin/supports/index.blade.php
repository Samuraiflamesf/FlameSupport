<H1>Listagem dos Suportes</H1>

<a href="{{route('supports.create')}}">Criar Duvida</a>

@foreach($supports as $support)
@endforeach
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descricao</th>
        <thead></th>
    </thead>
    <tbody>
    @foreach ($supports as $support)
    <tr>
        <td>{{$support->subject}}</td>
        <td>{{$support->status}}</td>
        <td>{{$support->body}}</td>
        <td>
            >
        </td>
    </tr>
        
    @endforeach
</tbody>
</table>
