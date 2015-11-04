# JavaScript - AJAX (jQuery) &amp; APIs

Building from previous prototypes, this prototype will introduce you to JavaScript/jQuery AJAX calls. AJAX is a built in method of the jQuery object from the jQuery library. This prototype will demonstrate how an AJAX call can be used to retrieve information from an outside source using an API. This prototype will be using the Apple iTunes API to retrieve the current top 10 movies on iTunes.

- Readings
    - JS AJAX
        - <a href="https://drive.google.com/a/learningfuze.com/file/d/0B7eOl4joefDubkkzNmsta0llLTA/view" target="_blank">JS AJAX Slides</a>
	- JS AJAX Sending
        - <a href="https://drive.google.com/a/learningfuze.com/file/d/0B7eOl4joefDuSVRmRWMwdG9sOVU/view" target="_blank">JS AJAX Sending Slides</a>

- Presentations
    - JS APIs and AJAX
        - <a href="" target="_blank">Coming Soon</a>
- Projects
    - This prototype will help prepare you for the Hackathon and other upcoming projects that will require you to pull information from outside sources.
     
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

> `git checkout -b js_ajax`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "js_ajax" is the branch name.

## Coding Instructions

#### Getting Started

>1. An index.html and main.js file are included in this prototype
1. You will be entering your code directly into the main.js file
1. **DO NOT** edit this README

#### Feature Set 1 - Road to success
 
>In main.js, in the AJAX success call:

>- Note when the console logs happen.  Page load?  After button click?
	- Also note the order in which the three console.logs happen
- Create A **GLOBAL** variable - Name it `global_result`
- On line 12 set your global variable equal to result

#### Feature Set 2 - Exploring for images

>- Explore your global result variable in the console 
	- After saving the result to your global variable, refresh your page in the browser
	- Click the `Load it` button
	- In your console type `global_result` and press enter. 
- Find where the movie images are stored in the object.
	- *HINT* - Start by looking under `feed` then under `entry`
- Use what you learned to create a variable to hold all of the first movie's info
   - Create the variable in main.js, within the AJAX success call
   - Make it one step at a time.
   - Every time you figure out the next step, add it to your variable until you get the next piece you need
- Find the images in the first movie
- Alter your variable to get the 3rd image of the first movie

### Feature Set 3 - Adding the Images
 
>In your main.js, in the AJAX success call:

>- Make a repeat block to go through each movie
- get the 3rd image from each movie and store it in a variable
- Create an img tag with a src equal to your image variable
- Append the img tag to `#main`

### Feature Set 4 -  Title the Images

>In your main.js, in the AJAX success call:

>- Find the movie title and director for each image
- Create the appropriate HTML to add the movie title and director to each movie image created in #3

## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "js_ajax - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin js_ajax`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>js_ajax</b>

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
>  1. `compare: js_ajax`
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
>   1. If you set the commit message above you should get get <b>js_ajax - [you name first & last 
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