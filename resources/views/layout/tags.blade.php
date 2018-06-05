<div class="container">
    <div class="row">

        <ul class="pager" style="font-family: 'Fira Sans', sans-serif;">
            <h3>Tagi</h3><br>

            @foreach ($tags as $tag)
            <li><a href="/posts/tags/{{ $tag }}">{{ $tag }}</a></li>
            @endforeach
        </ul>
    </div>
</div>