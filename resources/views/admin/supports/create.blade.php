<h1>Nova Duvida</h1>

<form action="{{ route('supports.store') }}" method="post">
    @csrf
    <input name="subject" type="text" placeholder="Assunto" id="">
    <textarea name="body" cols="30" rows="5" placeholder="Descricao"></textarea>
    <button type="submit">Enviar</button>
</form>
<a href="{{ route('supports.index') }}">Voltar</a>
