# Tarek learning git

This is just some text to test the commit 


git add * // add files 
git commit -m "Commit message"

git push origin master (Change master to whatever branch you want to push your changes to)

git pull (update your local repository to the newest commit)

git tag 1.0.0 xxxxxxxxxx (first 10 chars of the id from the log -> git log) 

git log --author=chaaban
git log --pretty=oneline
git log --graph --oneline --decorate --all

In case you did something wrong, which for sure never happens ;), you can replace local changes using the command
git checkout -- <filename>

If you instead want to drop all your local changes and commits, fetch the latest history from the server and point your local master branch at it like this
git fetch origin
git reset --hard origin/master

more info here : http://rogerdudler.github.io/git-guide/
