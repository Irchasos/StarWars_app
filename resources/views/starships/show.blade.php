@extends('layouts.layout')
@section('content')


    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-6">
            @if (isset($starship->photos) && count($starship->photos) > 0)
                @foreach($starship->photos as $photo)
                    <img src="{{ $photo->path }}" alt="" style="width: 600px; height: 800px; padding-bottom: 30px"/>
                @endforeach
            @else
                <img src="{{ asset('images/placeholders/starship.jpg') }}" alt=""
                     style="width: 600px; height: 600px; padding-bottom: 30px"/>

            @endif


        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align: center">
            <h4><span>{{$starship->name}}   </span>
            </h4>
            <p >details:
            </p>

            <p>Model:<span>{{$starship->model}}</span><br></p>
            <p>  MGLT: <span>{{$starship->MGLT}}</span><br></p>
            <p>  Cargo Capacity: <span>{{$starship->cargo_capacity}}</span><br></p>
            <p>  Consumambles: <span>{{$starship->consumables}}</span><br></p>
            <p>   Cost in Credits: <span>{{$starship->cost_in_credits}}</span><br></p>
            <p>  Min-Max Crew: <span>{{$starship->crew}}</span><br>
            <p>  Hyperdrive: <span>{{$starship->hyperdrive_rating}}</span><br></p>
            <p>  Length:<span>{{$starship->length}}</span><br>
            <p>  Manufacturer: <span>{{$starship->manufacturer}}</span><br></p>
            <p>  Max speed in atmospher: <span>{{$starship->max_atmosphering_speed}}</span><br></p>
            <p> Class: <span>{{$starship->starship_class}}</span><br></p>

            <p>  Passenger: <span>{{$starship->passengers}}</span><br>         </p>
        </div>


        <h4>Originally a farmer on Tatooine living with his uncle and aunt, Luke becomes a pivotal figure in the Rebel
            Alliance's struggle against the Galactic Empire. The son of fallen Jedi Knight Anakin Skywalker (turned Sith
            Lord Darth Vader) and Padmé Amidala, Luke is the twin brother of Rebellion leader Princess Leia and eventual
            brother-in-law of the smuggler Han Solo. Luke trains to be a Jedi under Jedi Masters Obi-Wan Kenobi and Yoda
            and rebuilds the Jedi Order. He later trains his nephew Ben Solo and mentors Rey. Though Luke dies at the
            end of The Last Jedi, he returns as a Force spirit in The Rise of Skywalker, encouraging Rey to face her
            grandfather, the resurrected Emperor Palpatine. At the end of the film, the spirits of Luke and Leia give
            Rey their blessing to adopt the Skywalker surname and continue their family's legacy.

            The character also briefly appears in the prequel film Episode III – Revenge of the Sith as an infant,
            portrayed by Aidan Barton, and in the Disney+ series Obi-Wan Kenobi as a child, portrayed by Grant Feely. In
            the de-canonized Star Wars Expanded Universe (renamed Legends), Luke is a main character in many stories set
            after Return of the Jedi, which depict him as a powerful Jedi Master, the husband of Mara Jade, father of
            Ben Skywalker, and maternal uncle of Jaina, Jacen and Anakin Solo.

        </h4>

    </div>


    <hr>
@endsection
