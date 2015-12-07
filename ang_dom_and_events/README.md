# AngularJS - DOM and Events

Building from the intro to Angular prototype, we will be adding to your Angular toolbag with directives that can show, hide and disable elements as well as adding click handlers.

- Presentation(s)
    - AngularJS - DOM and Events
        - <a href="https://drive.google.com/a/learningfuze.com/file/d/0B6piuc4O8oQmQjhNNEJjaEVabEk/view" target="_blank">Slides Link</a>
- Video(s)
    - C6 - FE - Angular DOM & Events
        - <a href="https://plus.google.com/u/0/events/cmbi3ika1hhmueb0sc19dlauo7c?cfem=1" target="_blank">Video Link</a>
- Projects
    - This prototype will build towards building out the SGT project using Angular
    
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

> `git checkout -b angular_dom_and_events`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "angular_dom_and_events" is the branch name.

## Coding Instructions

#### Getting Started

>1. An `index.html` file has been included inside the `angular_dom_and_events` folder
1. Add the <a href="https://developers.google.com/speed/libraries/#angularjs" target="_blank">Angular CDN</a> to the top of the `index.html` file
1. **DO NOT** Edit this README file

#### Feature Set 1 - ng-disabled

>1. Add the `ng-app` directive to the opening body tag
1. Create a single div inside your body tag
    1. In the opening div tag initialize a variable and set it to `true`
1. Within the div tags create a button (it can say whatever you want)
    1. Add the `ng-disabled` directive to your opening button tag and set it equal to the variable you initialized above
1. Run your code
    1. Can you click your button?
        1. **YES** - Return to step one
        1. **NO** - Continue to Feature Set 2

#### Feature Set 2 - Toggle that Boolean

>1. Add an input below your button
    1. Set the type to `checkbox`
    1. Bind your variable from Feature Set 1 to the checkbox
1. Run your code
    1. When you uncheck your checkbox can you now click on the button?
        1. **YES** - Continue to Feature Set 3
        1. **NO** - Return to step one
        
#### Feature Set 3 - Should I Show or Should I Hide

>1. Add two spans above your button
    1. One span should say the button is enabled
    1. The other should say the button is disabled
    1. Using `ng-show` and/or `ng-hide` only display one span at a time depending on the state of the button
    1. *Hint:* Utilize your variable from before
1. Run your code
    1. Does the proper message display depending rather the button is enabled or disabled?
        1. **YES** - Continue to Feature Set 4
        1. **NO** - Return to step one
        
#### Feature Set 4 - Count the <s>Clicks</s> ng-clicks

>1. In the opening tag of your original div
    1. Initialize an additional variable named `counter`
        1. Set it equal to 0
1. In the opening tag of your button
    1. Add an Angular click handler
        1. When the button is clicked 1 should be added to the value of `counter`
1. At the bottom of your div
    1. Add a `<p>` tag 
        1. Within the `<p>` tag add an Angular expression that displays the value of the `counter` variable
        1. Add some text inside the `<p>` tag that gives context to the counter variable
            1. *Hint:* "The button has been clicked 4 times"
1. Run your code
    1. Does the original disable functionality still work?
        1. **YES** - Move to next question
        1. **NO** - Revisit previous Feature Sets to fix
    1. Does the counter variable display and increment properly with each button click?
        1. **YES** - You are done
        1. **NO** - Return to step 1

## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "angular_dom_and_events - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin angular_dom_and_events`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>angular_dom_and_events</b>

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
>  1. `compare: angular_dom_and_events`
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
>   1. If you set the commit message above you should get <b>angular_dom_and_events - [your first & last 
name]</b> already pre-populated in the Title field
>   1. If there is a different title pre-populated, change the title to match the correct format:
>      1. <b>angular_dom_and_events - [your first and last name]</b>
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