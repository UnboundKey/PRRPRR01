#  Benjamin Nordin's programing 1 Github Repo#

***

#### Here you will find all the projects I do in conjunction with the Programering 1 course.####


Each project will have a README.MD with explanations of how the code works. These can include code snippets to clarify what I'm talking about.


Example of a code snippet:
```Lua

targetnumb = 50000
local primenumbs = {}

function isPrime(n)
  for i = 2, n - 1 do
    if n % i == 0 then
      return false
    end
  end
  return true
end
local starttime = os.clock()
for i = 1, targetnumb do
  if isPrime(i) then
    primenumbs[#primenumbs +1] = i
  end
end
print("Took "..os.clock() - starttime.." ms")


```

Of course there will still be comments in the code as well but there will be a more in depth explanation in the README file associated with each project or programing language.

### The Repos Structure:###

- Task 1
 - Lua
   - code.lua
   - README.md (Radable under the contents of the folder)

- Task 2
  - Lua
    - code.lua
    - README.md
  - PHP
    - code.php
    - README.md

There will also be a link in the README to where you can execute see if the code works

#### You can try the code here <a>Click Here</a> ####

This will usually be put near the top of the projects README for immediate access
