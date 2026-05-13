{{-- @dd($name, $habits) --}}

<h1>
    Welcome to the home page
</h1>

<p>
    Olá, {{ $name }}.
</p>

<p>
    Seus hobbies são:
</p>
<ul>
    @foreach ($habits as $habit)
        <li>
            {{ $habit }}
        </li>
    @endforeach
</ul>

@auth
    <p>
        Você está logado.
    </p>
@endauth

@guest
    <p>
        Você não está logado.
    </p>
@endguest