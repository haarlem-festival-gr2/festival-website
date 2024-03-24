@extends('agenda.layout')

@section('title', 'Upcoming Events')

@section('content')

<div class="bg-[#fdc9ef] flex flex-row gap-4 p-4">
    <form class="bg-white flex flex-col gap-4 p-4" hx-post hx-target="#out">
        <label for="events">Events</label>
        <div id="events">
            <label for="hist-event">History</label>
            <input id="hist-event" type="checkbox" name="event" value="History">
            <label for="jazz-event">Jazz</label>
            <input id="jazz-event" type="checkbox" name="event" value="Jazz">
            <label for="yum-event">Yummy</label>
            <input id="yum-event" type="checkbox" name="event" value="Yummy">
        </div>

        <input type="submit" name="action" value="Submit" class="cursor-pointer border-black border rounded">
    </form>
    <div>
        world
    </div>

</div>

<div id="out">
    
</div>

@endsection
