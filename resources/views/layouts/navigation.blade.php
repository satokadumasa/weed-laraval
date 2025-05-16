        <nav class="" style="position: fixed;">
            <div class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="col">
                            <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
                        </div>
                    </div>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title">{{ config('app.name', 'Laravel') }} Menu</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" ></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav">
                                <li class="nav-item" style="padding: 2px;">
                                    <a href="/dashboard" class="btn btn-primary">
                                        {{ __('ダッシュボード') }}
                                    </a>
                                </li>
                                <li class="nav-item" style="padding: 2px;">
                                    <a href="/profile" class="btn btn-primary">
                                        {{ __('プロファイル') }}
                                    </a>
                                </li>
                                <li class="nav-item" style="padding: 2px;">
                                    @if(auth()->user())
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="btn btn-secondary">Sign Out</button>
                                    </form>
                                    @else
                                    <a href="/login" class="btn btn-primary">Sign In</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
