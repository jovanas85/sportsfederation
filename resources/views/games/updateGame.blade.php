<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../formaClub.css">
    <title>Document</title>
</head>
<body>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/games">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('updategame', $game->id)}}" method="POST">
  {{csrf_field()}}
    <h3>Update Game</h3>
    <fieldset>
      <span>Event</span>
      <select name="eventId">
        @foreach ($events as $event)
          <option value="{{$event->id}}">{{$event->type}}</option>
        @endforeach
      </select> 
    </fieldset>
    <fieldset>
    Date:<br><input placeholder=" Date" type="date" name =" date" value="{{$game-> date}}" tabindex="2" >
    </fieldset>
    <fieldset>
    Place:<br><input placeholder="Place" type="text" name ="place" value="{{$game->place}}" tabindex="3">
    </fieldset>
    <fieldset>
      <span>Home</span>
          <select name="home">
            @foreach ($clubs as $club)
            <option value="{{$club->id}}">{{$club->name}}</option>
            @endforeach
          </select>  
    </fieldset>
    <fieldset>
      <span>Guest</span>
            <select name="guest">
              @foreach ($clubs as $club)
              <option value="{{$club->id}}">{{$club->name}}</option>
              @endforeach
            </select>
    </fieldset>
    <fieldset>
      <span>Referee1</span>
              <select name="referee1">
                @foreach ($staffs as $staff)
                <option value="{{$staff->id}}">{{$staff->name}}</option>
                @endforeach
              </select>
    </fieldset>
    <fieldset>
      <span>Referee2</span>
                <select name="referee2">
                  @foreach ($staffs as $staff)
                  <option value="{{$staff->id}}">{{$staff->name}}</option>
                  @endforeach
                </select>
    </fieldset>
    <fieldset>
      <span>Delegate</span>
                <select name="delegate">
                  @foreach ($staffs as $staff)
                  <option value="{{$staff->id}}">{{$staff->name}}</option>
                  @endforeach
                </select>
    </fieldset> 
    <fieldset>
    Round:<br><input placeholder=" Round" type="number" min="1" name =" round" value="{{$game-> round}}" tabindex="9" >
    </fieldset>
    <fieldset>
    Scores Home:<br><input placeholder="ScoresHome" type="number" min="1" name ="scoresHome" value="{{$game->scoresHome}}" tabindex="10" >
    </fieldset>
    <fieldset>
    Scores Guest:<br><input placeholder="ScoresGuest" type="number" name ="scoresGuest" value="{{$game->scoresGuest}}" tabindex="11" >
    </fieldset>
    <fieldset>
    Note:<br><textarea placeholder="Note" type="text" name ="note" min="1" value="{{$game->note}}" tabindex="12" ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>
</body>
</html>