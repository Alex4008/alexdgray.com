// J-Basic Event Handlers
document.getElementById("jBasic").addEventListener("mouseover", jBasicMouseOver);
document.getElementById("jBasic").addEventListener("mouseout", mouseOut);

// Toilet Talk Event Handlers
document.getElementById("toilet").addEventListener("mouseover", toiletMouseOver);
document.getElementById("toilet").addEventListener("mouseout", mouseOut);

// Jumper Man Event Handlers
document.getElementById("jump").addEventListener("mouseover", jumpMouseOver);
document.getElementById("jump").addEventListener("mouseout", mouseOut);

// Maze Runner Event Handlers
document.getElementById("maze").addEventListener("mouseover", mazeMouseOver);
document.getElementById("maze").addEventListener("mouseout", mouseOut);

// Card Party Event Handlers
document.getElementById("card").addEventListener("mouseover", cardMouseOver);
document.getElementById("card").addEventListener("mouseout", mouseOut);

// Hunt The Lennie Event Handlers
document.getElementById("lennie").addEventListener("mouseover", lennieMouseOver);
document.getElementById("lennie").addEventListener("mouseout", mouseOut);

// Clicky Event Handlers
document.getElementById("clicky").addEventListener("mouseover", clickyMouseOver);
document.getElementById("clicky").addEventListener("mouseout", mouseOut);

// Calculator Event Handlers
document.getElementById("calc").addEventListener("mouseover", calcMouseOver);
document.getElementById("calc").addEventListener("mouseout", mouseOut);

// Hunt the lennie Event Handlers
document.getElementById("gameOfLife").addEventListener("mouseover", lifeMouseOver);
document.getElementById("gameOfLife").addEventListener("mouseout", mouseOut);

// Loan Shark Event Handlers
document.getElementById("shark").addEventListener("mouseover", sharkMouseOver);
document.getElementById("shark").addEventListener("mouseout", mouseOut);

// Gold Rush Event Handlers
document.getElementById("gold").addEventListener("mouseover", goldMouseOver);
document.getElementById("gold").addEventListener("mouseout", mouseOut);

// Function Defs (Used to set the correct text based on the project that is being hovered over)

function sharkMouseOver() {
	document.getElementById("modText").innerHTML = "This app was designed as a way to allow its users to lend and borrow items, similar to how Venmo works with currency. This app is fully functonal and was developed as my Senior Capstone at Miami University. Built using Flutter/Dart and Google Firebase, this app had custom accounts, sign in with google, and the ability to lend/borrow items from other users. Check out the video for more information!";
}

function goldMouseOver() {
	document.getElementById("modText").innerHTML = "This game was built in Unity using C# scripts as my Midterm project for an Intro to Game Design course at Miami University. The objective of the game was to progress through floors of a dungeon while mining new ores to level up your tools and fighting harder enemies as you progress. Check out the video linked on Github for more information!";
}

function jBasicMouseOver() {
	document.getElementById("modText").innerHTML = "Currently in development. This project revolves around a made up programming language. More information will come as I progress through the process. For now, a list of To-do items can be found on the github page.";
}

function toiletMouseOver() {
	document.getElementById("modText").innerHTML = "Toilet Talk was my final group project for my introduction into databases class at Miami University. The idea was simple. Create a front end system that allows students at Miami University to rate any bathroom on campus and allow students to search for a bathroom by location, or rating. On the front end this was accomplished using .net and C#. On the back end we used MySQL. Together with my partner, we worked on the front end website design using HTML, CSS, JavaScript and C#. We also created the systems needed to interact with the database on the back-end to store all the ratings for the restrooms.";
}

function jumpMouseOver() {
	document.getElementById("modText").innerHTML = "This was my first project that I developed in Java. It started as a way for me to learn Java ahead of my transfer to Miami University in the Fall of 2018. However it quickly turned into its own beast, and by December of 2018 it had become a full blown recreation of Super Mario Bros on the NES. It took approximately 4 months to develop, and that was with taking the sprites straight from Nintendo. Even though I used the sprites from the original game, all the code and levels were created by me.";
}

function mazeMouseOver() {
	document.getElementById("modText").innerHTML = "On the surface, this project isn't much. It was created in Spring 2018 during my spring semester at The University of Cincinnati. I used it as a way to further my knowledge of the C++ programming language beyond what we were learning in my intro class. The end result of this was a recreation of the first level of The Legend of Zelda NES. This was a lot of fun to develop as I only used the default C++ libraries and the C++ command prompt. I used this project to challenge myself to see what I could create with minimal knowledge of the C++ language. For what it is, I think that it turned out really well.";
}

function cardMouseOver() {
	document.getElementById("modText").innerHTML = "Card Party was a project that I worked on during the Spring/Summer of 2019. It was my first attempt at utilizing sockets to create a program that worked with the Internet to connect multiple clients. While there is a lot in this project that is done right. I failed to achieve my goal simply because at the time I did not know enough to complete it. Looking back, my code is messy and unorganized. Due to those reasons I never completed this. However, what was completed was very cool and I encourage you to check it out!";
}

function lennieMouseOver() {
	document.getElementById("modText").innerHTML = "This project of mine is based on the popular online game Hunt The Wumpus. It was developed as my final project for my Computer Science 1 class at The University of Cincinnati. As a little challenge to myself, I decided to see how long it would take me to create this project from start to finish, in one sitting. The v1.0 version, which was the version I submitted for class, ended up taking me just under 6 hours in total to create. From that initial version I expanded upon it and added new features to make it more user-friendly. It isn't much, but it was a fun quick coding challenge!";
}

function clickyMouseOver() {
	document.getElementById("modText").innerHTML = "This project was the first <i>game</i> that I ever created and the first project that I updated continuously. At the time, I was obsessed with idle clicking games, so I decided to try and create one of my own with the C# programming language. This project is what inspired me to continue my studies in computer science. The main motivation for creating this game at the time, and continuing to develop it was when I sent it to a few friends, they ended up turning it into a competition to see who could get the most points and the largest score. Seeing that something I had created was causing a little bit of fun motivated me to continue. In the end, I learned a ton from this project and it helped inspire me to create my future projects.";
}

function calcMouseOver() {
	document.getElementById("modText").innerHTML = "This was my first standalone project that I created. This was developed in the Spring of 2017 while I was taking my first real programming class through my local college during my senior year of high school. This project, while not much at all, helped reassure me that I wanted to study computer science the following year at college.";
}

function lifeMouseOver() {
	document.getElementById("modText").innerHTML = "This project was built using the Conway's Game of Life rules. This was built for the purpose of getting extra credit in my Computer Science 1 class at The University of Cincinnati. I went way above and beyond the requirements and built a program that not only follows the rules of the 'game' but also has the edges wrap around to simulate a sphere like world.";
}

// Default mouse out event. Triggered when the mouse leaves the area.
function mouseOut() {
	document.getElementById("modText").innerHTML = "Above I have a list of my personal projects that I have worked on in my free time over the last 4 years. Several are also school projects that I am quite proud of. They span my entire programming career, and show where I started to where I've come. For smaller / older projects you can expand the <i>More Projects</i> menu.";
}