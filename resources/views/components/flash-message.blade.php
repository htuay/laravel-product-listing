@if ($message = Session::get('message'))
    <div x-data="{show: true}" x-init="setTimeout(()=> show = false, 2000)" x-show="show" class="alert">
        <h3>{{$message}}</h3>
    </div>
@endif