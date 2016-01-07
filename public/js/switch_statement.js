// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

switch (color) {
	case 'red':
		console.log("Red, Red Wine");
		break;
	case 'orange':
		console.log("Orange Crush");
		break;
	case 'yellow':
		console.log("Yellow Ledbetter");
		break;
	case 'green':
		console.log("Green Sleeves");
		break;	
	case 'blue':
		console.log("Blue Monday");
		break;
	default:
		console.log("Violet Indigo")
}

    // todo: create a case statement that will handle every color except indigo and violet
    // todo: when a color is encountered log a message that tells the color, and an object of that color
    //       example: Blue is the color of the sky.

    // todo: create a default case that will catch indigo and violet
    // todo: for the default case, log: I do not know anything by that color.
