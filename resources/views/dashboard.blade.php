<div>
    Olá {{auth()->user()->name}}, você está logado.
    <a href="{{route('logout')}}">Logout</a>
</div>
