# Angular routes

- Presentation(s)
	- Angular Routes
		- <a href="[URL]" target="_blank">Slides Link</a>
- Video(s)
	- [Name of related videos]
		- <a href="[URL]" target="_blank">Video Link</a>
- Projects
	- [Replace this sentence with a description on current/upcoming projects that are related to this prototype] 
- Resources
	- <a href="https://docs.angularjs.org/api/ngRoute/provider/$routeProvider" target="_blank">$routeProvider</a>
	- <a href="https://docs.angularjs.org/api/ng/function/angular.module" target="_blank">Modules</a>
	- <a href="https://docs.angularjs.org/guide/controller" target="_blank">Controllers</a>
	
## Code Setup Details

#####1. Open PHPStorm

#####2. Navigate to prototypes

>Insert this command in the terminal tab
	`cd prototypes` & press enter
- this changes the directory to the prototypes folder
- If you get an error with the above command its probably because you are already within the correct directory

#####3. Create a feature grouping (*Create feature branch*)

> Insert & execute these command in the terminal tab individually
> `git checkout master` & press enter
> - The command above switches to the default branch
> `git pull https://github.com/Learning-Fuze/prototypes.git` & press enter
> - The command above downloads the newly posted prototypes and saves them to your local machine
> `git checkout -b angular_routes`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "angular_routes" is the branch name.

## Coding Instructions

#### Getting Started

>1. included:
	- script.js
	- index.html
	- pages folder
 		- home.html
 		- about.html
 		- contact.html
1. You will need to include angular and angular-route
1. Also included is bootstrap and fontawesome
1. **DO NOT** Edit this README file

#### Feature Set 1 - "So many activites!" - Will Ferrell - [Step Brothers] (https://youtu.be/moR_v1lmJL4)

>1. HTML
	- index.html
	- include required angular scripts via CDN
1. Module
	- script.js  
		- create an angular application called routeApp
1. Controller
	- Place a controller on routeApp and name it 'routeCtrl' and give it a callback function that has $scope as a parameter
		- In the controller, assign a message property to $scope and give it a string of "lorem ipsum"
1. HTML
	- index.html
		- Initialize the Angular application and add associated Angular directives
			- Display the message variable that was defined within the route controller with an Angular expression

#### Feature Set 2 - "more cowbell? = false; more Angular injections = true;"

> 1. HTML
	- index.html
	- Add a div with the directive ng-view in the #main div
1. Javascript Angular.config
	- script.js
	- Add the dependency ngRoute into the routeApp
	- configure routes:
		- Call the config method on routeApp
			- The config method should have a callback function that takes $routeProvider as an argument
		- Call the when method on $routeProvider three times
			- The when method expects 2 arguments ('path', route) path is a string and route is an object
				- the path argument should should be a string and is the url
					- if the path was home.html it should be '/home'
				- Assign values to the templateUrl and controller properties of the route object
					- templateUrl should look like - template: 'pages/home.html'
					- controller should look like - controller: 'mainCtrl'
1. Javascript
	- script.js
		- for each route create controllers
		- the controller should take $scope as an argument
			- assign a different message for each controller
1. HTML
	- Within the pages folder, add the message from the controllers to the associated HTML files

## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "angular_routes - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin angular_routes`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>angular_routes</b>

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
>  1. `compare: angular_routes`
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
>   1. If you set the commit message above you should get <b>angular_routes - [your first & last 
name]</b> already pre-populated in the Title field
>   1. If there is a different title pre-populated, change the title to match the correct format:
>      1. <b>angular_routes - [your first and last name]</b>
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