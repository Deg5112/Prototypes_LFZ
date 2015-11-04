# JS-Event Delegation - (jQuery)

Building from previous prototypes, this prototype will introduce you to JavaScript/jQuery Event Delegation. This prototype will increase your knowledge of how, when, where, and why events are or are not handled.

- Readings
    - JS Dom Creation & JS Event Handling
        - <a href="https://drive.google.com/open?id=0B7eOl4joefDualpHYlF6dERaWUk" target="_blank">JS Dom Creation</a>
        - <a href="https://drive.google.com/open?id=0B7eOl4joefDuQVRUbjFpMlRlOWs" target="_blank">JS Event Handling</a>

- Presentations
    - JS Event Handling
        - <a href="https://plus.google.com/events/cqla4jlj56hlg36ebuebhm44r4c" target="_blank">JS Event Handling</a>
- Projects
    - This prototype will help build towards the student grade table (SGT). 
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

> `git checkout -b js_event_delegation`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "js_event_delegation" is the branch name.

## Coding Instructions

#### Getting Started

>1. Use the provided index.html inside the `js_event_delegation` folder - Do not modify this README.md or the included index.html file!
>2. In the provided main.js file, create the following:

#### Feature Set 1 - The lonely event listener

>1. Target the #list and button with jQuery and add an .on() handler to:
>- Console.log() the buttons text node:
	- example - $( "#list button" ) 
	- console should read: 
		- if the first button is clicked: "Button #1" 
		- if the second button is clicked: "Button #2" etc.

#### Feature Set 2 - Bring a friend

>1. Create another button using jQuery DOM Creation:
	- example - `"<li><button style='margin-top: 10px'>Delegated Button#5 Handler</button></li>"`
	- Add the button to the #list with .append
>- Now click on the the last button - Add comments to the top of your main.js file (NOT IN HERE) and answer the following questions:
	- What do you think is going to happen? 
	- What happened? 
	- Why? 


#### Feature Set 3 - Now it's a party!

>1. Create the following:
	- Create a delegated event handler that will successfully console.log every new button added to the #list element 
		
#### Additional Challenge 

>- Create a new button that has a unique attribute and when clicked, opens a new tab and navigates to google.com.
>- Create a jQuery .on() handler that contains a conditional and only fires if the element contains a certain HTML attribute. 

##### Don't forget to test all of your work

## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "js_event_delegation - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin js_event_delegation`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>js_event_delegation</b>

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
>  1. `compare: js_event_delegation`
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
>   1. If you set the commit message above you should get get <b>js_event_delegation - [you name first & last 
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