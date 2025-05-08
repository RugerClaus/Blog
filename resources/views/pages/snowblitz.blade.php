@extends('main')
@section('title', 'Snow Blitz')
@section('main')

    <h1>Snow Blitz</h1>
    <section class="snowblitz">
        <figure>
            <img src="{{asset('images/snowblitz_menu.png')}}" alt="Screenshot of Main Menu screen">
        </figure>
        <caption>Main menu of game</caption>
        <br>
        <figure>
            <img src="{{asset('images/snowblitz_game.png')}}" alt="Gameplay screenshot of Snow Blitz">
        </figure>
        <caption>Gameplay. The Player is the large blue square. The player moves left and right</caption>

        <section class="snowblitz_subsection_one">
            <p>
                This is a game I have created using Python with Pygame-CE. It is a game where snow falls and you play as a snowball.
            </p>
            <p>
                The player (the snowball) is constantly melting/shrinking and must catch snowballs to grow larger.
            </p>
            <p>
                The goal is to get the size bar full at the bottom of the screen. Once the bar is full, you level up!
            </p>
            <p>
                Each level is procedural and the levels are infinite.
            </p>
            <p>
                Starting at level 3 we get to see the first obstacle which are rocks. The player must avoid these as hitting one will cause a game over.
            </p>
            <p>
                Starting at level 5 you get your first power ups. Power ups are brightly colored squares. Currently there are three types:
            </p>
            <ul>
                <li>Absorb Rock: These are <span style="color: rgb(0,0,255);">BLUE</span> and let the player grow by colliding with rocks. This prevents rocks from killing the player while this powerup is active</li>
                <li>Ice IX: These are <span style="color: rgb(0,255,0);">GREEN</span> and stop the player from shrinking/melting while its effects are active</li>
                <li>Growth Hormones: These are <span style="color:rgb(255,0,0)">RED</span> and cause the player to grow at slightly above the base shrink rate. The player will constantly grow while its effects are active</li>
            </ul>

            <a href="/download/Snowblitz1.1.3.zip" download><h2 style="color: rgb(85,134,120)">Download Game</h2></a>

            <h2>Instructions:</h2>
            <ul>
                <li>Download Snowblitz1.1.3.zip using the link above.</li>
                <li>Extract the files to a directory of your choosing</li>
                <li>Open Snowblitz1.1.3</li>
                <li>Open /dist</li>
                <li>Run main.exe</li>
            </ul>
        </section>

    </section>
    
    
@endsection