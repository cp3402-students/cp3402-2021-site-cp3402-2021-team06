[<-- Back to README](README.md)
# Development and Deployment Workflow
## Initial Setup
### 1. Setup a development tracking and planning system
Our Dev. & Dep. workflow involved tracking and planning any project modifications and new editions. We utilized the collaborative list-making application 'Trello' to create and maintain a 'Trello board' of in-progress, future and completed goals. The current Trello board can be viewed [https://www.trello.com/b/ZWsBaja8/group-06](here) . Visit Trello's [https://www.trello.com/guide/trello-101](Trello 101 Guide) for more infomation about creating a similar tracking and planning environment.

### 2. Set up staging and production Wordpress servers/websites.  
Current servers created using DigitalOcean ubuntu servers with LAMP stacks installed.  
Staging: https://team06jazz.xys  
Production: https://team06jazz.club  

### 3. Create a team github repository of JUST the wp-content for version control during theme development.  
Current repository can be found at https://github.com/cp3402-students/cp3402-2021-site-team06

## Dev. Cycle
### 1 ~ Local Environment
Development will start off in a local environment, making & testing any changes within your own virtual machine or dev environment of choice. Since our web servers are LAMP stacks running on Ubuntu so something similar would be recommended.  

Locate your wp-content folder and clone the contents of the github repository, creating your own branch for development.
```
cd /your/local/directory/wp-content
git clone https://github.com/cp3402-students/cp3402-2021-site-team06.git .
git branch <branch-name>
git checkout <branch-name>
git push --set-upstream origin <branch-name>
```
Once your work is ready to be deployed create a pull request. your work will then be tested before being pulled into the main branch.

### 2 ~ Integrated Testing
??automated testing performed??

### 3 ~ Staging Environment
Once changes have been pushed into the main branch, the staging server will automatically pull the latest changes using github webhooks.  
This site presents an opportunity for clients and team members to discuss changes before they are made public.

### 4 ~ Production Environment
After changes on the staging site have been accepted by the client, the server admin must ssh into the production server using their provided details to pull the latest changes live.

[<-- Back to README](README.md)
