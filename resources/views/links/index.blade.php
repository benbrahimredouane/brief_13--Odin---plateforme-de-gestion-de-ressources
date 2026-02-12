<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>categories</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                Odin
            </a>
            <div class="d-flex gap-2">
                <a href="/dashboard" class="btn btn-primary">dashboard</a>
                <a href="{{route('categories.index')}}" class="btn btn-outline-dark">
                    categories
                </a>
                <a href="/links" class="btn btn-outline-dark">
                    links
                </a>
                <a href="/tags" class="btn btn-outline-dark">
                    tags
                </a>
                <form method="POST" action="/logout">
                    @csrf
                    <button class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 fw-bold">Links</h1>
            @can('create', App\models\Link::class)
            <a href="{{route('links.create')}}" class="btn btn-primary">Add New URL</a>
            @endcan
        </div>

        @if($links->isEmpty())
            <p class="alert alert-info text-center">no links yet</p>
        @else
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
                @foreach($links as $link)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <small class="text-muted fw-bold">NAME:</small>
                            <h6 class="text-truncate" title="{{$link->name}}">{{$link->name}}</h6>
                            
                            <small class="text-muted fw-bold">URL:</small>
                            <a href="{{$link->url}}" class="text-break small mb-3 text-truncate d-block">{{$link->url}}</a>

                            <small class="text-muted fw-bold">category:</small>
                            <h6 class="text-truncate"> {{$link->category->name ?? 'no category'}}</h6>

                            <small class="text-muted">tags:</small>
                            <div class="container">
                                @foreach($link->tags as $tag)
                                <span>{{$tag->name}}</span>
                                @endforeach
                            </div>
                            
                            <div class="mt-auto d-flex gap-2 border-top pt-2">
                                @can('edit',$link)
                                <a href="{{route('links.edit',$link->id)}}" class="btn btn-sm btn-outline-primary flex-grow-1">Edit</a>
                                @endcan
                                @can('delete',$link)
                                <form action="{{route('links.destroy',$link->id)}}" method="post" class="flex-grow-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger w-100" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>

</body>
</html>