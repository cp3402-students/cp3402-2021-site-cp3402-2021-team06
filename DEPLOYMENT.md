[<-- Back to README](README.md)
# Development and Deployment Workflow
## Initial Setup
For our Dev. & Dep. workflow you will need to set up a few things first  

1. Create a trello board to keep track of active & future project goals.  
A current board can be located at https://trello.com/b/ZWsBaja8/group-06  

2. Set up staging and production Wordpress servers/websites.  
Current servers created using DigitalOcean ubuntu servers with LAMP stacks installed.  
Staging: https://team06jazz.xys  
Production: https://team06jazz.club  

3. Create a team github repository of JUST the wp-content for version control during theme development.  
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
