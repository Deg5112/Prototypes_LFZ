# Angular - Services Intro

This prototype will introduce you to services in Angular, for this prototype we will be utilizing some pre-existing services that are included with Angular.

- Presentation(s)
    - Angular - Services Intro
        - <a href="https://drive.google.com/a/learningfuze.com/file/d/0B6piuc4O8oQmbFhBbmRsdlI0MDA/view" target="_blank">Slides Link</a>
- Video(s)
    - C6 - FE - Angular Services Intro
        - <a href="https://plus.google.com/u/0/events/ctn44nhl0l43ibigiol9qn070t8?authkey=CL2ni7idzPG5owE" target="_blank">Video Link</a>
    
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

> `git checkout -b ang_services_intro`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "ang_services_intro" is the branch name.

## Coding Instructions

#### Getting Started

>1. An `index.html` and `script.js` file has been included in the `ang_services_intro` folder
1. **DO NOT** Edit this README file

>Using $http and $log create a prototype that takes in a users input and searches iTunes then displays the results.

#### Feature Set 1 - Getting Started

>1. Do the following in the `index.html` file
    1. Add the necessary Angular directives
        1. Declare your app
        1. Create a div that has a controller
    1. Create the necessary HTML to add an input field and a button within your div
1. Do the following in the `script.js` file
    1. Define your controller
    1. Create a function that constructs the proper URL based on the users input
        1. https://itunes.apple.com/search?term=[ARTIST+NAME]&callback=JSON_CALLBACK
        1. [ARTIST+NAME] Should be replaced with the users input
    1. Create another function that uses the constructed URL to retrieve data from iTunes
        1. Use $log to log out the data upon a successful call
        1. Log out an error message upon failure
    1. Have your button call the function that retrieves the data from iTunes
1. Run Your Code
    1. Are you able to view the retrieved data in the console after the button is clicked?
        1. **YES** - Move onto Feature Set 2
        1. **NO** - Go back through the steps and ask for help if necessary
 
#### Feature Set 2 - Making this look good

>1. In the `script.js` file do the following
    1. In your function that calls the iTune API asign the result to a variable that can be accessed in the HTML
1. In the `index.html` file do the following
    1. Utilizing the data retrieved from iTunes display the data to the user in a neat organized way
        1. You can use a table or any other means you wish
1. Run your code
    1. Are you able to search iTunes based on a users input and display the results in a organized fashion?
        1. **YES** - Congrats you are done!
        1. **NO** - Review the steps again and ask for help if necessary

## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "ang_services_intro - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin ang_services_intro`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>ang_services_intro</b>

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
>  1. `compare: ang_services_intro`
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
>   1. If you set the commit message above you should get <b>ang_services_intro - [your first & last 
name]</b> already pre-populated in the Title field
>   1. If there is a different title pre-populated, change the title to match the correct format:
>      1. <b>ang_services_intro - [your first and last name]</b>
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