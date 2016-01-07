// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'red'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.
if (color=='red'){
	console.log("Red Dawn");
}
else if (color=='orange'){
	console.log("A Clockwork Orange");
}
else if (color=='yellow'){
	console.log("Old Yeller");
}
else if (color=='green'){
	console.log("Green Berets");
}
else if (color=='blue'){
	console.log("Blue Thunder");
}
// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

else if (color=='indigo' || 'violet'){
	console.log("Violet is unaware of Indigo");
}
// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.


(color == favorite)?console.log("You got me; I love this color"):console.log("Not my cup of tea")
