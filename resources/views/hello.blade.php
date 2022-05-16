<x-header data={{$name}} />

@if($errors->any())
@foreach ($errors->all() as $err)
    <li>{{$err}}</li>
@endforeach
@endif

{{-- {{session()}} --}}

<form action="login" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter your user name" />
    @error('username')
        <br /><span style="color: red">{{$message}}</span>
    @enderror
    <br></br>
    <input type="password" name="password" placeholder="Enter your password" />
    @error('password')
        <br /><span style="color: red">{{$message}}</span>
    @enderror
    <br></br>
    <button type="submit">Login</button>
</form>

<div class="ml-12">
    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
        Hello, {{$name}}, id, {{$id}}
    </div>
</div>
