<?php
var_dump($_GET);
var_dump($_POST);
?>

<!DOCTYPE html>
<html>  
    <head>
            <title>My First PHP</title>
            <meta charset="UTF-8">
    </head>
    <body>
        <h2>User Login</h2>
        <form method="POST" action="/my_first_form.php">
        <p>
        <label for="username">Username</label>
        <input id="username" name="username" placeholder="Enter name" type="text">
        </p>
        <p>
        <label for="password">Password</label>
        <input id="password" name="password" placeholder="Enter password" type="password">
        </p>
        <p>
            <button>Submit</button>
        <!-- <input type="submit" name="Release the hounds!" value="Login"> -->
        </p>

        </form>
        <h2>Compose an e-mail</h2>
        <form method="POST" action="/my_first_form.php">
            <p>
                <label for="to">TO:</label>
                <input id="to" name="to" placeholder="e-mail" type="text">
            </P>
            <p>
                <label for="from">FROM:</label>
                <input id="from" name="from" type="text">
            </P>
            <p>
                <label for="subject">SUBJECT:</label>
                <input id="subject" name="subject" placeholder="SUBJECT" type="text">
            </P>
            <p>
                <label for="body">BODY:</label>
                <textarea id="body" name="body" rows"5" cols"80">E-mail body</textarea>
            </p>
            <input type="checkbox" id="save-to-sent" name="save-to-sent" value="yes" checked="checked"
            <label for="save-to-sent">Do you want to save a copy in your SENT folder?    
            </label>
            <p>
            <button> Email it! </button>
            </P>       
        </form> 

        <form>
            <h2>Multiple Choice Test</h2>
            <p>What is love?</p>
            <label>            
            <input type="radio" name="q1" value="baby">baby
            </label>
            <label>            
            <input type="radio" name="q1" value="don't hurt me">don't hurt me
            </label>
            <label>            
            <input type="radio" name="q1" value="no more">no more
            </label>
            <p>
                <button> choose! </button>
        </form>

        <form>
            <p>What kind of food do you like? (you may choose multiple)</p>
            <label><input type="checkbox" id="food1" name="food[]" value="Chinese">Chinese</label>
            <label><input type="checkbox" id="food2" name="food[]" value="Mexican">Mexican</label> 
            <label><input type="checkbox" id="food3" name="food[]" value="American">American</label>    
            <label><input type="checkbox" id="food4" name="food[]" value="Italian">Italian</label>
        <p>
        <button>Select all that apply</button>      
        </form> 
<!--Multiselect box, List box -->
        <form>
        <label for "colors"> Select the colors you like </label>
        <select id="colors" name="colors[]" multiple>
            <option value="red">Red</option>
            <option value="orange" selected>Orange</option>
            <option value="blue">Blue</option>
            <option value="pink" selected>Pink</option>
            <option value="Green">Green</option>
            <option value="Yellow">Yellow</option>
            <option value="Black">Black</option>
        </select>
        <button>Select all that apply</button> 
        </form>
<!-- Checkbox -->
        <form>      
            <p>What movie types do you like? (you may choose multiple)</p>
            <label><input type="checkbox" id="movie1" name="movie[]" value="Horror">Horror</label>
            <label><input type="checkbox" id="movie2" name="movie[]" value="Comedy">Comedy</label> 
            <label><input type="checkbox" id="movie3" name="movie[]" value="Action">Action</label>    
            <label><input type="checkbox" id="movie4" name="movie[]" value="Drama">Drama</label>
            <label><input type="checkbox" id="movie5" name="movie[]" value="Suspense">Suspense</label>
            <label><input type="checkbox" id="movie6" name="movie[]" value="Romance">Romance</label>
        <p>
        <button>Select all that apply</button>      
        </form> 
        <form>
        <h2>Select Testing</h2>
        <label for="happy"> Are you happy?</label>
        <select id="happy" name="happy">
            <option value="1">yes</option>
            <option value="0" selected>no</option>
        </select>
        <br><button>Choose one</button>       
        </form>
        
        <form>
            <input type="color" name=?>
        <br><button>Choose one</button>       

        </form>
    </body>
</html>