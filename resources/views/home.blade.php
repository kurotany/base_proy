@include('js_scripts')
@include('css_scripts')
@include('menu')
<html>
    <head>
        @stack('css_scripts')
        Principal
    </head>
    <body>
        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            Link with href
          </a>
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            Button with data-bs-target
            
          </button>
        @foreach ($menus as $menu)
                <div>{{$menu->nombre}} ({{$menu->id}})</div>
                @foreach ($menu->children as $child)
                    <div>->{{$child->nombre}} ({{$child->id}})</div>
                @endforeach
        @endforeach
        @stack('side_menu')
        @stack('js_scripts')
    </body>
</html>