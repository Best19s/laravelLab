<h1>663380195-2 {{$name}} Sonachai</h1>
<h1>Email: Chaiyawat.s@kkumail.com</h1>
<h1>Department: {{$dept}}</h1>
<ul>
   @if(isset($name))
      @foreach ($items as $item)
      <li>{{$item}}</li>
      @endforeach
   @else
      No items<br>
   @endif
</ul>

<a href="{{url('/')}}">Home</a>
<a href="{{url('/about')}}">About</a>
<a href="{{url('/info')}}">Information</a>
