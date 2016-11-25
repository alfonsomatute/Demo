
                <div class="post-preview">
                    <a href="{{ '/article/'.$article->id.'/'.$article->slug }}">
                        <h2 class="post-title">
                            {{ $article->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $article->content}}
                        </h3>
                    </a>
                    <p class="post-meta">Publicado el {{ date('d-m-Y',strtotime($article->date)) }}</p>
                </div>
                <hr>
