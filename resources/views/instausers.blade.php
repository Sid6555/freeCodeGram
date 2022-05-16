{{-- <x-header data={{$id}} /> --}}
<h1 class="h1">Insta Users</h1>
{{-- <ul>
    <li>{{$id}}, {{$name}}</li>
</ul> --}}
{{$id}}

{{$result[0]['id']}}
@foreach($result as $res)
    <h4>{{$res['name']}}</h4>
@endforeach

{{-- Total friends: @count {{$name}} --}}

<style>
    .h1{
        background-color: blue;
        color: yellow;
    }
</style>

@csrf
<script>
    var data = @json($result);
    console.log(data);
</script>
