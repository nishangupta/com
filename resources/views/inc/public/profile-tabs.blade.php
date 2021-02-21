<ul class="nav nav-pills mb-4" id="myTab">
  <li class="nav-item">
    <a class="nav-link {{request()->segment(2)==''?'active':''}}" href="{{route('user.index')}}" >Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{request()->segment(2)=='academic'?'active':''}}" href="{{route('academic.index')}}" >Academic</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{request()->segment(2)=='test'?'active':''}}" href="{{route('test.index')}}" >Language</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{request()->segment(2)=='document'?'active':''}}" href="{{route('document.index')}}" >Documents</a>
  </li>
</ul>