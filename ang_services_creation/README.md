# Angular - Services Creation

Building from the services Intro prototype this prototype will give you the opportunity to create your own service using Provider

- Presentation(s)
    - AngularJS - Services Creation
        - <a href="https://drive.google.com/a/learningfuze.com/file/d/0B6piuc4O8oQma25fTVZHa1VYYms/view" target="_blank">Slides Link</a>
- Video(s)
    - C6 - FE - Angular Service Creation
        - <a href="https://plus.google.com/u/0/events/ckm7cnsdu43puc2p48s38834cjo?authkey=CKq3pfT29LuhTQ" target="_blank">Video Link</a>
 
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

> `git checkout -b ang_services_creation`
> - Creating this feature groupings allow users to modify code without causing issues with the current functioning code.
> - Any modifications to these files after <b>branching</b> can be undone
> - "ang_services_creation" is the branch name.

## Coding Instructions

#### Getting Started

>1. An `index.html` file and a `script.js` file have been included in the `ang_services_creation` folder 
1. The `index.html` file is complete and should not need altered (unless you want to add bootstrap or styling)
1. The `script.js` file has been started and already contains some code that you will need to complete
1. **DO NOT** Edit this README file

#### Feature Set 1 - Time to provide

>1. In the `script.js` file do the following
1. Create three variables at the beginning of your provider code
    1. One to hold `this`
    1. One to hold your `api_key` set to: ""
    1. One to hold the `api_url` set to: ""
1. In the $get method inject in the needed services
    1. $http
    1. $q
    1. $log (optional)
1. From the $get method return an object that contains one method to call the API
    1. Your method should contain the following
        1. Create a variable for the data you wish to send to the API
            1. api_key
            1. The data needs to be a string in the following format
                1. `"key=value"`
                1. Also there is a jQuery method that will convert an object to a string formatted in that way
                    1. `$.param(object);`
        1. Create a variable to create a promise
            1. `var defer = $q.defer();`
        1. Create the $http request
            1. Make sure to include the following information
                1. url = the api's url
                1. method = should be POST
                1. data = should be set to the data you created above
                1. headers = {'Content-Type': 'application/x-www-form-urlencoded'}
                    1. **FYI:** This changes how angular sends the data, to a PHP friendly format
            1. Upon success use `defer.resolve(data)` to catch the the recieved data
                1. You may want to $log an info message here of the data received
            1. Upon error use `defer.reject("Error msg here")` to notify the user of errors
                1. You may want to $log an error message here as well
    1. `return` your `defer` object using `defer.promise;`
    

#### Feature Set 2 - Config your provider

>1. Use `app.config()` to set your `api_key` and the `api_url`
    1. Remember to add the word `Provider` to your service name
        1. **EX:** `app.config(function(sgtDataProvider){...});`
    1. Inside the config method
        1. Set the api_key to your api_key for the sgt
        1. Set the api_url to `http://s-apis.learningfuze.com/sgt/get`
        
#### Feature Set 3 - Add the final control

>1. Add the following code to the `ioController`
    1. Inject your new service into the controller and any other service you may need
    1. Create a variable to hold `this`
        1. Make sure you name it different than what you used in your provider code
            1. **IE:** Don't use `self` in both places
    1. Add an empty data object to your controller, make sure to call it 'data'
    1. Add a function called getData to your controller to call the SGT API
        1. Call your service to call the API
            1. Remember to use `.then()`
            1. `then` takes two parameters
                1. The first is a function that will be executed on success
                    1. Set the data returned to the controller's data object
                1. The second is a function that will be executed on failure
                    1. Log an error to the console and/or notify the user of the failure
1. Run your code
    1. After you click the `Get Students` button, do you see the student data?
        1. **YES** - Congrats! You made it!
        1. **NO** - Review the steps to try and find any issues with your code, if necessary ask for help.

## After Coding Details

##### 1. Save files to Git - Add all modified & created files
> Run below command in terminal tab

> `git add .`

> Saving files to Git registers the changed files in Git, allowing them to be grouped together by a message (commit)

##### 2. Package (group) all saved git files with a commit message

> Run below command in terminal tab

> `git commit -m "ang_services_creation - Eric Johnson"`
> - Eric Johnson should be replaced with your First & Last name
> - Grouping files with a message allows those changes to be seen by others as a specific version of the code

##### 3. Allow others to see your changes by uploading them to the Github website

> Run below command in terminal tab

> `git push origin ang_services_creation`
> - When running the code above, the Git application will send all commits (<b>groupings of saved files</b>) to the 
remote location (<b>github.com/[your-user-name]/prototypes indicated by origin</b>), specifically to the feature 
branch/group <b>ang_services_creation</b>

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
>  1. `compare: ang_services_creation`
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
>   1. If you set the commit message above you should get <b>ang_services_creation - [your first & last 
name]</b> already pre-populated in the Title field
>   1. If there is a different title pre-populated, change the title to match the correct format:
>      1. <b>ang_services_creation - [your first and last name]</b>
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