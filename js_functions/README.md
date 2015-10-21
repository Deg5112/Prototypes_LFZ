# Javascript - Functions

Building from previous prototypes this prototype will introduce you to the use of functions in JavaScript.

- Presentations
    - JS Functions
        - <a href="https://drive.google.com/a/learningfuze.com/file/d/0B7eOl4joefDuRHNPU0xXNUNIRGs/view" target="_blank">Slides Link</a>
        - <a href="#" target="_blank">Video Coming Soon</a>
- Projects
    - This prototype will help build towards the Memory Match project by demonstrating how to do a basic card flip/reveal using functions combined with jQuery.

## Code Setup Details

#####1. Open PHPStorm

#####2. Navigate to prototypes

> Insert this command in the terminal tab

> `cd prototypes` & press enter

> - this changes the directory to the prototypes folder
> - If you get an error with the above command its probably because you are already within the correct directory

#####3. Create a feature grouping (*Create feature branch*)

> Insert & execute these command in the terminal tab individually

> `git checkout master` & press enter
> - The command above switches to the default branch

> `git pull https://github.com/Learning-Fuze/prototypes.git` & press enter
> - The command above downloads the newly posted prototypes and saves them to your local machine

> `git checkout -b js_functions`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "js_functions" is the branch name.

## Coding Instructions

#### Getting Started

>1. The following files have been included with this prototype
	- index.html
	- style.css
	- main.js
	- imgs folder
1. **DO NOT** edit this README file

### Feature Set 1 - No Return

#### Feature Set 1.1 - Build your first function

>1. In the main.js file declare a function called `myMessage` that takes no parameters
1. Inside your function add a `console.log()` with a message of your choice
	- Example:

>```JavaScript
function myMessage(){
    console.log("This is my first function!");
}
```

#### Feature Set 1.2 - Use your function

>1. Between your `body` tags at the bottom create a `button`, it can say whatever you would like
1. Add an `onclick` attribute to your opening `button` tag
1. Set the value of `onclick` to your function from above
	- Example: `onclick="myMessage()"`

>Open your index.html in a browser (open your console)

>Try clicking your button. What do you see in the console?

#### Feature Set 1.3 - Building a function with parameters 

>1. In the main.js file declare a function called `add` that takes in two `number` parameters
	- *hint* - `function add(x, y){...}`
1. Inside your function add the two variables together and `console.log()` the result

#### Feature Set 1.4 - Using your add function

>1. Create another `button` between your `body` tags at the bottom, have it say `ADD`
1. Add an `onclick` attribute to your opening `button` tag
1. Set the value of `onclick` to your `add` function from above
	- Example: `onclick="add(5, 8)"`

>Save your work and refresh your page in the browser

>Click your `ADD` button. What do you see in the console?

### Feature Set 2 - Time To Return

#### Feature Set 2.1 - return to add

>1. In the main.js file declare a function called `add2` that takes in two `number` parameters
1. Have the function **return** the result of adding the two parameters together
	- *HINT*
	```JavaScript
	function add2(x, y){
		var total = x + y;
		return total;
	}
	```
1. Declare a variable (outside of your function) called `add2result`:
	- set `add2result` to the result of calling your `add2` function
	- *HINT*
	```JavaScript
	var add2result = add2(10, 36);
	```
1. Create a `button` between your `body` tags at the bottom, have it say `ADD #2`
	- give your button an `onclick` attribute
	- set `onclick` equal to: `console.log(add2result)`
	- *HINT* - `onclick="console.log(add2result)"`

>Because `add2` `returns` a number you can set it to a variable or even use it in another function call. Your original `add` function doesn't `return` anything so you can't set the result to a variable.

### Feature Set 3 - Card Reveal

#### Feature Set 3.1 - cardFlip Function

>1. In the main.js file create a function called `cardFlip` that takes in one parameter
	- Parameter received will be the element that was clicked 
1. Inside the function find a way to make the clicked element no longer be visible
	- *HINT*
	```JavaScript
	function cardFlip(element){
		$(element).hide();
	}
	```

#### Feature Set 3.2 - Add onclick to HTML

>1. Inside the index.html page add an `onlick` attribute to all the divs with a class of 'back'
1. Set the value of onclick to: `cardFlip(this)`
	- *HINT*
	```HTML
	<div class="back" onclick="flipCard(this)"><img src="imgs/card_design.png" alt="Card Back"></div>
	```
1. Make sure to add `onclick` to all four divs with the class of back

>Save your work and refresh your page in the browser

>Click on your cards, does the front get revealed?

### Feature Set 4 - Find the src

>1. Inside the main.js file create a new function called `getSrc` that takes in one parameter
	- Parameter received will be the element that was clicked
1. Knowing the parameter will be the element with the class of back:
	- Use jQuery to find its sibling element with a class of 'front'
	- From there find the child of 'front' which should be an img tag
	- Then get the images src and return it from your function
	- *EXAMPLE 1* The long way
	```JavaScript
	function getSrc(back){
        var front = $(back).prev();
        var img = front.find("img");
        var src = img.attr("src");
        return src;
    }
    ```
    - *EXAMPLE 2* Little bit shorter but same steps
    ```JavaScript
    function getSrc(back){
       return $(back).prev().find("img").attr("src");
    }
    ```
1. Call your function inside your `cardFlip` function and save its returned value into a variable
1. `console.log` the variable created in the previous step
	- *EXAMPLE*
	```JavaScript
	function flipCard(ele){
        $(ele).hide();
        src = getSrc(ele);
        console.log(src);
    }
    ```

>Save your work and refresh your page in the browser

>Click on your cards, do you see the card source in the console?

#### Function Inception (Advanced Topic)

>Here is an example of functions being used as parameters in another function call. This only works because the `add2` function `returns` a number

>```JavaScript
var result = add2(add2(5, 10), add2(20, 30));
```

>In the example above the inner functions will be called first then there results will be passed into the outside function producing a final result.
- first 5 will be added to 10 equaling 15
- second 20 will be added to 30 equaling 50
- third and finally 15 and 50 will be added together equaling 65 which will then be stored in the variable `result`
Don't worry if this is confusing now, it's just an example to get you thinking

## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "js_functions - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin js_functions`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>js_functions</b>

##### 4. See if your feature fits with what everyone else was working on (Pull Request)

> ####Step 4.1 Open your prototypes Repo in the browser
> - The link Should follow this format github.com / [your user name] / prototypes

> ####Step 4.2 Click Pull request tab to open the pull request list

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/1.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/1.jpg?raw=true" width="350"/></a>

> ####Step 4.3 Click "New Pull request" button

> <a href="https://github.com/Learning-Fuze/prototypes/blo b/assets/assets/example/2.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/2.jpg?raw=true" width="800" /></a>

> ####Step 4.4 Comparing Changes
> During this step there are a hand full of highlighted things that need to be taken into consideration.

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/4.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/4.jpg?raw=true" width="800" /></a>

>  1. `base fork: Learning-Fuze/prototypes`
>    1. For all prototypes this will always remain the same
>  1. `base: C#_userName`
>    1. Here you will select the option that matches your username
>    1. If you can not locate an option that has your username, contact an instructor
>  1. `head fork: [your_user_name]/prototypes`
>    1. Here you will select the option that matches your username / prototypes
>    1. If you can not locate an option that has your username / prototypes, contact an instructor
>  1. `compare: js_functions`
>    1. Here you will locate the branch name (or feature name) you created at the beginning of the prototype
>    1. This will usually be the same as the name of the prototype
>  1. Github.com will let you know if the code can be merged automatically (without needing a manual merge)
>    1. If the text says something other than "able to merge". <b>Contact an instructor</b>
>    1. Sometimes a manual merge is necessary, it just has a couple more steps when completing the request (done by 
instructors at start)
>  1. Once we have verified #1 - #4 and noted #5, we click the "Create Pull request" button (#5 in the image above)

> ---

> ####Step 4.4 Add details into the pull request
> 1. Give the pull request a title, by default its the name of the last commit (package) message that was saved
>   1. If you set the commit message above you should get get <b>js_functions - [you name first & last 
name]</b> already pre populated in the Title field
> 1. <b>Don't assign a user.</b> (An Instructor will select who this gets assigned too)
>   1. Further into the cohort we will have students learn to review pull requests
> 1. Click on "Create pull Request"

> <a href="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/5.jpg?raw=true" target="_blank"><img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/example/5.jpg?raw=true" width="800" /></a>

> ---

##### 5. Collaborate on feedback

> Within the Github.com UI another developer or in this case an instructor will review the Pull Request you made - <b>Is your feature working</b>. Collaboration happens through github UI & the notifications are sent through email when comments are added to pull requests

> - Students should make modifications to there code based on the instructors feedback
> - Instructors will be giving an initial assessment based on the pull request. <b>Any additional collaboration after the instructor has been feedback will be on a requested basis only.</b>

##### 6. Pull Request Closed
> - In the LearningFuze workflow the pull requests are closed to indicate assessment has been given to the student and recorded.