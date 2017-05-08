#!/usr/bin/python3

# The script will merge all files in the inFiles array into outFile
outFile = "design.css"

srcFiles = [
	"base.css",
	"header.css",
	"nav.css",
	"main.css",
	"aside-findme.css",
	"footer.css",
	"details.css"
]


# Open the outfile
o = open(outFile, mode='w')


# Read (and write in outFile) files
for f in srcFiles:
	print("Inputting "+f+" in "+outFile)
	i = open(f, mode='r')
	o.write(i.read())
	o.write("\n")
	i.close()


# Close the outfile
o.close()
print("Done")
