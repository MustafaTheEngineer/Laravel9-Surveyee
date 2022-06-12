@foreach ($children as $subcategory)
    @if (count($subcategory->children))
        <li>
            <div class="my-dropdown">
                <div class="label">
                    <a class="dropdown-caret-link text-decoration-none" href="{{route('categorysurveys',['id' => $subcategory->id, 'slug' => $subcategory->title])}}"> {{$subcategory->title}}</a>
                    <button class="dropdown-caret-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                    </button>
                </div>
                <ul class="my-dropdown-menu">
                    @include('home.categorytree',['children' => $subcategory->children])
                </ul>
            </div>
        </li>
    @else
        <li>
            <a href="{{route('categorysurveys',['id' => $subcategory->id, 'slug' => $subcategory->title])}}">{{$subcategory->title}}</a>
        </li>
    @endif
@endforeach