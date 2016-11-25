
                <div class="post-preview">
                    <a href="{{ '/article/'.$article->id.'/'.$article->slug }}">
                        <h2 class="post-title">
                            {{ $article->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ str_limit($article->content,500) }}
                        </h3>
                    </a>
                    <p class="post-meta">Publicado en {{ Html::link(url('categories/'.$article->category->id.'/'.$article->category->slug),$article->category->name) }} el {{ date('d-m-Y',strtotime($article->date)) }}</p>
                </div>
                <hr>
