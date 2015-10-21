# Javascript - Repeat Blocks (Loops)

Building from previous prototypes this prototype will introduce you to JavaScript repeat blocks, giving you the ability to loop through data structures such as arrays and objects.

- Presentations
    - JS Repeat Blocks
        - <a href="https://drive.google.com/a/learningfuze.com/file/d/0BwjF2I7CBLDVbG5jSkZzTFlHWlU/view" target="_blank">Slides Link</a>
        - <a href="" target="_blank">Video Link Coming Soon</a>
- Projects
    - This prototype will help build towards the student grade table (SGT). The SGT project will rely heavily on arrays and objects requiring the use of repeat blocks to access and manipulate the data.

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

> `git checkout -b js_loops`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "js_loops" is the branch name.

## Coding Instructions

#### Getting Started

>1. Make an index.html inside the `js_loops` folder
1. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag
1. Add `script` tags between your `head` tags

#### Feature Set 1 - More array looping fun!

>1. Create the **exact** following array
	- `var numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];`
1. Using a `for` loop, output **all** the numbers in **ascending** order, `1-10`
	- *Hint* - `for(var i=0; i < numbers.length; i++){...}`
    - *Hint* - Place the `console.log()` between the `{}` of your `for` loop
    - *Reminder* - To access values in an array: `numbers[0]` **Try** replacing the `0` with `i`
1. Save your work and test your code
1. Using the same array from above write a different `for` loop that outputs **all** the numbers in **descending** order, `10-1`
1. Save your work and test your code
1. Using the same array again write yet another `for` loop that only outputs **odd** numbers, `1, 3, 5, 7, 9` 
1. Copy your `for` loop from the previous step (#6), **DO NOT** change anything except the array you are looping through. (use the `mixedArray` array below)
	- `var mixedArray = [4, 56, 11, 13, 97, 22, 7, 36, 19, 5, 8, 10];`
	- Does it still only output *odd* numbers?
	- If not can you fix it?

#### Feature Set 2 - For in loop

>1. Given the following object
	- `var classRoom = {desk1: 'Stu', desk2: 'Peggy', desk3: 'LoneStar', desk4: 'George', desk5: 'Sheldon'}`
	- Use a `for in` loop to loop through each key value pair
	- Create the following output `Stu is at desk1` `Peggy is at desk2` and so on ...

#### Feature Set 3 - While loop

>1. Given the following array:
	- `var studentArray = [{name: "Bob", grade: 87}, {name: "Fred", grade: 82}, {name: "George", grade: 93}, {name: "Robert". grade: 85}]
2. Write a function called `findStudent` that takes in **1** paramter 
	- The function should find a given student in the above array structure and give output based on the result of the search
		- If the student is found the output should be: `"Found [student name] their grade is: [grade]."`
		- If student is not found the output should be: `"Student [student name] not found."`
		
>##### Start the function by declaring 3 variables
```JavaScript
function findStudent(name) {
    var output = '';
    var i = 0;
    var found = false;
```
##### Create a while loop that searches the array for a student that has a name that matches the name parameter
```JavaScript
    while (!found && i < studentArray.length) {
        var student = studentArray[i];
        if (student.name == name) {
            output = "Found " + name + " Grade: " + student.grade;
            found = true;
        }
        i++;
    }
```
##### Check if there was a match, if not give appropriate output
```JavaScript
	if (!found) {
       output = "Student " + name + " not found.";
    }
```
##### Return the output variable
```JavaScript
	return output;
}
```
- Using 3 `console.log`s test your function
	1. Make sure you copied the `studentArray` into your file
	1. log the result of: `findStudent("George")`
		- *Example*: `console.log("Test 1:", findStudent("George"));`
	1. log the result of: `findStudent("Fred")`
	1. log the result of: `findStudent("Hank")`
- Verify you got the expected output from your function

##### Don't forget to test all of your work

## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "js_loops - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin js_loops`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>js_loops</b>

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
>  1. `compare: js_loops`
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
>   1. If you set the commit message above you should get get <b>js_loops - [you name first & last 
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