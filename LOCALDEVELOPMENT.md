[<-- Back to deployment](DEPLOYMENT.md)

# Local Development
## 1. Prerequisites
1. [Vagrant](https://www.vagrantup.com/)
2. [Virtual Box](https://www.virtualbox.org/)
3. [Git](https://git-scm.com/)
4. [WordPress](https://en-au.wordpress.org/download/)
5. *(Not required)* [Cmder for windows](https://cmder.net/)
6. *(Not required)* [Text editor ATOM for ease of use](https://atom.io/)

---

## 2. Set Up Cognac Box
1. Open *Cmder* or other relevant Git enabled console and navigate to your desired project directory.
2. Run the command `git clone https://github.com/reddingwebpro/cognacbox.git my-project` replacing *"my project"* with your desired folder name.
3. `cd my-project`
4. Open your WordPress download and move all of **wordpress** into the **public** folder **except for wp-content** replacing any existing files.
5. Now we can clone the Team06 GitHub.
```
cd public
git clone https://github.com/cp3402-students/cp3402-2021-site-team06.git wp-content
```
6. Go back to project folder `cd ..`
7. It should all be set up! Run `vagrant up`

---

## 3. Set up WordPress
1. Go through the generic WordPress setup. The details for the database are below, but generic details for the user sign in are fine considering it's only a local environment.

![Wordpress Database Set up](/images/wordpressdatabase.JPG)

2. Select the theme in the Appearance tab in WordPress.

---

## 4. Making Changes
1. Make a change to the theme using your prefered editor. If using **ATOM** you will be able to push and make branches directly from the application.
2. Follow the next steps on [deployment](DEPLOYMENT.md) for the GitHub branching steps.

Local changes can be found at http://192.168.33.10/

[<-- Back to deployment](DEPLOYMENT.md)
