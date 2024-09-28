<?php include_once("modules/header.php");?>

<div class="parallax parallaxImg1">
    <div class = "main">
        <h2>Alex Gray</h2>
        <div>
            <img src="/imgs/profile.jpg" alt="Me, Alex Gray" class = "profilePicture hideOnMobile">
            <div style= "padding: 10px;">
                <p>Hi! My name is Alex. A little about me: I graduated from Miami University in 2021 with a Bachelor of Science in Computer Science. I've loved computers for as long as I can remember and have been programming since 2015 when I was 15. I started with HTML/CSS in High School. Following that I begin learning Java. This was so I could create add ons (plugins) for my favorite video game at the time: Minecraft. Following this I took a class at my local college to learn C# during my Senior year of High School. This really opened my eyes to the world of programming and I began to build my first programs. After that, I moved to Oxford Ohio to pursue my degree in computer science.</p>

                <p>In my free time, I enjoy playing Minecraft and working on custom plugins for the game using the open source Spigot API, developed by the community. When not working on/playing Minecraft, I often enjoy working on random side projects trying to learn new technologies and other programing languages outside of what I learned during my time at Miami. Below are a list of said projects, ranging from calculators to video games. If you have any questions, do not hesitate to reach out via email!</p>
                <div class="center clear">
                    <button onclick="window.open ('https://www.linkedin.com/in/alex-gray-a9b773178/')" class="btn">LinkedIn</button>
                    <button onclick="window.location.href = 'imgs/resume.pdf';" class="btn">Resume</button>
                </div>
            </div>
        </div>
        <div class="projectsSection">
            <h2 class = "clear">Programming Projects</h2>
            <h3 class = "clear center onlyMobile"><i>(Tap a Card For The Git Repo)</i></h3>
            <div class="row">
                <div class="column">
                    <a href="https://blogs.miamioh.edu/cse-senior-design-expo/2021/04/personal-productivity-app/" target="_blank">
                        <div class="card" id="shark">
                            <h3>Loan Shark</h3>
                            <p><i>Flutter / Dart</i></p>
                            <p>2020 - 2021</p>
                            <button onclick="window.open('https://youtu.be/Pn_JbuvqkzE', '_blank')" class="btn projectBtnMod">Capstone Video</button>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://github.com/Alex4008/Gold-Rush" target="_blank">
                        <div class="card" id="gold">
                            <h3>Gold Rush</h3>
                            <p><i>Unity / C#</i></p>
                            <p>2021</p>
                            <button onclick="window.open('https://www.mediafire.com/file/5hs1zqo2z94qlw7/Gold_Rush_v1.0.zip/file', '_blank')" class="btn projectBtnMod hideOnMobile">Download v1.0</button>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <div class="card" id="jump">
                        <a href="https://github.com/Alex4008/Jumper-Man" target="_blank">
                            <h3>Jumper Man</h3>
                            <p><i>Java</i></p>
                            <p>2018</p>
                            <button onclick="window.open('http://www.mediafire.com/file/q691sej4i7qzm9u/Jumper_Man_v1.2.jar/file', '_blank')" class="btn projectBtnMod hideOnMobile">Download v1.2</button>
                        </a>
                    </div>
                </div>

                <div class="column">
                    <div class="card" id="maze">
                        <a href="https://github.com/Alex4008/Maze-Runner" target="_blank">
                            <h3>Maze Runner</h3>
                            <p><i>C++</i></p>
                            <p>2018</p>
                            <button onclick="window.open('http://www.mediafire.com/file/jrc0cc2x9op7c6u/Maze_Runner_v1.0.zip/file', '_blank')" class="btn projectBtnMod hideOnMobile">Download v1.0</button>
                        </a>
                    </div>
                </div>
            </div>
            
            <button type="button" class="collapsible"><h2>- More Projects -</h2></button>
            <div class="content">
                <div class="row">
                    <div class="column">
                        <a href="https://github.com/Alex4008/J-Basic-Editor" target="_blank">
                            <div class="card" id="jBasic">
                                <h3>J-Basic</h3>
                                <p><i>Java</i></p>
                                <p>2020</p>
                                <button onclick="window.open('https://www.mediafire.com/file/xlg4c9ydeg0geae/J-Basic_Editor_v0.2.jar/file', '_blank')" class="btn projectBtnMod hideOnMobile">Download v0.2</button>
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a href="https://github.com/Alex4008/Spotify-Playlist-Generator" target="_blank">
                            <div class="card" id="spotify">
                                <h3>Spotify Playlist Generator</h3>
                                <p><i>JavaScript / Node.JS</i></p>
                                <p>2020</p>
                                <button onclick="window.open('http://spotify.alexdgray.com', '_blank')" class="btn projectBtnMod hideOnMobile">Check It Out!</button>
                            </div>
                        </a>
                    </div>

                    <div class="column">
                        <div class="card" id="card">
                            <a href="https://github.com/Alex4008/Card-Party" target="_blank">
                                <h3>Card Party</h3>
                                <p><i>Java</i></p>
                                <p>2019</p>
                                <button onclick="window.open('http://www.mediafire.com/folder/4ca68un95cq80/Card_Party', '_blank')" class="btn projectBtnMod hideOnMobile">Download</button>
                            </a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card" id="toilet">
                        <a href="https://github.com/Alex4008/Toilet-Talk" target="_blank">
                            <h3>Toilet Talk</h3>
                            <p><i>ASP.Net</i></p>
                            <p>2019</p>
                        </a>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="column">
                        <div class="card" id="lennie">
                            <a href="https://github.com/Alex4008/Hunt-The-Lennie" target="_blank">
                                <h3>Hunt The Lennie</h3>
                                <p><i>C++</i></p>
                                <p>2018</p>
                                <button onclick="window.open('http://www.mediafire.com/file/w8sfq844yy4hdw3/Hunt_The_Lennie_v1.1.exe/file', '_blank')" class="btn projectBtnMod hideOnMobile">Download v1.1</button>
                            </a>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card" id="gameOfLife">
                            <a href="https://github.com/Alex4008/The-Game-of-Life" target="_blank">
                                <h3>The Game of Life</h3>
                                <p><i>C++</i></p>
                                <p>2018</p>
                                <button onclick="window.open('http://www.mediafire.com/file/2tdcc2mdwhtwegg/The_Game_of_Life_v1.2.exe/file', '_blank')" class="btn projectBtnMod hideOnMobile">Download v1.2</button>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card" id="clicky">
                            <a href="https://github.com/Alex4008/Clicky-The-Game" target="_blank">
                                <h3>"Clicky"</h3>
                                <p><i>C#</i></p>
                                <p>2017</p>
                                <button onclick="window.open('http://www.mediafire.com/file/9n4d8saxqjadvej/Clicky_-_The_Game_v1.2.5.exe/file', '_blank')" class="btn projectBtnMod hideOnMobile">Download v1.2.5</button>
                            </a>
                        </div>
                    </div>
                    
                    <div class="column">
                        <div class="card" id="calc">
                            <a href="https://github.com/Alex4008/Calculator" target="_blank">
                                <h3>Calculator</h3>
                                <p><i>C#</i></p>
                                <p>2017</p>
                                <button onclick="window.open('http://www.mediafire.com/file/cl27caclp21r9rx/Calculator_v3.0.exe/file', '_blank')" class="btn projectBtnMod hideOnMobile">Download v3.0</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="subSection">
    <h4 id="modText">Above I have a list of my personal projects that I have worked on in my free time over the last 4 years. Several are also school projects that I am quite proud of. They span my entire programming career, and show where I started to where I've come. For smaller / older projects you can expand the <i>More Projects</i> menu.</h4>
</div>

<div class ="parallax parallaxImg2">
    <div class="main">
        <div class="skillsSection">
            <p>Java</p>
            <div class="skillBar">
                <div class="skills java">98%</div>
            </div>

            <p>HTML</p>
            <div class="skillBar">
                <div class="skills html">95%</div>
            </div>
            
            <p>CSS</p>
            <div class="skillBar">
                <div class="skills css">90%</div>
            </div>
            
            <p>Google's Flutter/Dart</p>
            <div class="skillBar">
                <div class="skills dart">80%</div>
            </div>

            <p>JavaScript</p>
            <div class="skillBar">
                <div class="skills javaScript">85%</div>
            </div>

            <p>PhP</p>
            <div class="skillBar">
                <div class="skills php">80%</div>
            </div>

            <p>C++</p>
            <div class="skillBar">
                <div class="skills c">80%</div>
            </div>

            <p>C#</p>
            <div class="skillBar">
                <div class="skills cSharp">80%</div>
            </div>
            
            <p>Amazon Web Services (AWS)</p>
            <div class="skillBar">
                <div class="skills aws">70%</div>
            </div>

            <p>MySQL</p>
            <div class="skillBar">
                <div class="skills sql">65%</div>
            </div>
        </div>
    </div>
</div>

<?php include_once("modules/footer.php");?>