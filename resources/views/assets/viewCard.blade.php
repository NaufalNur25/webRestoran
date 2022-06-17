<div class="container">

    {{-- <div class="columns pt-5">
        <div class="column is-two-fifths">
            <article class="panel is-primary">
                <p class="panel-heading">
                  Pencarian
                </p>
                <p class="panel-tabs">
                  <a class="is-active">All</a>
                  <a>Makanan</a>
                  <a>Minuman</a>
                </p>
                <div class="panel-block">
                  <p class="control has-icons-left">
                    <input class="input is-primary" type="text" placeholder="Search">
                    <span class="icon is-left">
                      <i class="fas fa-search" aria-hidden="true"></i>
                    </span>
                  </p>
                </div>
              </article>
        </div> --}}

    @foreach ($posts as $post)
        {{-- card produk --}}
        <div class="column">
            <div class="card mb-5">
                <header class="card-header">
                    <p class="card-header-title">
                    {{ $post -> namaMenu }}
                    </p>
                    <button class="card-header-icon" aria-label="more options">{{ $post -> stock >= 9 ? '9+' : $post -> stock }}</button>
                </header>
            <div class="card-content">
                <div class="content">
                    <p>
                    {{ $post -> desc }}<br>
                    | per price <strong>{{ $post -> price }}K </strong>IDR
                    </p>
                    <small>
                    {{ $post -> typeMenu }} | <strong>{{ $post -> category }}</strong>
                    <br>
                    <time datetime="2016-1-1"><strong>Last Update</strong> - {{ $post->created_at->diffForHumans() }}</time>
                    </small>
                </div>
            </div>
            <footer class="card-footer">
                <a href="{{ route('post.edit', [$post -> id]) }}" class="card-footer-item">Edit</a>
                <a href="delete/{{ $post -> id }}" class="card-footer-item">Delete</a>
            </footer>
            </div>
        </div>
    @endforeach
</div>
