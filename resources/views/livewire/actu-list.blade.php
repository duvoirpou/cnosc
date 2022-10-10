<div>

    <div class="content blog-list">
        <div class="blog-wrapper clearfix">
            @foreach ($actualites as $row)
                <?php
                $date = date_create($row->date);
                ?>
                <div class="blog-meta">
                    <h3><a href="{{ route('article.show', $row->id_actualite) }}" title="">{{ $row->titre }}</a>
                    </h3>
                    <ul class="list-inline">
                        <li>Posté le {{ date_format($date, 'd-m-Y') }} </li>
                        <li><span>posté par</span> <a href="#">{{ $row->auteur }}</a></li>
                    </ul>
                </div><!-- end blog-meta -->

                <div class="blog-media">
                    <a href="{{ route('article.show', $row->id_actualite) }}" title=""><img
                            src="{{ asset('images') }}/{{ $row->photo }}" alt=""
                            class="img-responsive img-rounded"></a>
                </div><!-- end media -->

                <div class="blog-desc-big">
                    <p class="lead">{{ $row->libelle }}</p>
                    <p style="text-align:justify">
                        {{ substr($row->corps, 0, 350) }}&hellip;
                    </p>
                    <a href="{{ route('article.show', $row->id_actualite) }}" class="btn btn-primary">Lire plus</a>
                </div><!-- end desc -->
                <br>
            @endforeach
        </div><!-- end blog -->
    </div><!-- end content -->

    <div class="row text-primary">
        <div class="col-md-12">
            <div wire:loading.delay>Loading...</div>
            <div wire:loading.attr="disabled">{{ $actualites->links() }}</div>
            {{-- 'vendor.pagination.bootstrap-4' --}}
        </div><!-- end col -->
    </div><!-- end row -->

</div>
