<h2>Demo view Unicode</h2>
@if(session('mes'))
{
<div class="alert alert-success">
      {{ session('mes') }}
</div>
}

@endif
<form action="" method="post">
      @csrf
      <input type="text" name="username" placeholder="user name ..." value="{{old('username')}}">

      <button type="submit"> Submit</button>
</form>