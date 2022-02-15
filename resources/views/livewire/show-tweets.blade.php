<div>
    Show Tweets

    <p>{{$message}}</p>

    <form action="" method="post" wire:submit.prevent="create" >
        <input type="text" name="message" id="message" wire:model="message">
        <button type="submit">Criar tweet</button>
    </form>
    
    <hr>
    @foreach ($tweets as $tweet)
        {{$tweet->user->name}} - {{$tweet->content}}
        <br>
    @endforeach
</div>
