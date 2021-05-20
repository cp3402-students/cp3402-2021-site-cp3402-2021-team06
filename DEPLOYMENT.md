[<-- Back to README](README.md)
# Development and Deployment Workflow

## Project Management
### Trello
Our Dev. & Dep. workflow involved tracking and planning any project modifications or new additions. To do so, we utilized the collaborative list-making application 'Trello' to create and maintain a board of in-progress, future and completed goals as well as meeting notes and any additional information used.  

:exclamation: Our current Trello board can be viewed [https://trello.com/b/ZWsBaja8/group-06](here).  

:question: Visit Trello's [https://trello.com/guide/trello-101](Trello 101 Guide) for more information about creating a similar tracking and planning environment.

### Github
To maintain version control and tracking of developmental changes to the site theme, a team github repository has been initialized.
This repository contains only files from the WordPress "wp-content" folder

:exclamation: Our current Github repository can be viewed [https://github.com/cp3402-students/cp3402-2021-site-team06](here).

### Website servers
To host staging and productions websites, the service DigitalOcean has been used.  
Using this service, LAMP stacks have been installed in a Ubuntu environment to accurately represent a professional.  
The staging server always pulls the most up to date content from the team repository to be viewed and accepted by Townsville Jazz Club before being manually pulled to the production server.

Websites hosted on these servers can be found at the following addresses:  
Staging - https://team06jazz.xys  
Production - https://team06jazz.club  

## Development Cycle
### Local Environment
Development will start off in a local environment, making & testing any changes within your own virtual machine or dev environment of choice. Since our web servers are LAMP stacks running on Ubuntu, something similar would be recommended. Team members have currently been using a Cognac box with Vagrant for local development.

[Local Environment Set Up](LOCALDEVELOPMENT.md)

Locate your wp-content folder and clone the contents of the github repository, creating your own branch for development.
```
cd /your/local/directory/wp-content
git clone https://github.com/cp3402-students/cp3402-2021-site-team06.git .
git branch <branch-name>
git checkout <branch-name>
git push --set-upstream origin <branch-name>
```
Once your work is ready to be deployed create a pull request. your work will then be tested before being pulled into the main branch.

### Integrated Testing
To test css code, csslint has been installed locally and on the staging server.  
This provides feedback of potential errors or non-standard coding.  
The following command can be run on the staging site as is, or on your local machine with suitable substitute for the path    
```csslint /var/www/html/wpontent/themes/_tk-master/style.css
```

### Staging Environment
Once changes have been pushed into the main branch, the staging server will automatically pull the latest changes using github webhooks.  
This site presents an opportunity for clients and team members to discuss changes before they are made public.

### Production Environment
After changes on the staging site have been accepted by the client, the server admin must ssh into the production server using their provided details to pull the latest changes live.

[<-- Back to README](README.md)
