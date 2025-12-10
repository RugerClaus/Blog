@extends('main')
@section('title', 'Snow Blitz')
@section('main')

    <h1>Snow Blitz</h1>
    <section class="snowblitz">
        <figure>
            <img src="{{asset('images/snowblitz_menu.png')}}" alt="Screenshot of Main Menu screen">
            <caption>Main menu of game</caption>
        </figure>
        
        
        <figure>
            <img src="{{asset('images/snowblitz_game.png')}}" alt="Gameplay screenshot of Snow Blitz">
            <caption>Gameplay: The Player is the large blue square. The player moves left and right. The default color for the player is white.</caption>
        </figure>

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
            <p>
                Starting at level 15 you see the first "Level Reducers". These subtract their labeled value from the size threshold needed to level up. 
            </p>
            <p>
                This will make it easier for players not to grow too much to where they can't play the game past level 30. 
            </p>
            <p>
                I will be setting up a mailing list or comment section or something to provide updates on when updates are released. May make a launcher at some point.
            </p>
            <p>
                Also looking for feedback from anyone reading this and trying it
            </p>
            <ul>
                <li>Absorb Rock: These are <span style="color: rgb(0,0,255);">BLUE</span> and let the player grow by colliding with rocks. This prevents rocks from killing the player while this powerup is active</li>
                <li>-</li>
                <li>Ice IX: These are <span style="color: rgb(0,255,0);">GREEN</span> and stop the player from shrinking/melting while its effects are active</li>
                <li>-</li>
                <li>Growth Hormones: These are <span style="color:rgb(255,0,0)">RED</span> and cause the player to grow at slightly above the base shrink rate. The player will constantly grow while its effects are active</li>
            </ul>

            <label for="Windowsdl">Click to : </label><a id="Windowsdl" href="https://downloads.unknownanarchist.blog/SnowBlitz1.2.2.zip" download><h2 style="color: rgb(85,134,120)">Download For Windows</h2></a>
            <p>Windows release is currently Stable Alpha 1.2.2</p>
            <label for="Linuxdl">Click to : </label><a id="Linuxdl" href="https://downloads.unknownanarchist.blog/SnowBlitz1.2.2-Linux.zip" download><h2 style="color: rgb(85,134,120)">Download For Ubuntu</h2></a>
            <p>Ubuntu release is Stable Alpha 1.3.0</p>
            <h2>Instructions:</h2>
            <ul>
                <li>Download Snowblitz1.3.0.zip using the link above.</li>
                <li>Extract the files to a directory of your choosing</li>
                <li>Open Snowblitz1.3.0</li>
                <li>Open /SnowBlitz*</li>
                <li>Run main.exe - On linux, you just run ./SnowBlitz_vAlpha_1.3.0 in the directory</li>
            </ul>

            <br>
            <h2>Source code:</h2>
            <a href="https://downloads.unknownanarchist.blog/SnowBlitz-Source.zip"><h2 style="color: rgb(85,134,120)">SnowBlitz-Source.zip</h2></a>
            <p>This requires Pygame-ce*</p>
            <p>To use this run:</p>
            <br>
            <br>
            <p>pip install pygame-ce</p>
            <p><b>**Note that I cannot guarantee it will work on any other OS besides Windows 10 and Ubuntu 22.04</b></p>
            <p><b>**If you use another operating system, you can package the game with Pyinstaller, and then drag the assets into the /dist directory</b></p>
            <p><b>This requires you to build the project from source</b></p>
            <p><b>Otherwise the game is cross platform assuming all dependencies are met (pygame-ce), it is cross platform.</b></p>
            <p><b>Once you have Pygame-CE installed (globally or locally) run:</b></p>
            <h3>Linux in ~/root_dir</h3>
            <p style="color:greenyellow">python3 main.py</p>
            <h3>Windows in PATH\TO\ROOTDIR\main.py</h3>
            <p style="color: greenyellow">python main.py</p>
        </section>
        <section class="snowblitz_subsection_two">
            <h2>UPDATE</h2>
            <p>For anyone curious, I am porting this game to C++ using SDL directly for more control and better memory management as well as expandability</p>
            <p>At some point, this will be a 3D game once I'm able to figure out OpenGL properly, but for now, I will soon be updating with the earliest stable version of the game written in C++</p>
        </section>
    </section>
    
    
@endsection