# AngularJS - Controllers

Building from the previous Angular prototypes, this prototype will introduce controllers allowing you much more control over your application 

- Presentation(s)
    - AngularJS Controllerrs
        - <a href="https://drive.google.com/drive/u/0/folders/0B6piuc4O8oQmc2RWR2hTc2Qzb1k" target="_blank">Slides Link</a>
- Video(s)
    - C6 - FE - Angular Controllers
        - <a href="https://plus.google.com/u/0/events/ce6cni08ojc6aq8skkl2oj2lrs0?authkey=CP-I4v6JnrzpnAE" target="_blank">Video Link</a>
- Projects
    - This prototype should be the final piece in the puzzle to build out a fully functional SGT
    
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

> `git checkout -b ang_controllers`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "ang_controllers" is the branch name.

## Coding Instructions

#### Getting Started

>1. An `index.html` file is included in the `ang_controllers` folder
1. Add the <a href="https://developers.google.com/speed/libraries/#angularjs" target="_blank">Angular CDN</a> to the head of the index file
1. **DO NOT** Edit this README file

#### Feature Set 1 - Adding control

>1. Add a `ng-app` directive to your body tag
    1. Give your app a name
    1. For the examples `myApp` will be the name of the application
1. Add `<script>` tags at the bottom of the body
    1. Create a module and assign it to a variable
        1. `var app = angular.module("myApp", []);`
    1. Create the controller
        1. `app.controller("formController", function(){...});`
    1. Within the controller declare an empty form object
        1. `this.form = {};`
    1. Declare an empty array to hold the form objects in the future
        1. `this.formArray = [];`  
1. Add a `<div>` within the body
    1. Add a `ng-controller` directive to your div
        1. For the examples `formController as fc` will be used for the controller
    1. Within the div add three inputs and a textarea
        1. One input for first name
            1. Add `fc.form.fName` to the first name input field so that the value inserted binds to the object property
        1. One input for last name
            1. Add `fc.form.lName` to the last name input field so that the value inserted binds to the object propertyt
        1. one input for an email
            1. Add `fc.form.email` to the email input field so that the value inserted binds to the object property
        1. One textarea for comments
            1. Add `fc.form.comments` to the comments textarea so that the value inserted binds to the object property      

#### Feature Set 2 - Make it functional

>1. In the script tags do the following:
    1. Add another method that adds the form object to the formArray
        1. After you have added the form object to the `formArray` clear the form object
            1. `this.form = {};`
1. WIthin in the HTML add the following:
    1. Add a button after the textarea that calls the add function when clicked
    1. Below the button create a table that has three columns: Full Name, Email, and Comments
        1. For the full name use concatenation to display the first and last names in the same cell
    1. Use `ng-repeat` to loop through the `formArray` and display the data in the table
1. Run your code
    1. Are you able to add data to the `formArray` and have the table update with the added info?
        1. **YES** - Continue on to Feature Set 3
        1. **NO** - Go back through the steps, make sure you properly binded the inputs and that your function is written properly

#### Feature Set 3 - Keeping it short

>1. Within the script tag do the following:
    1. Within the `formController` 
        1. Declare a variable to set a max length to the comment section
            1. `this.maxLength = 25;`
        1. Create a method that returns the total number of characters still available for the comment
            1. subtract the length of the comments string from the maxLangth variable
        1. Add a method to your controller that returns `true` if remaining characters <= 0 and `false` for everything else
1. Within the HTML
    1. Add a `<p>` tag that will display the amount of remaining characters for the comment section
            1. **Example Output**: Characters Remaining: 15
    1. Use your new method to disable the textarea if the max amount of characters have been used
    1. Make sure to reset the textarea after the form object has been added to the infoArray
1. Run your code
    1. Does the comments textarea become disabled when you reach the character limit as well as retain the functionality from the previous feature sets?
        1. **YES** - Continue on to Feature Set 4
        1. **NO** - Revisit the previous steps to gain the proper functionality
        
#### Feature Set 4 - Multiple controllers

>1. In the script tag create the JavaScript to create a new controller `tableController` and update the `formController`
    1. in the function keyword pass in the `$scope` parameter, also add $scope to the Form controller as well
        1. `app.controller("formController", function($scope){...});`
    1. Within your `formController` change the `formArray` from using `this` to use `$scope`
        1. `$scope.formArray = [];`
        1. Make sure to update everywhere you refer to the `formArray`
    1. Add a method to the `tableController` that takes in one parameter
        1. The parameter should be the index of a table row
        1. Have the method remove the corresponding object from the `formArray`
    1. Add another method to the `tableController`
        1. Add a method that will return the total number of entries in the table
1. Make the following updates to the HTML
    1. Wrap the table within a `<div>`
        1. Give the div a new controller called `tableController as tc`
    1. Update the HTML to reflect the changes to the `formArray`
        1. In the `ng-repeat` directive you can now just refer to the `formArray` directly
            1. `ng-repeat="info in formArray"`
        1. Add an additional column to your table to hold a delete button
        1. Add a button to each entry
            1. Have the buttons call the delete method from the `tableController`
            1. Remember to pass in `$index`
        1. Add an additional row to the table that will show a live update of the form data as it is entered
    1. At the top of your table div add a `<p>` tag
        1. It should display the total number of entries in the table
            1. **Example Output**: Total Entries: 4
            1. Utilize the method that was created in the `tableController`
        
## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "ang_controllers - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin ang_controllers`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>ang_controllers</b>

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
>  1. `compare: ang_controllers`
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
>   1. If you set the commit message above you should get <b>ang_controllers - [your first & last 
name]</b> already pre-populated in the Title field
>   1. If there is a different title pre-populated, change the title to match the correct format:
>      1. <b>ang_controllers - [your first and last name]</b>
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