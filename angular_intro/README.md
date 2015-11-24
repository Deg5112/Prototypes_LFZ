
# Angular Introduction

This prototype is intended to be a gentle introduction to the magic called Angular

- Presentation(s)
    - Angular Intro
        - <a href="https://drive.google.com/open?id=0B6piuc4O8oQmY20xd1NrRm9SWGM" target="_blank">Slides Link</a>
- Video(s)
    - FE-1-Frameworks
        - <a href="https://plus.google.com/events/c4p84n8l27comis3ub8h919jhis" target="_blank">Video Link</a>
    
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

> `git checkout -b angular_intro`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "angular_intro" is the branch name.

## Coding Instructions

#### Getting Started

>1. An `index.html` file has been included in the `angular_intro` folder
1. **DO NOT** Edit this README file

#### Feature Set 1 - Toe testing Angular

>1. Within the included HTML file:
	- Link to the <a href="https://developers.google.com/speed/libraries/#angularjs" target="_blank">Angular CDN</a>
	- ng-app: 
		- Correctly include the `ng-app` directive to the applicable HTML element
	- ng-init: 
		- Create a div within the body
		- In the opening tag of the div initialize a variable using `ng-init`
			- Name the variable `myVar`
			- Set it to any string you like
	- expression: 
		- Within the div use an Angular `expression` to display the variable's value in the DOM
1. Run your code
	1. Do you see your string displayed on the page as expected?
		1. **YES** - Continue on to Feature Set 2
		1. **NO** - Return to step 1

#### Feature Set 2 - The water is fine!

>1. Building on the previous feature set:
	- ng-init: 
		- Create a new div below the previous one
		- Create an array called `carArray` using `ng-init` inside the opening tag of your new div
		- The carArray should contain at least four car names as strings
	- ng-repeat:
		- Within your div create a `<ul>` that contains **1** `<li>`
		- In the opening tag of the `<li>` add the `ng-repeat` directive with the proper values to loop through your `carArray`
		- Add an expression between the opening and closing `<li>` tags to display the data from your `carsArray`
1. Run your code
	1. Does your `carsArray` display properly as an unordered list on your page?
		1. **YES** - Continue on to Feature Set 3
		1. **NO** - Return to step 1
	
#### Feature Set 3 - Dude...its friggen magic?!

>1. Building on the previous feature sets:
	- ng-model: 
		- Create a final div after the other two
		- Create an input of type text inside the input
			- Use the `ng-model` directive to bind a variable called `myInput` to the input
		- Create a `<p>` tag bellow the input
			- Create an expression within the p tag that displays the value of the `myInput` variable
1. Run your code
	1. As you type in the input do you see its value displayed below the input?
		1. **YES** - You've made it!
		1. **NO** - Return to step 1
		
## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "angular_intro - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin angular_intro`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>angular_intro</b>

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
>  1. `compare: angular_intro`
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
>   1. If you set the commit message above you should get <b>angular_intro - [your first & last 
name]</b> already pre-populated in the Title field
>   1. If there is a different title pre-populated, change the title to match the correct format:
>      1. <b>angular_intro - [your first and last name]</b>
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
