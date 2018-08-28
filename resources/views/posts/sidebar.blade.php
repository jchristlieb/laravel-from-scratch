<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            @if(auth()->check())
                <div class="card-body">
                    <h2>Hello {{ auth()->user()->name }}</h2>
                    <p>Join the conversation.</p>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/posts/create">Post article</a></li>
                        <li class="list-group-item"><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            @else
                <div class="card-body">
                    <h2>Join the conversation</h2>
                    <p>Register for free or login with your credentials.</p>
                    <a role="button" class="btn btn-primary" href="/register">Register</a>
                    <a role="button" class="btn btn-outline-primary" href="/login">Login</a>
                </div>
            @endif
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h3>Search archive</h3>
                <button class="form-control text-left mt-2 mb-2" type="button" data-toggle="collapse" data-target="#archive2018"
                        aria-expanded="false" aria-controls="2018">Article from 2018
                </button>
                <div class="collapse" id="archive2018">
                    @foreach($archives as $archive)

                        @if( $archive['year'] = 2018)

                            <div class="list-group-item">
                                <a href="/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
                                    {{ $archive['month'] .' ('. $archive['published'] .')'}}
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <button class="form-control text-left mt-2 mb-2" type="button" data-toggle="collapse" data-target="#archive2017"
                        aria-expanded="false" aria-controls="2018">Articles from 2017
                </button>
                <div class="collapse" id="archive2017">
                    @foreach($archives as $archive)

                        @if( $archive['year'] = 2017)

                            <div class="list-group-item">
                                <a href="/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
                                    {{ $archive['month'] .' ('. $archive['published'] .')'}}
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
        </a>
    </div>
</div>
</div>
