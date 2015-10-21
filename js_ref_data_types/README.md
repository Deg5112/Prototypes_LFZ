# Javascript - Reference Data Types

Building from previous prototypes this prototype will introduce you to DOM creation using jQuery.

- Presentations
    - JS Referemce Data Types
        - <a href="https://drive.google.com/a/learningfuze.com/file/d/0BwjF2I7CBLDVNTY1ZTBIOWNnbUk/view" target="_blank">Slides Link</a>
        - <a href="https://plus.google.com/u/1/events/c1tb7su9k3km4jagksjtef09pi0" target="_blank">Video Link</a>
- Projects
    - This prototype will help build towards more advanced versions of Memory Match project by giving you the tools to dynamically creating the gameboard.

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

> `git checkout -b js_ref_data_types`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "js_ref_data_types" is the branch name.

## Coding Instructions

#### Getting Started

>1. Make an index.html inside the `js-ref-data-types` folder
1. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag
1. Add `script` tags between your `head` tags
1. **DO NOT** edit this README

#### Feature Set 1.0 - Student Array

>1. Declare an array that has at least 5 student names in it, as strings, name it: `student_array`
2. Use `console.log()` to print out the third student in your array
	- Use your array in your `console.log()`
	- **Example:** `console.log(student_array[?]);` (Replace the question mark with the number you think will get the third student)

>Open your page in your browser, open your console

>Do you see the student?

>##### Feature Set 1.1 - Array Methods 

>1. Using another `console.log` log out your student array
	- **Example:** `console.log(student_array);`
1. Using the **length** property, log out the length of your array
1. Using the **push()** method, add two more students to your array
1. Log out the length of your array again
1. Finally log out the full array again like you did in step 1.

#### Feature Set 2.0 - Build an object (You down with O.O.P.)

>1. Declare an empty object variable named, `student`
	- *Hint* - `var student = {}`
1. Using dot notation add the following 'key: value` pairs to your student object
	- `firstName` as a string
	- `lastName` as a string
	- `age`- as a number
	- `school` as a string
	- `questionList` as an array (set to an empty array: `[]`)
	- `hasQuestion` as a boolean (set to **false**)
	- *Hint* - `student.firstName = "John";

>##### Feature Set 2.1 - Add methods to the madness  

>1. Add the following four methods to your `student` object
	- `greeting()`
		- This method should take 0 parameters
		- This method should **return**: `"Hello, my name is [First Name]"`
	- `aboutMe()`
		- This method should take 0 parameters
		- This method should **return**: `"My full name is [your first and last name], I am [age] years old and I am a student at [school name]."`
	- `askQuestion()`
		- This method should take 1 parameter - `question`
		- The question should be added to the students `questionList` property
		- The students `hasQuestion` property should be changed to **true**
		- The method should **return**: `"A question has been added to your list"`
	- `answerQuestion()`
		- This method should take 0 parameters
		- Inside the method check if the student has a question or not by using the `hasQuestion` property
			- If the student has a question
				- reset the `hasQuestion` property to **false**
				- **return** the **LAST** question in the `questionList` property
			- If the student doesn't have a pending question
				- **return**: `"You have no pending questions"`

>##### Feature Set 2.2 - Test Your student

>Using `console.log()` create output in your console from your methods in the following order:
  - *Hint* - `console.log("Greeting function: ", student.greeting());`

>1. greeting()
1. aboutMe()
1. answerQuestion()
1. askQuestion()
1. askQuestion()
1. askQuestion()
1. answerQuestion()
1. Make sure to create a seperate `console.log` for each item on the list above and to follow that order.
  1. Did you get the last question asked from `answerQuestion`
  1. Log out your `questionList` to verify all three questions got added to the list

>Save your work, refresh the page

>Use the console to make sure everything works as expected.

#### Quick `console.log()` exercise

>1. In your console, type: `console.log("Here is my student object " + student);`
1. Now try typing: `console.log("Here is my student object", student);`

>Notice the difference, this is why using commas in your `console.log()` can be very useful.

## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "js_ref_data_types - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin js_ref_data_types`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>js_ref_data_types</b>

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
>  1. `compare: js_ref_data_types`
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
>   1. If you set the commit message above you should get get <b>js_ref_data_types - [you name first & last 
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