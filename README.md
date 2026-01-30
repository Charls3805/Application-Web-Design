# Application Web Design

## Student Information
- **Name:** Carlos David Rojas Talavera  
- **Registration Number:** T05056807  
- **Degree:** IDS  
- **Semester:** 6  

## Subject Information
- **Subject:** Application Web Design  
- **Professor:** Marco Horacio Moreno González  

## What is Markdown?
Markdown is a lightweight markup language used to format text using plain text syntax.  
It is commonly used for documentation, README files, and technical content.  
Markdown allows developers to write structured content in a simple and readable way.
---

## Markdown Tagging Options (Quick Reference)

Markdown is a lightweight markup language that lets you format plain text easily.  
Below are common tagging/formatting options you can use in README files:


### Headings
```md
# H1
## H2
### H3
#### H4
```

### Text Formatting
```md
**Bold text**
*Italic text*
~~Strikethrough~~
`Inline code`
```

### Lists
Unordered list
```md
- Item 1
- Item 2
  - Subitem
```
Ordered list
```md
1. First
2. Second
3. Third
```
### Links
```md
[GitHub](https://github.com)
```
### Images
```md
![Alt text](image.png)
```
### Blockquotes
```md
> This is a quote.
```
### Code Blocks
Inline
```md
Use `git status` to check repository status.
```
Multiline
```bash
git status
git add .
git commit -m "message"
```
### Tables
```md
| Command | Description |
|--------:|-------------|
| git status | Shows working tree status |
| git add .  | Stages all changes |
```
### Task Lists
```md
- [x] Completed task
- [ ] Pending task
```
### Git Commands Used (Reference Notes)
This section contains the main Git commands I used and researched for this activity.
Each command includes a short description for future reference.
### Check the status of a local repository
```bash
git status
```
Shows modified files, staged changes, and branch status.
### Add individual files or add everything
Add one file
```bash
git add README.md
```
Add all changes (global)
```bash
git add .
```
### Add comments to the commit (commit message)
```bash
git commit -m "Describe what changed"
```
Creates a commit with a descriptive message.

### Upload changes to the remote repository
```bash
git push -u origin main
```
Uploads commits to GitHub (remote repository). The -u links your local branch to the remote branch.

### Create, browse, and delete branches
Create and switch to a new branch
```bash
git checkout -b feature/readme-update
```
List branches
```bash
git branch
```
Switch branches
```bash
git checkout main
```
Delete a local branch
```bash
git branch -d feature/readme-update
```
Delete a remote branch
```bash
git push origin --delete feature/readme-update
```

### Roll back a repository to a specific commit

There are different ways to roll back depending on whether you want to keep changes or rewrite history.
Option A: Go back but keep the changes staged/unstaged (soft)
```bash
git reset --soft <commit_hash>
```
Option B: Go back and keep changes in the working directory (mixed)
```bash
git reset <commit_hash>
```
Option C: Go back and delete changes completely (hard)
```bash
git reset --hard <commit_hash>
```
Safe rollback for shared repos (recommended)
```bash
git revert <commit_hash>
```
Creates a new commit that undoes the changes, without rewriting history.

### Helpful browsing commands (extra)
View commit history
```bash
git log --oneline
```
View configured remotes
```bash
git remote -v
```